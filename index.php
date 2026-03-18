<?php
$page_title = "Tokyo Tunning | Tuning Automotriz Premium";
$current_page = "inicio";
include 'includes/header.php';
?>

<!-- 1. HERO SECTION (CARRUSEL CSS) -->
<style>
    /* CSS Only Carousel */
    .carousel-inner {
        display: flex;
        width: 300%;
        transition: transform 0.8s ease-in-out;
        animation: autoSlide 15s infinite;
    }
    
    .carousel-inner:hover {
        animation-play-state: paused;
    }
    
    @keyframes autoSlide {
        0%, 28% { transform: translateX(0%); }
        33.33%, 61.33% { transform: translateX(-33.333333%); }
        66.66%, 95% { transform: translateX(-66.666666%); }
        100% { transform: translateX(0%); }
    }
    
    .carousel-item {
        width: 33.333333%;
        position: relative;
        flex-shrink: 0;
    }
    
    #slide1:checked ~ .carousel-inner { transform: translateX(0%); }
    #slide2:checked ~ .carousel-inner { transform: translateX(-33.333333%); }
    #slide3:checked ~ .carousel-inner { transform: translateX(-66.666666%); }
    
    .carousel-nav-dot {
        display: inline-block;
        width: 14px;
        height: 14px;
        background-color: rgba(255,255,255,0.4);
        border-radius: 50%;
        margin: 0 6px;
        cursor: pointer;
        transition: all 0.3s;
        border: 2px solid transparent;
    }
    #slide1:checked ~ .carousel-nav label[for="slide1"],
    #slide2:checked ~ .carousel-nav label[for="slide2"],
    #slide3:checked ~ .carousel-nav label[for="slide3"] {
        background-color: #D4A847;
        border-color: rgba(0,0,0,0.5);
        transform: scale(1.2);
    }
</style>

