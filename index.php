<?php
$page_title = "Tokyo Tunning | Tuning Automotriz Premium — San Bernardo";
$page_description = "Taller de tuning automotriz premium en San Bernardo. Mecánica, suspensión, frenos, alarmas y catálogo de productos. Agenda por WhatsApp.";
$current_page = "inicio";
include 'includes/header.php';
?>

<!-- TRUST BAR -->
<style>
@keyframes trustScroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.trust-track { display: flex; animation: trustScroll 28s linear infinite; width: max-content; }
.trust-track:hover { animation-play-state: paused; }
@media (min-width: 768px) {
    .trust-scroll-wrap { overflow: hidden; }
    .trust-track { animation: none; width: 100%; justify-content: space-between; }
}
</style>
<div class="bg-primary border-b border-primary/50 overflow-hidden">
    <div class="trust-scroll-wrap py-2">
        <div class="trust-track font-oswald text-white text-xs tracking-widest uppercase">
            <!-- Items duplicated for seamless loop on mobile -->
            <?php
            $trust_items = [
                ['fa-star', 'Especialistas en Tuning'],
                ['fa-shield-halved', 'Garantía de Servicio'],
                ['fa-whatsapp brands', 'Respuesta Inmediata'],
            ];
            $sep = '<span class="mx-5 text-white/30">|</span>';
            $html = '';
            foreach($trust_items as $item) {
                $fa_class = strpos($item[0],'brands') !== false ? 'fa-brands fa-'.$item[0] : 'fa-solid fa-'.$item[0];
                $html .= '<span class="flex items-center gap-2 shrink-0 px-4 md:px-0"><i class="'.$fa_class.' text-white/80 text-sm"></i>'.$item[1].'</span>'.$sep;
            }
            echo $html . $html; // duplicate for seamless loop
            ?>
        </div>
    </div>
</div>


<!-- =============================================
     1. HERO SECTION
     ============================================= -->
<style>
    .carousel-inner { display:flex; width:300%; transition:transform 0.8s ease-in-out; animation:autoSlide 15s infinite; }
    .carousel-inner:hover { animation-play-state:paused; }
    @keyframes autoSlide {
        0%,28%{ transform:translateX(0%); }
        33.33%,61.33%{ transform:translateX(-33.333333%); }
        66.66%,95%{ transform:translateX(-66.666666%); }
        100%{ transform:translateX(0%); }
    }
    .carousel-item { width:33.333333%; position:relative; flex-shrink:0; }
    #slide1:checked ~ .carousel-inner { transform:translateX(0%); animation:none; }
    #slide2:checked ~ .carousel-inner { transform:translateX(-33.333333%); animation:none; }
    #slide3:checked ~ .carousel-inner { transform:translateX(-66.666666%); animation:none; }
    .carousel-nav-dot { display:inline-block; width:12px; height:12px; background:rgba(255,255,255,0.3); border-radius:50%; margin:0 5px; cursor:pointer; transition:all 0.3s; border:2px solid transparent; }
    #slide1:checked ~ .carousel-nav label[for="slide1"],
    #slide2:checked ~ .carousel-nav label[for="slide2"],
    #slide3:checked ~ .carousel-nav label[for="slide3"] { background:#D4A847; border-color:rgba(0,0,0,0.5); transform:scale(1.3); }
</style>

