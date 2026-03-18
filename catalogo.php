<?php
$page_title = "Catálogo | Tokyo Tunning";
$current_page = "catalogo";
include 'includes/header.php';

// Simulación de productos para el Front-end
$productos = [
    ["id" => 1, "nombre" => "Brembo Big Brake Kit 6-Piston", "cat" => "frenos", "marca" => "Brembo", "precio" => "2.450.000", "img" => "assets/img/prod-1.jpg", "desc" => "Kit completo eje delantero 355mm perforados."],
    ["id" => 2, "nombre" => "Pastillas EBC Yellowstuff", "cat" => "frenos", "marca" => "EBC", "precio" => "185.000", "img" => "assets/img/prod-2.jpg", "desc" => "Alto coeficiente de fricción, ideal trackdays."],
    ["id" => 3, "nombre" => "Coilovers BC Racing BR Series", "cat" => "suspension", "marca" => "BC Racing", "precio" => "1.150.000", "img" => "assets/img/prod-3.jpg", "desc" => "Ajuste de altura y 30 niveles de dureza."],
    ["id" => 4, "nombre" => "Motul 300V Competition 15W50 (2L)", "cat" => "fluidos", "marca" => "Motul", "precio" => "45.000", "img" => "assets/img/prod-4.jpg", "desc" => "100% sintético con tecnología ESTER Core."],
    ["id" => 5, "nombre" => "Kit Admisión Injen Evolution", "cat" => "motor", "marca" => "Injen", "precio" => "420.000", "img" => "assets/img/prod-5.jpg", "desc" => "Caja cerrada (Cold Air Intake) con filtro seco."],
    ["id" => 6, "nombre" => "Escape Borla S-Type Catback", "cat" => "escape", "marca" => "Borla", "precio" => "1.350.000", "img" => "assets/img/prod-6.jpg", "desc" => "Sonido agresivo sin drone en cabina. Acero inox."],
    ["id" => 7, "nombre" => "Llantas Volk Racing TE37 18x9.5", "cat" => "llantas", "marca" => "Rays", "precio" => "3.100.000", "img" => "assets/img/prod-7.jpg", "desc" => "Aluminio forjado, acabado Bronze. Set de 4."],
    ["id" => 8, "nombre" => "Alerón Fibra de Carbono GT Wing", "cat" => "aerodinamica", "marca" => "APR", "precio" => "890.000", "img" => "assets/img/prod-8.jpg", "desc" => "Ajustable, 67 pulgadas de ancho. Real Carbon."],
    ["id" => 9, "nombre" => "Butaca Recaro Pole Position", "cat" => "interior", "marca" => "Recaro", "precio" => "950.000", "img" => "assets/img/prod-9.jpg", "desc" => "Homologación FIA, estructura de fibra de vidrio."],
    ["id" => 10, "nombre" => "Kit Amp + Subwoofer JBL BassPro", "cat" => "audio", "marca" => "JBL", "precio" => "320.000", "img" => "assets/img/prod-10.jpg", "desc" => "Subwoofer activo 12 pulgadas, 150W RMS."],
    ["id" => 11, "nombre" => "Kit Iluminación LED Opt7 Aura", "cat" => "iluminacion", "marca" => "Opt7", "precio" => "110.000", "img" => "assets/img/prod-11.jpg", "desc" => "Underglow Bluetooth, millones de colores."],
    ["id" => 12, "nombre" => "Discos de Freno DBA Serie 4000", "cat" => "frenos", "marca" => "DBA", "precio" => "290.000", "img" => "assets/img/prod-12.jpg", "desc" => "Ranurados (T3 Slot), resistentes a temperatura."]
];
?>

<!-- 1. HERO SECTION -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden bg-dark">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/hero-catalogo.jpg" alt="Catálogo Tokyo Tunning" class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-oswald font-bold text-white mb-4 uppercase tracking-wider text-shadow">
            Catálogo <span class="text-primary">Performance</span>
        </h1>
        <p class="text-xl text-gray-200 font-roboto max-w-2xl mx-auto drop-shadow-md">
            Las mejores marcas del mercado internacional a tu disposición.
        </p>
    </div>
</section>