<section class="relative h-screen overflow-hidden bg-dark text-left">
    <!-- Controles de Radio Ocultos -->
    <input type="radio" name="slider" id="slide1" class="hidden" checked>
    <input type="radio" name="slider" id="slide2" class="hidden">
    <input type="radio" name="slider" id="slide3" class="hidden">
    
    <!-- Contenedor de Slides -->
    <div class="carousel-inner h-full">
        
        <!-- SLIDE 1: Taller -->
        <div class="carousel-item h-full flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="assets/imgproductos/Una_Imagen_Cinematica_202603180209.png" alt="Taller Tokyo Tunning" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-transparent"></div>
            </div>
            
            <div class="container mx-auto px-4 lg:px-8 relative z-10 w-full">
                <div class="max-w-3xl">
                    <p class="text-accent font-oswald tracking-[0.3em] uppercase mb-4 font-bold text-sm md:text-base text-shadow">Taller Especializado Premium</p>
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-oswald font-bold text-white leading-tight mb-6 text-shadow-lg drop-shadow-lg">
                        LLEVA TU <br>
                        <span class="gradient-text">MÁQUINA</span> AL <br>
                        LÍMITE
                    </h1>
                    
                    <ul class="flex flex-wrap items-center gap-4 text-gray-300 font-roboto mb-10 text-lg drop-shadow-md">
                        <li class="flex items-center"><i class="fa-solid fa-bolt text-accent text-xs mr-2"></i> Performance</li>
                        <li class="flex items-center"><i class="fa-solid fa-bolt text-accent text-xs mr-2"></i> Estética</li>
                        <li class="flex items-center"><i class="fa-solid fa-bolt text-accent text-xs mr-2"></i> Mantenimiento</li>
                    </ul>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="servicios.php" class="btn-primary py-4 px-8 text-lg w-full sm:w-auto shadow-2xl">Ver Servicios</a>
                        <a href="catalogo.php" class="btn-outline py-4 px-8 text-lg w-full sm:w-auto shadow-2xl backdrop-blur-sm bg-black/20">Catálogo</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SLIDE 2: Amortiguador -->
        <div class="carousel-item h-full flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="assets/imgproductos/Separa_el_amortiguador_202603180159.png" alt="Instalación Amortiguador" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/50 to-transparent"></div>
            </div>
            
            <!-- Contenido alineado a la derecha en este slide para variar -->
            <div class="container mx-auto px-4 lg:px-8 relative z-10 w-full flex justify-end">
                <div class="max-w-xl bg-black/60 backdrop-blur-md p-8 border-l-4 border-primary shadow-2xl">
                    <p class="text-accent font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Suspensión Deportiva</p>
                    <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white leading-tight mb-4 uppercase text-shadow">
                        Máximo <span class="text-primary">Control</span>
                    </h2>
                    <p class="text-gray-300 font-roboto mb-6 text-lg">Eleva el manejo de tu vehículo con nuestra selección top de amortiguadores y coilovers de alta resistencia.</p>
                    
                    <!-- Tarjeta Pequeña con el Precio -->
                    <div class="bg-dark border border-gray-700 p-4 mb-6 flex justify-between items-center shadow-inner">
                        <div>
                            <span class="block text-white font-oswald text-lg font-bold uppercase">Upgrade Suspensión</span>
                            <span class="text-gray-400 text-sm font-roboto"><i class="fa-solid fa-check text-accent mr-1"></i> Balance Perfecto</span>
                        </div>
                        <div class="text-right">
                            <span class="block text-accent font-oswald text-3xl font-bold">$19.990</span>
                            <span class="text-gray-500 font-roboto text-xs uppercase tracking-widest block">(Instalado)</span>
                        </div>
                    </div>
                    
                    <a href="servicios.php#mantenimiento" class="btn-primary py-3 px-8 text-base w-full shadow-lg text-center">Agendar Trabajo</a>
                </div>
            </div>
        </div>
        
        <!-- SLIDE 3: Pastillas de Freno -->
        <div class="carousel-item h-full flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="assets/imgproductos/De_las_pastillas_202603180229.png" alt="Kit Pastillas de Freno" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-black/60 backdrop-brightness-75"></div>
            </div>
            
            <!-- Contenido centrado -->
            <div class="container mx-auto px-4 lg:px-8 relative z-10 w-full text-center">
                <p class="text-primary font-oswald tracking-[0.3em] uppercase mb-4 font-bold md:text-lg text-shadow">Seguridad Activa</p>
                <h2 class="text-5xl md:text-7xl lg:text-8xl font-oswald font-bold text-white leading-tight mb-6 text-shadow-xl drop-shadow-2xl">
                    FRENADO DE <br>
                    <span class="text-accent">COMPETICIÓN</span>
                </h2>
                <p class="text-gray-200 font-roboto mb-10 text-xl max-w-2xl mx-auto drop-shadow-md">
                    Pastillas de freno racing diseñadas para soportar altas temperaturas en pista y brindar seguridad absoluta en calle.
                </p>
                
                <a href="catalogo.php" class="btn-primary py-4 px-12 text-xl shadow-2xl inline-block hover:scale-110">
                    VER MÁS EN CATÁLOGO <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
        </div>
        
    </div>
    
    <!-- Navegación por puntos (Dots) -->
    <div class="carousel-nav absolute bottom-10 left-0 right-0 z-20 flex justify-center items-center">
        <label for="slide1" class="carousel-nav-dot" title="Taller Premium"></label>
        <label for="slide2" class="carousel-nav-dot" title="Amortiguadores"></label>
        <label for="slide3" class="carousel-nav-dot" title="Frenos Deportivos"></label>
    </div>
</section>