<section class="relative h-screen overflow-hidden bg-dark text-left">
    <input type="radio" name="slider" id="slide1" class="hidden" checked>
    <input type="radio" name="slider" id="slide2" class="hidden">
    <input type="radio" name="slider" id="slide3" class="hidden">

    <div class="carousel-inner h-full">

        <!-- SLIDE 1 -->
        <div class="carousel-item h-full flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="assets/imgproductos/Una_Imagen_Cinematica_202603180209.png" alt="Taller Tokyo Tunning" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-transparent"></div>
            </div>
            <div class="container mx-auto px-4 lg:px-8 relative z-10 w-full">
                <div class="max-w-2xl">
                    <p class="text-accent font-oswald tracking-[0.3em] uppercase mb-3 font-bold text-xs md:text-sm">Taller Especializado · San Bernardo</p>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-oswald font-bold text-white leading-tight mb-5 drop-shadow-lg">
                        LLEVA TU <span class="gradient-text">MÁQUINA</span><br>AL LÍMITE
                    </h1>
                    <p class="text-gray-300 font-roboto mb-8 text-base md:text-lg max-w-xl">Performance · Estética · Mantenimiento Premium</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="catalogo.php"
                           class="flex items-center justify-center gap-2 btn-primary px-8 py-4 text-lg shadow-2xl transition-smooth hover:scale-105">
                            <i class="fa-solid fa-bag-shopping text-xl"></i> VER CATÁLOGO
                        </a>
                        <a href="servicios.php" class="btn-outline py-4 px-8 text-lg w-full sm:w-auto shadow-2xl backdrop-blur-sm bg-black/20 text-center">Servicios y Precios</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item h-full flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="assets/imgproductos/Separa_el_amortiguador_202603180159.png" alt="Instalación Amortiguador" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/50 to-transparent"></div>
            </div>
            <div class="container mx-auto px-4 lg:px-8 relative z-10 w-full flex justify-end">
                <div class="max-w-xl bg-black/60 backdrop-blur-md p-6 md:p-8 border-l-4 border-primary shadow-2xl">
                    <p class="text-accent font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Suspensión Deportiva</p>
                    <h2 class="text-3xl md:text-5xl font-oswald font-bold text-white leading-tight mb-4 uppercase">Máximo <span class="text-primary">Control</span></h2>
                    <p class="text-gray-300 font-roboto mb-6">Amortiguadores y coilovers de alta resistencia para una conducción precisa.</p>
                    <div class="bg-dark border border-gray-700 p-4 mb-6 flex justify-between items-center">
                        <span class="text-white font-oswald font-bold uppercase">Upgrade Suspensión</span>
                        <span class="text-accent font-oswald text-3xl font-bold">$19.990</span>
                    </div>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20cotizar%20un%20upgrade%20de%20suspensi%C3%B3n." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 bg-[#25D366] text-white font-oswald font-bold uppercase py-3 px-6 text-center w-full hover:bg-[#20c05c] transition-smooth">
                        <i class="fa-brands fa-whatsapp"></i> Cotizar Ahora
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item h-full flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="assets/imgproductos/De_las_pastillas_202603180229.png" alt="Kit Pastillas de Freno" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <div class="container mx-auto px-4 lg:px-8 relative z-10 w-full text-center">
                <p class="text-primary font-oswald tracking-[0.3em] uppercase mb-4 font-bold text-sm">Seguridad Activa</p>
                <h2 class="text-4xl md:text-7xl font-oswald font-bold text-white leading-tight mb-6 drop-shadow-2xl">
                    FRENADO DE <br><span class="text-accent">COMPETICIÓN</span>
                </h2>
                <a href="catalogo.php" class="btn-primary py-4 px-12 text-xl shadow-2xl inline-block hover:scale-110">
                    VER CATÁLOGO <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="carousel-nav absolute bottom-8 left-0 right-0 z-20 flex justify-center items-center">
        <label for="slide1" class="carousel-nav-dot"></label>
        <label for="slide2" class="carousel-nav-dot"></label>
        <label for="slide3" class="carousel-nav-dot"></label>
    </div>
</section>

<!-- =============================================
     2. WHY US — 4 ÍCONOS (reemplaza el bloque de texto largo)
     ============================================= -->
