<?php
$page_title = "Catálogo | Tokyo Tunning";
$current_page = "catalogo";
include 'includes/header.php';

// Leer el catálogo desde el CSV importado de WooCommerce
$csvFile = __DIR__ . '/BD_Worpress/wc-product-export-18-3-2026-1773814320550.csv';
$productos_importados = [];
$categorias_set = [];
$total_productos = 0;

if (file_exists($csvFile) && ($handle = fopen($csvFile, "r")) !== FALSE) {
    // Leer primera fila (encabezados)
    $header = fgetcsv($handle, 10000, ",");
    // Identificar índices de las columnas y asegurar que existan
    $idx_tipo = array_search('Tipo', $header);
    $idx_nombre = array_search('Nombre', $header);
    $idx_desc = array_search('Descripción corta', $header);
    if ($idx_desc === false) $idx_desc = array_search('Descripción', $header);
    $idx_precio_rebajado = array_search('Precio rebajado', $header);
    $idx_precio_normal = array_search('Precio normal', $header);
    $idx_categorias = array_search('Categorías', $header);
    $idx_imagenes = array_search('Imágenes', $header);
    
    while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
        if ($idx_tipo === false || !isset($data[$idx_tipo])) continue;
        
        $tipo = $data[$idx_tipo];
        
        // Solo considerar productos 'simple' y 'variable' (las variaciones puras no para no sobrecargar de repetidos)
        if ($tipo === 'simple' || $tipo === 'variable') {
            $nombre = $data[$idx_nombre] ?? '';
            if (empty(trim($nombre))) continue;
            
            // Obtener Categoría Principal
            $catStr = $data[$idx_categorias] ?? '';
            $cats = explode(',', $catStr);
            // Tomamos la categoría más específica al final de la ruta '>'
            $partes_cat = explode('>', $cats[0]);
            $main_cat = trim(end($partes_cat));
            if (empty($main_cat)) $main_cat = "General";
            
            $categorias_set[$main_cat] = ($categorias_set[$main_cat] ?? 0) + 1;
            
            // Procesar Imagen
            $imgStr = $data[$idx_imagenes] ?? '';
            $imgs = explode(',', $imgStr);
            $img = trim($imgs[0] ?? '');
            
            // Reemplazo visual elegante si la imagen está vacía
            if (empty($img)) {
                $img = "https://images.unsplash.com/photo-1600706432502-77a0e2e32729?w=500&q=80"; 
            }
            
            // Procesar Precios
            $precio = trim($data[$idx_precio_rebajado] ?? '');
            if (empty($precio)) $precio = trim($data[$idx_precio_normal] ?? '');
            
            $precio_num = 0;
            if (empty($precio) && $tipo === 'variable') {
                $precio_formateado = "Múltiples Opciones";
            } else if (!empty($precio)) {
                 $precio_str = str_replace(',0', '', $precio);
                 $precio_num = (float)$precio_str;
                 $precio_formateado = "$" . number_format($precio_num, 0, ',', '.');
            } else {
                 $precio_formateado = "Consultar Precio";
            }
            
            // Procesar Descripción (Extraer solo un extracto de texto)
            $desc_raw = '';
            if ($idx_desc !== false && isset($data[$idx_desc])) {
                $desc_raw = $data[$idx_desc];
            }
            $desc = strip_tags(html_entity_decode($desc_raw));
            if (strlen($desc) > 80) {
                $desc = substr($desc, 0, 77) . '...';
            }
            if (empty(trim($desc))) {
                $desc = "Producto sin descripción detallada disponible.";
            }
            
            $productos_importados[] = [
                'nombre' => $nombre,
                'cat' => $main_cat,
                'precio_formateado' => $precio_formateado,
                'precio_num' => $precio_num,
                'img' => $img,
                'desc' => $desc,
                'tipo' => $tipo,
                'cat_count' => 0, // se rellena después
            ];
            $total_productos++;
        }
    }
    fclose($handle);
}

// Variables HTML GET para filtros 'sin JS'
$filtro_cat = isset($_GET['cat']) ? $_GET['cat'] : 'all';
$filtro_sort = isset($_GET['sort']) ? $_GET['sort'] : 'popularity';

// Inyectar cat_count para badge de popularidad
foreach($productos_importados as &$p) {
    $p['cat_count'] = $categorias_set[$p['cat']] ?? 0;
}
unset($p);