<!-- 2. INTRO -->
<section class="py-24 bg-gray-50 text-dark relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-primary font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Excelencia en Mantenimiento y Optimización Automotriz</p>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold mb-8 uppercase leading-tight">Su taller de confianza especializado</h2>
                
                <div class="space-y-6 font-roboto text-gray-600 text-lg">
                    <p>
                        En Tokyo Tunning, gestionamos el cuidado de su vehículo con precisión técnica y un enfoque en la eficiencia. Nos especializamos en servicios de mantenimiento preventivo y mejoras estéticas, asegurando que cada intervención cumpla con los más altos estándares de calidad y seguridad.
                    </p>
                    <ul class="list-disc pl-5 mb-6">
                        <li><strong>Mantenimiento Preventivo:</strong> Cambio de aceite, sustitución de filtros y optimización del sistema de refrigeración.</li>
                        <li><strong>Tren Delantero y Suspensión:</strong> Diagnóstico y reemplazo de bandejas, cazoletas y amortiguadores.</li>
                        <li><strong>Seguridad Activa:</strong> Renovación de pastillas de freno y revisión integral de sistemas de frenado.</li>
                        <li><strong>Dinámica de Conducción:</strong> Servicios especializados de alineación y balanceo computarizado.</li>
                        <li><strong>Equipamiento de Confort:</strong> Venta e instalación de sistemas de audio y accesorios de personalización.</li>
                    </ul>
                </div>
                
                <div class="mt-10 flex border-t-2 border-primary pt-8 gap-8">
                    <div>
                        <span class="block text-4xl font-oswald font-bold text-dark mb-1">3<span class="text-accent">Años</span></span>
                        <span class="text-sm text-gray-500 font-roboto uppercase tracking-wider">Experiencia</span>
                    </div>
                    <div>
                        <span class="block text-4xl font-oswald font-bold text-dark mb-1">+500</span>
                        <span class="text-sm text-gray-500 font-roboto uppercase tracking-wider">Proyectos Finalizados</span>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-tr from-primary/20 to-accent/20 z-0 transform rotate-3"></div>
                <img src="assets/img/ambiente.jpg" alt="Taller Tokyo Tunning Interior" class="relative z-10 w-full h-auto object-cover shadow-2xl hover-grayscale">
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICIOS/PRODUCTOS DESTACADOS -->
<section class="py-24 bg-dark relative border-t-4 border-transparent" style="border-image: linear-gradient(to right, #C41E3A, #D4A847) 1;">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white mb-4 uppercase">Nuestra <span class="text-accent">Especialidad</span></h2>
            <p class="text-gray-400 font-roboto text-lg max-w-2xl mx-auto">Servicios premium diseñados para entusiastas que exigen lo mejor.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto mt-8"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <a href="servicios.php#accesorios" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-1.jpg" alt="Instalación de Accesorios" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">ESTÉTICA</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Instalación de Accesorios</h3>
                    <p class="text-gray-400 font-roboto text-sm">Aerodinámica, body kits, iluminación LED custom y accesorios exteriores de alta gama.</p>
                </div>
            </a>
            
            <!-- Card 2 -->
            <a href="servicios.php#mantenimiento" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-2.jpg" alt="Mantenimiento Tuning" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-accent text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">PERFORMANCE</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Mantenimiento</h3>
                    <p class="text-gray-400 font-roboto text-sm">Ajustes de suspensión (simplemente no deportivas), coilovers y alineación.</p>
                </div>
            </a>
            
            <!-- Card 3 -->
            <a href="servicios.php#frenos" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-3.jpg" alt="Sistemas de Frenos" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-accent text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">SEGURIDAD</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Sistemas de Frenos</h3>
                    <p class="text-gray-400 font-roboto text-sm">Solo instalamos o cambiamos pastillas y discos de freno. También se pueden vender sin instalarse.</p>
                </div>
            </a>
            
            <!-- Card 4 -->
            <a href="servicios.php#motor" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-4.jpg" alt="Mantenimiento Motor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-accent text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">MANTENIMIENTO</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Cambios de Aceite</h3>
                    <p class="text-gray-400 font-roboto text-sm">Cambios de aceite rápidos y eficientes para mantener tu motor en excelentes condiciones.</p>
                </div>
            </a>
            
            <!-- Card 5 -->
            <a href="servicios.php#audio" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-5.jpg" alt="Instalación de Audio" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">INTERIOR</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Sistemas de Audio</h3>
                    <p class="text-gray-400 font-roboto text-sm">Insonorización, cableado profesional, componentes, amplificadores y subwoofers a medida.</p>
                </div>
            </a>
            
            <!-- Card 6 -->
            <a href="servicios.php#escape" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-6.jpg" alt="Sistemas de Escape" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-accent text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">PERFORMANCE</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Sistemas de Escape</h3>
                    <p class="text-gray-400 font-roboto text-sm">Líneas completas, downpipes, escapes deportivos con válvulas y terminales custom.</p>
                </div>
            </a>
        </div>
        
        <div class="text-center mt-12">
            <a href="servicios.php" class="inline-flex items-center text-accent hover:text-white font-oswald font-bold uppercase tracking-widest transition-smooth">
                Ver todos los servicios <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </a>
        </div>
    </div>