<section class="py-16 bg-gray-50 text-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-10">
            <p class="text-primary font-oswald tracking-[0.2em] uppercase font-bold text-sm mb-1">¿Por qué elegirnos?</p>
            <h2 class="text-3xl md:text-4xl font-oswald font-bold uppercase">Tu Taller de <span class="text-primary">Confianza</span></h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="group bg-white p-6 shadow-sm hover:shadow-md transition-smooth border-b-4 border-transparent hover:border-primary">
                <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-smooth">
                    <i class="fa-solid fa-wrench text-primary text-2xl"></i>
                </div>
                <h3 class="font-oswald font-bold text-xl uppercase mb-1">Mecánica Ágil</h3>
                <p class="text-gray-500 font-roboto text-sm">Precios claros, piezas propias bienvenidas</p>
            </div>
            <div class="group bg-white p-6 shadow-sm hover:shadow-md transition-smooth border-b-4 border-transparent hover:border-accent">
                <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/20 transition-smooth">
                    <i class="fa-solid fa-shield-halved text-accent text-2xl"></i>
                </div>
                <h3 class="font-oswald font-bold text-xl uppercase mb-1">Garantía de Trabajo</h3>
                <p class="text-gray-500 font-roboto text-sm">Respaldamos cada servicio realizado</p>
            </div>
            <div class="group bg-white p-6 shadow-sm hover:shadow-md transition-smooth border-b-4 border-transparent hover:border-primary">
                <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-smooth">
                    <i class="fa-brands fa-whatsapp text-primary text-2xl"></i>
                </div>
                <h3 class="font-oswald font-bold text-xl uppercase mb-1">Respuesta Inmediata</h3>
                <p class="text-gray-500 font-roboto text-sm">Cotizamos por WhatsApp al instante</p>
            </div>
            <div class="group bg-white p-6 shadow-sm hover:shadow-md transition-smooth border-b-4 border-transparent hover:border-accent">
                <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/20 transition-smooth">
                    <i class="fa-solid fa-truck text-accent text-2xl"></i>
                </div>
                <h3 class="font-oswald font-bold text-xl uppercase mb-1">Despacho Nacional</h3>
                <p class="text-gray-500 font-roboto text-sm">Enviamos productos a todo Chile</p>
            </div>
        </div>
        <!-- Stats rápidos -->
        <div class="mt-10 flex justify-center gap-10 border-t-2 border-primary pt-8">
            <div class="text-center">
                <span class="block text-4xl font-oswald font-bold text-dark">3<span class="text-accent">+</span></span>
                <span class="text-xs text-gray-500 font-roboto uppercase tracking-wider">Años</span>
            </div>
            <div class="text-center">
                <span class="block text-4xl font-oswald font-bold text-dark">+500</span>
                <span class="text-xs text-gray-500 font-roboto uppercase tracking-wider">Proyectos</span>
            </div>
            <div class="text-center">
                <span class="block text-4xl font-oswald font-bold text-dark">100<span class="text-primary">%</span></span>
                <span class="text-xs text-gray-500 font-roboto uppercase tracking-wider">Compromiso</span>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
     3. SERVICIOS DESTACADOS
     ============================================= -->