// Detectar top categorías (top-sellers = categorías con más productos)
arsort($categorias_set);
$top_cats = array_keys(array_slice($categorias_set, 0, 3, true));

// Aplicar Filtro Categorías
$productos_mostrados = [];
foreach($productos_importados as $p) {
    if ($filtro_cat === 'all' || $filtro_cat === $p['cat']) {
        $productos_mostrados[] = $p;
    }
}

// Aplicar Filtro Ordenamiento
if ($filtro_sort === 'popularity') {
    // Más vendido: primero los de categorías con mayor volumen, luego precio asc
    usort($productos_mostrados, function($a, $b) {
        if ($b['cat_count'] !== $a['cat_count']) return $b['cat_count'] <=> $a['cat_count'];
        return $a['precio_num'] <=> $b['precio_num'];
    });
} else if ($filtro_sort === 'price_asc') {
    usort($productos_mostrados, function($a, $b) { 
        return $a['precio_num'] <=> $b['precio_num'];
    });
} else if ($filtro_sort === 'price_desc') {
    usort($productos_mostrados, function($a, $b) { 
        return $b['precio_num'] <=> $a['precio_num'];
    });
} else if ($filtro_sort === 'az') {
    usort($productos_mostrados, function($a, $b) { 
        return strcmp($a['nombre'], $b['nombre']);
    });
}
?>

<!-- 1. HERO SECTION -->
<section class="relative h-[25vh] md:h-[40vh] flex items-center justify-center overflow-hidden bg-dark">
    <div class="absolute inset-0 z-0">
        <!-- Imagen de Portada Catalogo -->
        <img src="https://images.unsplash.com/photo-1542282088-fe8426682b8f?auto=format&fit=crop&q=80&w=1920" alt="Catálogo Tokyo Tunning" class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center mt-12 md:mt-0">
        <h1 class="text-4xl md:text-6xl font-oswald font-bold text-white mb-4 uppercase tracking-wider text-shadow">
            Catálogo <span class="text-primary">Performance</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 font-roboto max-w-2xl mx-auto drop-shadow-md">
            Las mejores piezas de nuestro inventario a tu disposición.
        </p>
    </div>
</section>