</section>

<!-- 4. CATEGORÍAS DE PRODUCTOS (CARRUSEL) -->
<?php
$categorias_data = [];
$csvFile = __DIR__ . '/BD_Worpress/wc-product-export-18-3-2026-1773814320550.csv';
if (file_exists($csvFile) && ($handle = fopen($csvFile, "r")) !== FALSE) {
    $header = fgetcsv($handle, 10000, ",");
    $idx_tipo = array_search('Tipo', $header);
    $idx_categorias = array_search('Categorías', $header);
    $idx_imagenes = array_search('Imágenes', $header);
    
    if ($idx_tipo !== false && $idx_categorias !== false && $idx_imagenes !== false) {
        while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
            if (!isset($data[$idx_tipo])) continue;
            $tipo = $data[$idx_tipo];
            
            if ($tipo === 'simple' || $tipo === 'variable') {
                $catStr = $data[$idx_categorias] ?? '';
                $cats = explode(',', $catStr);
                $partes_cat = explode('>', $cats[0]);
                $main_cat = trim(end($partes_cat));
                if (empty($main_cat)) $main_cat = "General";
                
                if (!isset($categorias_data[$main_cat])) {
                    $imgStr = $data[$idx_imagenes] ?? '';
                    $imgs = explode(',', $imgStr);
                    $img = trim($imgs[0] ?? '');
                    if (empty($img)) {
                        $img = "https://images.unsplash.com/photo-1600706432502-77a0e2e32729?w=500&q=80"; 
                    }
                    $categorias_data[$main_cat] = [
                        'nombre' => $main_cat,
                        'imagen' => $img,
                        'count' => 1
                    ];
                } else {
                    $categorias_data[$main_cat]['count']++;
                }
            }
        }
    }
    fclose($handle);
}
// Ordenar por popularidad (cantidad de productos)
uasort($categorias_data, function($a, $b) {
    return $b['count'] <=> $a['count'];
});
// Solo tomar las primeras 8 para el carrusel
$categorias_carousel = array_slice($categorias_data, 0, 8);
?>
<section class="py-24 bg-white text-dark overflow-hidden relative border-t border-gray-100">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-5"></div>
    <div class="container mx-auto px-4 lg:px-8 mb-12 text-center relative z-10">
        <p class="text-primary font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Explora Nuestro Inventario</p>
        <h2 class="text-4xl md:text-5xl font-oswald font-bold uppercase leading-tight">
            Categorías de <span class="text-primary">Productos</span>
        </h2>
    </div>

    <!-- Carrusel CSS Snap -->
    <style>
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex overflow-x-auto gap-6 pb-12 snap-x snap-mandatory hide-scrollbar group/slider">
            <?php foreach($categorias_carousel as $cat): ?>
                <!-- Tarjeta de Categoría -->
                <a href="catalogo.php?cat=<?= urlencode($cat['nombre']) ?>" class="snap-start shrink-0 w-[85vw] md:w-[45vw] lg:w-[28vw] group block relative h-[400px] bg-dark overflow-hidden shadow-2xl hover:-translate-y-2 transition-transform duration-500 rounded-sm">
                    <!-- Imagen de fondo extraida del producto -->
                    <img src="<?= htmlspecialchars($cat['imagen']) ?>" alt="<?= htmlspecialchars($cat['nombre']) ?>" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-40 transition-all duration-700 hover-grayscale">
                    
                    <!-- Superposición gradiente -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                    
                    <!-- Contenido de la Tarjeta -->
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10">
                        <span class="inline-block bg-primary text-white text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald mb-3 self-start"><?= $cat['count'] ?> PRODUCTOS</span>
                        <h3 class="text-3xl font-oswald font-bold mb-2 uppercase group-hover:text-accent transition-colors duration-300"><?= htmlspecialchars($cat['nombre']) ?></h3>
                        <div class="flex items-center text-sm font-oswald tracking-widest uppercase text-gray-300 group-hover:text-white transition-colors duration-300">
                            Explorar <i class="fa-solid fa-arrow-right ml-2 text-primary group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            
            <!-- Tarjeta Final: Ver Todo -->
            <a href="catalogo.php" class="snap-start shrink-0 w-[85vw] md:w-[45vw] lg:w-[28vw] group block relative h-[400px] bg-primary overflow-hidden shadow-2xl hover:-translate-y-2 transition-transform duration-500 rounded-sm flex items-center justify-center text-center">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
                <div class="relative z-10 p-8">
                    <i class="fa-solid fa-boxes-stacked text-6xl text-white/50 mb-6 group-hover:scale-110 transition-transform duration-500"></i>
                    <h3 class="text-4xl font-oswald font-bold text-white uppercase mb-4 text-shadow-md">VER TODO EL<br>CATÁLOGO</h3>
                    <div class="inline-block bg-dark text-white text-sm font-bold px-6 py-3 uppercase tracking-wider font-oswald group-hover:bg-white group-hover:text-primary transition-colors duration-300 shadow-xl">
                        Ingresar <i class="fa-solid fa-chevron-right ml-1"></i>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="flex justify-center mt-[-20px] mb-8 text-gray-400 gap-2 items-center mobile-hint lg:hidden">
            <i class="fa-solid fa-arrows-left-right text-xs"></i>
            <span class="font-roboto text-xs uppercase tracking-widest">Deslizar para ver más</span>
        </div>
    </div>