<!-- MAIN CONTENT CON SIDEBAR -->
<section class="py-12 bg-gray-50 text-dark relative">
    <div class="container mx-auto px-4 lg:px-8">
        
        <!-- Toggle Filtros Móvil -->
        <div class="lg:hidden mb-6 flex justify-between items-center bg-white p-4 shadow-sm border border-gray-200">
            <span class="font-oswald font-bold uppercase text-lg">Mostrando 12 productos</span>
            <label for="filter-toggle" class="btn-outline py-2 px-4 cursor-pointer text-sm">
                <i class="fa-solid fa-filter mr-2"></i> Filtros
            </label>
        </div>
        <input type="checkbox" id="filter-toggle" class="hidden">
        
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- 2. FILTROS SIMULADOS (Sidebar) -->
            <aside id="sidebar-filtros" class="w-full lg:w-1/4 hidden lg:block transition-all duration-300">
                <div class="bg-white p-6 shadow-sm border border-gray-200 sticky top-24">
                    <h2 class="font-oswald font-bold text-xl uppercase mb-6 border-b-2 border-primary pb-2">Filtros</h2>
                    
                    <!-- Categorías -->
                    <div class="mb-8">
                        <h3 class="font-roboto font-bold mb-3 text-gray-800">Categorías</h3>
                        <ul class="space-y-2 text-sm font-roboto text-gray-600">
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between"><span>Todas</span> <span class="text-gray-400">(12)</span></a></li>
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between font-bold text-primary"><span>Frenos</span> <span class="text-gray-400">(3)</span></a></li>
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between"><span>Suspensión</span> <span class="text-gray-400">(1)</span></a></li>
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between"><span>Motor/Escape</span> <span class="text-gray-400">(2)</span></a></li>
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between"><span>Fluidos</span> <span class="text-gray-400">(1)</span></a></li>
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between"><span>Audio/Iluminación</span> <span class="text-gray-400">(2)</span></a></li>
                            <li><a href="#" class="hover:text-primary transition-smooth flex justify-between"><span>Estética/Interior</span> <span class="text-gray-400">(3)</span></a></li>
                        </ul>
                    </div>
                    
                    <!-- Marcas -->
                    <div class="mb-8">
                        <h3 class="font-roboto font-bold mb-3 text-gray-800">Marcas Destacadas</h3>
                        <div class="space-y-2 text-sm font-roboto text-gray-600">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="accent-primary w-4 h-4">
                                <span>Brembo</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="accent-primary w-4 h-4">
                                <span>EBC Brakes</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="accent-primary w-4 h-4">
                                <span>Motul</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="accent-primary w-4 h-4">
                                <span>Borla</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Precio -->
                    <div class="mb-8">
                        <h3 class="font-roboto font-bold mb-3 text-gray-800">Precio Rango</h3>
                        <div class="space-y-2 text-sm font-roboto text-gray-600">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="precio" class="accent-primary w-4 h-4">
                                <span>Menos de $100.000</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="precio" class="accent-primary w-4 h-4">
                                <span>$100.000 - $500.000</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="precio" class="accent-primary w-4 h-4">
                                <span>$500.000 - $1.000.000</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" name="precio" class="accent-primary w-4 h-4">
                                <span>Más de $1.000.000</span>
                            </label>
                        </div>
                    </div>
                    
                    <button class="w-full btn-primary py-2 text-sm hover:scale-100 mt-2">Aplicar Filtros</button>
                </div>
            </aside>
            
            <style>
                #filter-toggle:checked ~ div #sidebar-filtros { display: block; }
            </style>
            
            <!-- 3. GRID PRODUCTOS -->
            <div class="w-full lg:w-3/4">
                
                <div class="mb-6 flex justify-between items-center hidden lg:flex">
                    <span class="font-roboto text-gray-500 text-sm">Mostrando 1-12 de 45 productos</span>
                    <select class="border border-gray-300 bg-white p-2 text-sm font-roboto outline-none focus:border-primary">
                        <option>Ordenar por: Destacados</option>
                        <option>Precio: Menor a Mayor</option>
                        <option>Precio: Mayor a Menor</option>
                        <option>Más recientes</option>
                    </select>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    <?php foreach($productos as $p): ?>
                        <!-- Tarjeta Producto -->
                        <div class="bg-white group overflow-hidden border border-gray-100 hover:shadow-xl hover:border-gray-200 transition-all duration-300 flex flex-col h-full relative">
                            <!-- Label tipo de repuesto -->
                            <div class="absolute top-3 left-3 bg-dark text-white text-[10px] uppercase font-bold px-2 py-1 tracking-wider z-10 border border-gray-700">
                                <?= htmlspecialchars($p['marca']) ?>
                            </div>
                            
                            <!-- Imagen -->
                            <div class="relative h-64 overflow-hidden bg-gray-100 flex items-center justify-center p-4">
                                <!-- En un sitio real, los srcs serían dinámicos. Usamos placeholder si no existe -->
                                <img src="https://images.unsplash.com/photo-1600706432502-77a0e2e32729?w=500&q=80" alt="<?= htmlspecialchars($p['nombre']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale group-hover:grayscale-0">
                                
                                <!-- Overlay Botones Hover -->
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 gap-3">
                                    <a href="#modal" class="bg-white text-dark w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent hover:text-white transition-smooth" title="Vista Rápida"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-dark transition-smooth" title="Añadir al carrito"><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                            
                            <!-- Contenido -->
                            <div class="p-5 flex-grow flex flex-col">
                                <a href="#" class="text-lg font-oswald font-bold text-dark hover:text-primary transition-smooth mb-2 line-clamp-2">
                                    <?= htmlspecialchars($p['nombre']) ?>
                                </a>
                                <p class="text-gray-500 text-xs font-roboto mb-4 line-clamp-2 mt-auto">
                                    <?= htmlspecialchars($p['desc']) ?>
                                </p>
                                <div class="flex justify-between items-center border-t border-gray-100 pt-4 mt-auto">
                                    <span class="font-oswald font-bold text-xl text-dark">$<?= htmlspecialchars($p['precio']) ?></span>
                                </div>
                            </div>
                            
                            <!-- Botón inferior -->
                            <a href="#" class="block w-full text-center py-3 bg-gray-100 text-dark font-oswald font-bold uppercase text-sm group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                Comprar Ahora
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Paginación Simple -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex space-x-2">
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 text-gray-500 hover:bg-gray-100"><i class="fa-solid fa-chevron-left text-xs"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-primary text-white font-oswald font-bold border border-primary">1</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-primary hover:text-primary text-dark font-oswald font-bold transition-smooth">2</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-primary hover:text-primary text-dark font-oswald font-bold transition-smooth">3</a>
                        <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 text-gray-500 hover:bg-gray-100"><i class="fa-solid fa-chevron-right text-xs"></i></a>
                    </nav>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<!-- 4. CTA FINAL -->
<section class="py-16 bg-dark border-t-2 border-accent text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-oswald font-bold text-white mb-4 uppercase">¿No encuentras la pieza que buscas?</h2>
        <p class="text-gray-400 font-roboto mb-8">Importamos piezas específicas a pedido directamente desde USA, Europa y Japón.</p>
        <a href="contacto.php" class="btn-primary py-3 px-8 shadow-xl">Solicitar Cotización de Importación</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