<!-- MAIN CONTENT CON SIDEBAR -->
<section class="py-12 bg-gray-50 text-dark relative">
    <div class="container mx-auto px-4 lg:px-8">
        
        <!-- Toggle Filtros Móvil (HTML/CSS puro) -->
        <div class="lg:hidden mb-6 flex justify-between items-center bg-white p-4 shadow-sm border border-gray-200">
            <span class="font-oswald font-bold uppercase text-lg">Mostrando <?= count($productos_mostrados) ?> productos</span>
            <label for="filter-toggle" class="btn-outline py-2 px-4 cursor-pointer text-sm font-bold bg-gray-100 hover:bg-gray-200">
                <i class="fa-solid fa-filter mr-2"></i> Filtros
            </label>
        </div>
        <input type="checkbox" id="filter-toggle" class="hidden">
        
        <div class="flex flex-col lg:flex-row gap-8 relative">
            
            <!-- 2. FILTROS SIMULADOS (Sidebar) - Enlaces HTML Puros sin JS -->
            <aside id="sidebar-filtros" class="w-full lg:w-1/4 hidden lg:block transition-all duration-300">
                <div class="bg-white p-6 shadow-sm border border-gray-200 sticky top-24">
                    <h2 class="font-oswald font-bold text-xl uppercase mb-6 border-b-2 border-primary pb-2 flex justify-between items-center">
                        Filtros
                        <?php if($filtro_cat !== 'all' || $filtro_sort !== 'destacados'): ?>
                            <a href="catalogo.php" class="text-xs text-primary font-roboto normal-case hover:underline">Limpiar</a>
                        <?php endif; ?>
                    </h2>
                    
                    <!-- Categorías -->
                    <div class="mb-8">
                        <h3 class="font-roboto font-bold mb-3 text-gray-800">Categorías</h3>
                        <div class="space-y-3 text-sm font-roboto text-gray-600 flex flex-col max-h-[300px] overflow-y-auto pr-2" style="scrollbar-width: thin; scrollbar-color: #C41E3A #f9fafb;">
                            <a href="catalogo.php?cat=all&sort=<?= urlencode($filtro_sort) ?>" class="flex items-center space-x-2 cursor-pointer transition-smooth <?= ($filtro_cat === 'all') ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded-full border border-gray-400 flex items-center justify-center p-[2px]">
                                    <?= ($filtro_cat === 'all') ? '<div class="w-full h-full bg-primary rounded-full"></div>' : '' ?>
                                </div>
                                <span>Todas <span class="text-gray-400 font-normal">(<?= $total_productos ?>)</span></span>
                            </a>
                            <?php if (!empty($categorias_set)) { ksort($categorias_set); foreach($categorias_set as $cat_name => $count): ?>
                            <a href="catalogo.php?cat=<?= urlencode($cat_name) ?>&sort=<?= urlencode($filtro_sort) ?>" class="flex items-center space-x-2 cursor-pointer transition-smooth <?= ($filtro_cat === $cat_name) ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded-full border border-gray-400 flex items-center justify-center p-[2px] shrink-0">
                                    <?= ($filtro_cat === $cat_name) ? '<div class="w-full h-full bg-primary rounded-full"></div>' : '' ?>
                                </div>
                                <span class="truncate"><?= htmlspecialchars($cat_name) ?> <span class="text-gray-400 font-normal">(<?= $count ?>)</span></span>
                            </a>
                            <?php endforeach; } ?>
                        </div>
                    </div>
                    
                    <!-- Ordenar Por -->
                    <div class="mb-4">
                        <h3 class="font-roboto font-bold mb-3 text-gray-800">Ordenar</h3>
                        <div class="space-y-3 text-sm font-roboto text-gray-600 flex flex-col">
                            <a href="catalogo.php?cat=<?= urlencode($filtro_cat) ?>&sort=popularity" class="flex items-center space-x-2 cursor-pointer <?= ($filtro_sort === 'popularity') ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded border border-gray-400 flex items-center justify-center p-[2px]">
                                    <?= ($filtro_sort === 'popularity') ? '<div class="w-full h-full bg-primary"></div>' : '' ?>
                                </div>
                                <span>⭐ Más Vendidos</span>
                            </a>
                            <a href="catalogo.php?cat=<?= urlencode($filtro_cat) ?>&sort=destacados" class="flex items-center space-x-2 cursor-pointer <?= ($filtro_sort === 'destacados') ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded border border-gray-400 flex items-center justify-center p-[2px]">
                                    <?= ($filtro_sort === 'destacados') ? '<div class="w-full h-full bg-primary"></div>' : '' ?>
                                </div>
                                <span>Relevancia (Destacados)</span>
                            </a>
                            <a href="catalogo.php?cat=<?= urlencode($filtro_cat) ?>&sort=price_asc" class="flex items-center space-x-2 cursor-pointer <?= ($filtro_sort === 'price_asc') ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded border border-gray-400 flex items-center justify-center p-[2px]">
                                    <?= ($filtro_sort === 'price_asc') ? '<div class="w-full h-full bg-primary"></div>' : '' ?>
                                </div>
                                <span>Menor Precio</span>
                            </a>
                            <a href="catalogo.php?cat=<?= urlencode($filtro_cat) ?>&sort=price_desc" class="flex items-center space-x-2 cursor-pointer <?= ($filtro_sort === 'price_desc') ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded border border-gray-400 flex items-center justify-center p-[2px]">
                                    <?= ($filtro_sort === 'price_desc') ? '<div class="w-full h-full bg-primary"></div>' : '' ?>
                                </div>
                                <span>Mayor Precio</span>
                            </a>
                            <a href="catalogo.php?cat=<?= urlencode($filtro_cat) ?>&sort=az" class="flex items-center space-x-2 cursor-pointer <?= ($filtro_sort === 'az') ? 'text-primary font-bold' : 'hover:text-primary' ?>">
                                <div class="w-4 h-4 rounded border border-gray-400 flex items-center justify-center p-[2px]">
                                    <?= ($filtro_sort === 'az') ? '<div class="w-full h-full bg-primary"></div>' : '' ?>
                                </div>
                                <span>Nombre: A-Z</span>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
            
            <style>
                #filter-toggle:checked ~ div #sidebar-filtros { display: block; }
            </style>
            
            <!-- 3. GRID PRODUCTOS -->
            <div class="w-full lg:w-3/4">
                
                <div class="mb-6 flex justify-between items-center hidden lg:flex border-b border-gray-200 pb-4">
                    <span class="font-roboto text-gray-500 text-sm">Mostrando <span class="font-bold text-dark"><?= count($productos_mostrados) ?></span> de <?= $total_productos ?> productos en total</span>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    <?php if (empty($productos_mostrados)): ?>
                        <div class="col-span-full text-center py-16 bg-white border border-gray-100 flex flex-col items-center">
                            <i class="fa-solid fa-magnifying-glass text-4xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl font-oswald font-bold text-dark uppercase">Sin resultados</h3>
                            <p class="text-gray-500 font-roboto mt-2">No se encontraron productos para los filtros seleccionados.</p>
                            <a href="catalogo.php" class="mt-6 text-primary hover:underline font-bold font-roboto">Ver todo el catálogo</a>
                        </div>
                    <?php else: ?>
                        <?php foreach($productos_mostrados as $p): ?>
                            <!-- Tarjeta Producto -->
                        <div class="bg-white group overflow-hidden border border-gray-100 hover:shadow-xl hover:border-primary transition-all duration-300 flex flex-col h-full relative">
                                <!-- Badge Más Vendido -->
                                <?php if(in_array($p['cat'], $top_cats)): ?>
                                <div class="absolute top-3 right-3 bg-primary text-white text-[9px] font-bold font-oswald px-2 py-1 uppercase tracking-wider z-10 shadow-md">
                                    ⭐ Más Vendido
                                </div>
                                <?php endif; ?>
                                <!-- Label Categoría -->
                                <div class="absolute top-3 left-3 bg-dark text-white text-[10px] uppercase font-bold px-3 py-1 tracking-wider z-10 border border-gray-700 max-w-[70%] truncate shadow-sm">
                                    <?= htmlspecialchars($p['cat']) ?>
                                </div>
                                
                                <!-- Imagen -->
                                <div class="relative h-64 overflow-hidden bg-white flex items-center justify-center border-b border-gray-100">
                                    <img src="<?= htmlspecialchars($p['img']) ?>" alt="<?= htmlspecialchars($p['nombre']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                         onerror="this.src='https://images.unsplash.com/photo-1600706432502-77a0e2e32729?w=500&q=80'">
                                </div>
                                
                                <!-- Contenido -->
                                <div class="p-5 flex-grow flex flex-col bg-white">
                                    <h3 class="text-base font-oswald font-bold text-dark group-hover:text-primary transition-colors duration-300 mb-2 line-clamp-2 leading-tight">
                                        <?= htmlspecialchars($p['nombre']) ?>
                                    </h3>
                                    <p class="text-gray-400 text-xs font-roboto mb-3 line-clamp-2">
                                        <?= htmlspecialchars($p['desc']) ?>
                                    </p>
                                    <div class="mt-auto border-t border-gray-100 pt-3">
                                        <span class="font-oswald font-bold text-2xl text-primary"><?= htmlspecialchars($p['precio_formateado']) ?></span>
                                    </div>
                                </div>
                                
                                <!-- CTA WhatsApp -->
                                <a href="https://wa.me/56935206018?text=Hola%20Tokyo%20Tunning!%20Quiero%20comprar%2Fconsultar:%20<?= rawurlencode($p['nombre']) ?>" target="_blank" rel="noopener"
                                   class="flex items-center justify-center gap-2 w-full text-center py-3 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase text-sm transition-colors duration-300">
                                    <i class="fa-brands fa-whatsapp"></i> Consultar / Comprar
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- 4. CTA FINAL -->
<section class="py-16 bg-dark border-t-[3px] border-primary text-center bg-[url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80')] bg-cover bg-center bg-blend-multiply">
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl font-oswald font-bold text-white mb-4 uppercase">¿Buscas algo más exclusivo?</h2>
        <p class="text-gray-300 font-roboto mb-8 max-w-2xl mx-auto">
            Nuestro equipo de ventas directas puede importar esa pieza o accesorio específico directamente desde el extranjero para tu proyecto tuning.
        </p>
        <a href="contacto.php" class="btn-primary py-3 px-8 shadow-xl text-lg font-bold">Solicitar Importación a Pedido</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