</section>

<!-- 5. CTA BANNER -->
<section class="py-32 relative flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/cta.jpg" alt="Atmosfera Tuning" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="relative z-10 text-center container mx-auto px-4">
        <h2 class="text-4xl md:text-6xl font-oswald font-bold text-white mb-6 uppercase tracking-wider text-shadow-lg drop-shadow-[0_5px_5px_rgba(0,0,0,0.8)]">
            ¿Listo para destacar?
        </h2>
        <p class="text-xl text-gray-200 font-roboto mb-10 max-w-2xl mx-auto drop-shadow-md">
            Agenda tu visita o contáctanos para cotizar tu próximo proyecto. El límite lo pones tú.
        </p>
        <a href="contacto.php" class="btn-primary py-4 px-10 text-xl shadow-2xl">COTIZAR PROYECTO</a>
    </div>
</section>

<!-- 6. SOCIAL / GALERÍA -->
<section class="py-20 bg-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-oswald font-bold text-white flex items-center justify-center uppercase tracking-widest">
                <i class="fa-brands fa-instagram text-accent mr-3"></i> @TOKYOTUNNING
            </h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">
            <div class="relative aspect-square group overflow-hidden">
                <img src="assets/img/social-1.jpg" alt="Instagram post" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <a href="#" class="absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-3xl"></i>
                </a>
            </div>
            <div class="relative aspect-square group overflow-hidden">
                <img src="assets/img/social-2.jpg" alt="Instagram post" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <a href="#" class="absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-3xl"></i>
                </a>
            </div>
            <div class="relative aspect-square group overflow-hidden">
                <img src="assets/img/social-3.jpg" alt="Instagram post" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <a href="#" class="absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-3xl"></i>
                </a>
            </div>
            <div class="relative aspect-square group overflow-hidden">
                <img src="assets/img/social-4.jpg" alt="Instagram post" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <a href="#" class="absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-3xl"></i>
                </a>
            </div>
            <div class="relative aspect-square group overflow-hidden">
                <img src="assets/img/social-5.jpg" alt="Instagram post" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <a href="#" class="absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-3xl"></i>
                </a>
            </div>
            <div class="relative aspect-square group overflow-hidden">
                <img src="assets/img/social-6.jpg" alt="Instagram post" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <a href="#" class="absolute inset-0 bg-primary/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-3xl"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