<section class="py-20 bg-dark relative border-t-4 border-transparent" style="border-image: linear-gradient(to right, #C41E3A, #D4A847) 1;">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-accent font-oswald tracking-[0.2em] uppercase font-bold text-sm mb-1">Lo que hacemos</p>
            <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white mb-4 uppercase">Nuestra <span class="text-accent">Especialidad</span></h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">

            <!-- 1. CAMBIO DE ACEITE -->
            <a href="servicios.php#aceite" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    <img src="assets/img/servicio-4.jpg" alt="Cambio de Aceite" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-3 right-3 bg-accent text-dark text-xs font-bold px-2 py-1 uppercase tracking-wider font-oswald">MANTENIMIENTO</div>
                </div>
                <div class="p-5 flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-oswald font-bold text-white mb-1 group-hover:text-primary transition-smooth">Cambio de Aceite</h3>
                        <p class="text-gray-400 font-roboto text-xs">Motor o caja. El cliente puede traer su propio aceite.</p>
                    </div>
                    <i class="fa-solid fa-oil-can text-gray-700 group-hover:text-primary transition-smooth text-lg mt-1 ml-3 shrink-0"></i>
                </div>
            </a>

            <!-- 2. SCANNER Y DIAGNÓSTICO -->
            <a href="servicios.php#diagnostico" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    <img src="assets/img/servicio-6.jpg" alt="Diagnóstico Scanner" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-3 right-3 bg-primary text-white text-xs font-bold px-2 py-1 uppercase tracking-wider font-oswald">DIAGNÓSTICO</div>
                </div>
                <div class="p-5 flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-oswald font-bold text-white mb-1 group-hover:text-primary transition-smooth">Scanner y Diagnóstico</h3>
                        <p class="text-gray-400 font-roboto text-xs">Lectura de fallas computarizada y revisión de tren delantero.</p>
                    </div>
                    <i class="fa-solid fa-laptop-code text-gray-700 group-hover:text-primary transition-smooth text-lg mt-1 ml-3 shrink-0"></i>
                </div>
            </a>

            <!-- 3. MECÁNICA Y REPUESTOS -->
            <a href="servicios.php#mecanica" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    <img src="assets/img/servicio-2.jpg" alt="Mecánica y Repuestos" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-3 right-3 bg-primary text-white text-xs font-bold px-2 py-1 uppercase tracking-wider font-oswald">MECÁNICA</div>
                </div>
                <div class="p-5 flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-oswald font-bold text-white mb-1 group-hover:text-primary transition-smooth">Mecánica y Repuestos</h3>
                        <p class="text-gray-400 font-roboto text-xs">Pastillas, bandejas, amortiguadores, embragues y más.</p>
                    </div>
                    <i class="fa-solid fa-wrench text-gray-700 group-hover:text-primary transition-smooth text-lg mt-1 ml-3 shrink-0"></i>
                </div>
            </a>

            <!-- 4. FRENOS Y SUSPENSIÓN -->
            <a href="servicios.php#mecanica" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    <img src="assets/img/servicio-3.jpg" alt="Frenos y Suspensión" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-3 right-3 bg-accent text-dark text-xs font-bold px-2 py-1 uppercase tracking-wider font-oswald">SEGURIDAD</div>
                </div>
                <div class="p-5 flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-oswald font-bold text-white mb-1 group-hover:text-primary transition-smooth">Frenos y Suspensión</h3>
                        <p class="text-gray-400 font-roboto text-xs">Pastillas, purgación, balatas, cazoletas y bieletas.</p>
                    </div>
                    <i class="fa-solid fa-circle-dot text-gray-700 group-hover:text-primary transition-smooth text-lg mt-1 ml-3 shrink-0"></i>
                </div>
            </a>

            <!-- 5. AUDIO Y ELECTRÓNICA -->
            <a href="catalogo.php?cat=Audio%20y%20Electr%C3%B3nica" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-accent transition-smooth overflow-hidden">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    <img src="assets/img/servicio-5.jpg" alt="Audio y Electrónica" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-3 right-3 bg-accent text-dark text-xs font-bold px-2 py-1 uppercase tracking-wider font-oswald">VER PRODUCTOS</div>
                    <div class="absolute bottom-3 left-3 bg-black/80 backdrop-blur-sm text-accent text-xs font-bold px-2 py-1 font-oswald uppercase border border-accent/30">
                        <i class="fa-solid fa-bag-shopping mr-1"></i> 58+ Productos
                    </div>
                </div>
                <div class="p-5 flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-oswald font-bold text-white mb-1 group-hover:text-accent transition-smooth">Audio y Electrónica</h3>
                        <p class="text-gray-400 font-roboto text-xs">Amplificadores, subwoofers, parlantes y accesorios.</p>
                    </div>
                    <i class="fa-solid fa-volume-high text-gray-700 group-hover:text-accent transition-smooth text-lg mt-1 ml-3 shrink-0"></i>
                </div>
            </a>

            <!-- 6. ALARMAS E INSTALACIONES -->
            <a href="servicios.php#electronica" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    <img src="assets/img/servicio-1.jpg" alt="Alarmas e Instalaciones" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-3 right-3 bg-primary text-white text-xs font-bold px-2 py-1 uppercase tracking-wider font-oswald">ELECTRÓNICA</div>
                </div>
                <div class="p-5 flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-oswald font-bold text-white mb-1 group-hover:text-primary transition-smooth">Alarmas e Instalaciones</h3>
                        <p class="text-gray-400 font-roboto text-xs">Alarmas, cierre centralizado, corta corriente, cámaras.</p>
                    </div>
                    <i class="fa-solid fa-bolt text-gray-700 group-hover:text-primary transition-smooth text-lg mt-1 ml-3 shrink-0"></i>
                </div>
            </a>

        </div>
        <div class="text-center mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="servicios.php" class="inline-flex items-center justify-center text-accent hover:text-white font-oswald font-bold uppercase tracking-widest transition-smooth border border-accent/30 hover:border-white px-6 py-3">
                Ver todos los Servicios <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </a>
            <a href="catalogo.php" class="inline-flex items-center justify-center bg-primary hover:bg-primary/80 text-white font-oswald font-bold uppercase tracking-widest transition-smooth px-6 py-3">
                <i class="fa-solid fa-bag-shopping mr-2 text-sm"></i> Catálogo Completo
            </a>
        </div>
    </div>
</section>

<!-- =============================================
     4. CATEGORÍAS (CARRUSEL)
     ============================================= -->
<?php
// Categorías fijas curadas — imágenes reales, nombres claros para el cliente
$categorias_fijas = [
    ['nombre' => 'Audio y Electrónica',  'slug' => 'Audio y Electrónica',  'img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80', 'label' => 'Amplif. · Radios · Accesorios'],
    ['nombre' => 'Parlantes',            'slug' => 'Parlantes',             'img' => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=600&q=80', 'label' => 'Coaxiales · Componentes'],
    ['nombre' => 'Subwoofer',            'slug' => 'Subwoofer',             'img' => 'https://images.unsplash.com/photo-1545454675-3531b543be5d?w=600&q=80', 'label' => 'Cajas · Subwoofers sueltos'],
    ['nombre' => 'Volantes',             'slug' => 'Volantes',              'img' => 'https://images.unsplash.com/photo-1597007066704-67bf2068d5b2?w=600&q=80', 'label' => 'Deportivos · Cuero · Racing'],
    ['nombre' => 'Alerones y Estética',  'slug' => 'Alerones',              'img' => 'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=600&q=80', 'label' => 'Body Kit · Alerones · Spoilers'],
    ['nombre' => 'Pomos de Cambio',      'slug' => 'Pomos',                 'img' => 'https://images.unsplash.com/photo-1565538420870-da08ff96a207?w=600&q=80', 'label' => 'Cortos · Racing · Aluminio'],
    ['nombre' => 'Vinilos y Adhesivos',  'slug' => 'Vinilos',               'img' => 'https://images.unsplash.com/photo-1603386329225-868f9b1ee6c9?w=600&q=80', 'label' => 'Racing · Carbono · Decorativos'],
    ['nombre' => 'Frenos y Suspensión',  'slug' => 'Pastillas de freno',    'img' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=600&q=80', 'label' => 'Pastillas · Discos · Liquido'],
];
?>
<section class="py-20 bg-white text-dark overflow-hidden relative border-t border-gray-100">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-5"></div>
    <div class="container mx-auto px-4 lg:px-8 mb-10 text-center relative z-10">
        <p class="text-primary font-oswald tracking-[0.2em] uppercase font-bold text-sm mb-1">Explora Nuestro Inventario</p>
        <h2 class="text-4xl md:text-5xl font-oswald font-bold uppercase">Categorías de <span class="text-primary">Productos</span></h2>
    </div>
    <style>.hide-scrollbar::-webkit-scrollbar{display:none;}.hide-scrollbar{-ms-overflow-style:none;scrollbar-width:none;}</style>
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex overflow-x-auto gap-5 pb-10 snap-x snap-mandatory hide-scrollbar">
            <?php foreach($categorias_fijas as $cat): ?>
            <a href="catalogo.php?cat=<?= urlencode($cat['slug']) ?>" class="snap-start shrink-0 w-[80vw] md:w-[42vw] lg:w-[22vw] group block relative h-[340px] bg-dark overflow-hidden shadow-2xl hover:-translate-y-2 transition-transform duration-500">
                <img src="<?= htmlspecialchars($cat['img']) ?>" alt="<?= htmlspecialchars($cat['nombre']) ?>" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-40 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute inset-0 p-6 flex flex-col justify-end text-white z-10">
                    <span class="inline-block bg-primary/80 text-white text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald mb-2 self-start"><?= htmlspecialchars($cat['label']) ?></span>
                    <h3 class="text-xl font-oswald font-bold mb-1 uppercase group-hover:text-accent transition-colors duration-300"><?= htmlspecialchars($cat['nombre']) ?></h3>
                    <div class="flex items-center text-sm font-oswald tracking-widest uppercase text-gray-300 group-hover:text-white transition-colors">
                        Explorar <i class="fa-solid fa-arrow-right ml-2 text-primary group-hover:translate-x-2 transition-transform duration-300"></i>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
            <a href="catalogo.php" class="snap-start shrink-0 w-[80vw] md:w-[42vw] lg:w-[22vw] group block relative h-[340px] bg-primary overflow-hidden shadow-2xl hover:-translate-y-2 transition-transform duration-500 flex items-center justify-center text-center">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
                <div class="relative z-10 p-8">
                    <i class="fa-solid fa-boxes-stacked text-5xl text-white/50 mb-5 group-hover:scale-110 transition-transform duration-500"></i>
                    <h3 class="text-3xl font-oswald font-bold text-white uppercase mb-4">VER TODO EL<br>CATÁLOGO</h3>
                    <div class="inline-block bg-dark text-white text-sm font-bold px-6 py-3 uppercase tracking-wider font-oswald group-hover:bg-white group-hover:text-primary transition-colors duration-300">
                        Ingresar <i class="fa-solid fa-chevron-right ml-1"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex justify-center mt-[-16px] mb-4 text-gray-400 gap-2 items-center lg:hidden">
            <i class="fa-solid fa-arrows-left-right text-xs"></i>
            <span class="font-roboto text-xs uppercase tracking-widest">Deslizar para ver más</span>
        </div>
    </div>
</section>

<!-- =============================================
     5. CTA WhatsApp BANNER
     ============================================= -->
<section class="py-24 relative flex items-center justify-center">
    <div class="absolute inset-0 z-0">
        <img src="assets/img/cta.jpg" alt="Agenda tu visita" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    <div class="relative z-10 text-center container mx-auto px-4">
        <p class="text-accent font-oswald tracking-[0.3em] uppercase mb-3 font-bold text-sm">Taller en San Bernardo · Lun–Sáb 10–19 hrs</p>
        <h2 class="text-4xl md:text-6xl font-oswald font-bold text-white mb-6 uppercase tracking-wider drop-shadow-lg">
            ¿Listo para destacar?
        </h2>
        <p class="text-lg text-gray-200 font-roboto mb-10 max-w-xl mx-auto">
            Escríbenos y un asesor te cotiza sin compromiso. Respuesta inmediata.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/56935206018?text=Hola%20Tokyo%20Tunning!%20Quiero%20cotizar%20un%20proyecto." target="_blank" rel="noopener"
               class="flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-10 py-4 text-xl shadow-2xl transition-smooth hover:scale-105">
                <i class="fa-brands fa-whatsapp text-2xl"></i> COTIZAR POR WHATSAPP
            </a>
            <a href="contacto.php" class="btn-outline py-4 px-10 text-xl shadow-2xl">
                Formulario de Contacto
            </a>
        </div>
    </div>
</section>

<!-- =============================================
     6. TESTIMONIOS / RESEÑAS
     ============================================= -->
<section class="py-20 bg-gray-50 text-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-primary font-oswald tracking-[0.2em] uppercase font-bold text-sm mb-1">Lo que dicen nuestros clientes</p>
            <h2 class="text-4xl font-oswald font-bold uppercase">Lo que dicen de <span class="text-primary">nosotros</span></h2>
        </div>
        <?php
        $reviews = [
            ['nombre'=>'Matías O.','vehiculo'=>'Suzuki Swift Sport','texto'=>'Dejé mi auto el martes por un crujido agudo en la rueda. En 15 min me mostraron la cazoleta rota y en 3 hrs me lo entregaron con repuesto nuevo. Sin inflar presupuesto, directos al grano.','stars'=>5,'badge'=>'Suspensión'],
            ['nombre'=>'Francisca L.','vehiculo'=>'Nissan Sentra','texto'=>'Agendé cierre centralizado. Llegué a las 11:00 y a las 14:00 estaba listo. El cableado no se nota por ningún lado, usaron cinta de tela original y el interior quedó soplado sin mugre.','stars'=>5,'badge'=>'Electrónica'],
            ['nombre'=>'Tomás A.','vehiculo'=>'Mazda 3 2019','texto'=>'Fui por el Pack Estándar de aceite Shell HX7. En 40 minutos literal le cambiaron aceite, filtro, y revisaron niveles de cortesía sin sorpresas en la boleta. Rápidos y transparentes.','stars'=>5,'badge'=>'Aceite'],
            ['nombre'=>'Javier C.','vehiculo'=>'Toyota Yaris','texto'=>'Compré un subwoofer por WhatsApp un miércoles; el jueves en la tarde me lo estaban instalando. Ocultaron todos los cables del amplificador bajo la alfombra como de fábrica. Sonido demoledor.','stars'=>5,'badge'=>'Audio'],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach($reviews as $r): ?>
            <div class="bg-white p-6 shadow-sm border-t-4 border-primary hover:shadow-md transition-smooth flex flex-col">
                <div class="flex text-accent mb-3">
                    <?php for($i=0;$i<$r['stars'];$i++) echo '<i class="fa-solid fa-star text-sm"></i>'; ?>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-5 flex-grow italic">"<?= $r['texto'] ?>"</p>
                <div class="border-t border-gray-100 pt-4 flex items-center justify-between">
                    <div>
                        <span class="font-oswald font-bold text-dark block"><?= $r['nombre'] ?></span>
                        <span class="text-gray-400 font-roboto text-xs"><?= $r['vehiculo'] ?></span>
                    </div>
                    <span class="bg-primary/10 text-primary text-xs font-bold font-oswald px-2 py-1 uppercase"><?= $r['badge'] ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =============================================
     7. INSTAGRAM / REELS
     ============================================= -->
<section class="py-16 bg-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-10">
            <a href="https://www.instagram.com/tokyotunning" target="_blank" rel="noopener"
               class="inline-flex items-center gap-3 text-2xl md:text-3xl font-oswald font-bold text-white uppercase tracking-widest hover:text-accent transition-smooth group">
                <i class="fa-brands fa-instagram text-accent group-hover:scale-110 transition-transform"></i>
                @TOKYOTUNNING
                <i class="fa-solid fa-arrow-up-right-from-square text-sm text-gray-500 group-hover:text-accent transition-smooth"></i>
            </a>
            <p class="text-gray-500 font-roboto text-sm mt-2">Síguenos para ver nuestros últimos trabajos y productos</p>
        </div>
        <?php
        $reels = [
            ['img'=>'assets/img/social-1.jpg','url'=>'https://www.instagram.com/tokyotunning/reel/DWHiwxHCiyj/'],
            ['img'=>'assets/img/social-2.jpg','url'=>'https://www.instagram.com/tokyotunning/reel/DVeAEKjigfT/'],
            ['img'=>'assets/img/social-3.jpg','url'=>'https://www.instagram.com/tokyotunning/reel/DVYynIIClp8/'],
            ['img'=>'assets/img/social-4.jpg','url'=>'https://www.instagram.com/tokyotunning/reel/DVjHns1CgsM/'],
            ['img'=>'assets/img/social-5.jpg','url'=>'https://www.instagram.com/tokyotunning/reel/DV3rhNTik0a/'],
            ['img'=>'assets/img/social-6.jpg','url'=>'https://www.instagram.com/tokyotunning/reel/DVq1EjWiq1_/'],
        ];
        ?>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">
            <?php foreach($reels as $reel): ?>
            <div class="relative aspect-square group overflow-hidden">
                <img src="<?= $reel['img'] ?>" alt="Reel Tokyo Tunning" class="w-full h-full object-cover hover-grayscale transition-all duration-500">
                <!-- Overlay con logo REEL y botón -->
                <a href="<?= $reel['url'] ?>" target="_blank" rel="noopener"
                   class="absolute inset-0 bg-black/70 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fa-brands fa-instagram text-white text-4xl mb-2"></i>
                    <span class="text-white font-oswald text-xs uppercase tracking-widest">Ver Reel</span>
                </a>
                <!-- Badge REEL siempre visible en mobile -->
                <div class="absolute top-2 left-2 bg-gradient-to-r from-[#833ab4] to-[#fd1d1d] text-white text-[10px] font-bold font-oswald px-2 py-0.5 uppercase tracking-wider flex items-center gap-1">
                    <i class="fa-brands fa-instagram text-[10px]"></i> REEL
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-8">
            <a href="https://www.instagram.com/tokyotunning" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 border border-gray-700 text-gray-400 hover:border-accent hover:text-accent font-oswald uppercase tracking-widest px-6 py-3 text-sm transition-smooth">
                <i class="fa-brands fa-instagram"></i> Ver más en Instagram
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
// ── Category Carousel Autoplay ───────────────────────────────────
(function() {
    var el = document.querySelector('.hide-scrollbar');
    if (!el) return;
    var speed = 0.6;   // px per frame
    var paused = false;
    var raf;

    function step() {
        if (!paused) {
            el.scrollLeft += speed;
            // Seamless loop: when we reach 50% width, jump back to 0
            if (el.scrollLeft >= el.scrollWidth / 2) {
                el.scrollLeft = 0;
            }
        }
        raf = requestAnimationFrame(step);
    }

    el.addEventListener('mouseenter', function() { paused = true; });
    el.addEventListener('mouseleave', function() { paused = false; });
    el.addEventListener('touchstart', function() { paused = true; }, { passive: true });
    el.addEventListener('touchend',   function() { setTimeout(function(){ paused = false; }, 2000); }, { passive: true });

    raf = requestAnimationFrame(step);
})();
</script>

