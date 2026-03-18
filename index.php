<?php
$page_title = "Tokyo Tunning | Tuning Automotriz Premium";
$current_page = "inicio";
include 'includes/header.php';
?>

<!-- 1. HERO SECTION -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="assets/img/hero.jpg" alt="Taller Tokyo Tunning" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <p class="text-accent font-oswald tracking-[0.3em] uppercase mb-4 font-bold text-sm md:text-base">Taller Especializado Premium</p>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-oswald font-bold text-white leading-tight mb-6">
                LLEVA TU <br>
                <span class="gradient-text">MÁQUINA</span> AL <br>
                LÍMITE
            </h1>
            
            <ul class="flex flex-wrap items-center gap-4 text-gray-300 font-roboto mb-10 text-lg">
                <li class="flex items-center"><i class="fa-solid fa-bolt text-accent text-xs mr-2"></i> Performance</li>
                <li class="flex items-center"><i class="fa-solid fa-bolt text-accent text-xs mr-2"></i> Estética</li>
                <li class="flex items-center"><i class="fa-solid fa-bolt text-accent text-xs mr-2"></i> Mantenimiento</li>
            </ul>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="servicios.php" class="btn-primary py-4 px-8 text-lg w-full sm:w-auto">Ver Servicios</a>
                <a href="catalogo.php" class="btn-outline py-4 px-8 text-lg w-full sm:w-auto">Catálogo</a>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce z-10">
        <span class="text-xs text-gray-400 font-oswald uppercase tracking-widest mb-2">Descubre</span>
        <i class="fa-solid fa-chevron-down text-accent"></i>
    </div>
</section>

<!-- 2. INTRO -->
<section class="py-24 bg-gray-50 text-dark relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-primary font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Bienvenidos a la Élite</p>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold mb-8 uppercase leading-tight">
                    No es solo un auto,<br>es una <span class="text-primary">extensión de ti</span>.
                </h2>
                
                <div class="space-y-6 font-roboto text-gray-600 text-lg">
                    <p>
                        En Tokyo Tunning no hacemos arreglos convencionales. Nos dedicamos a transformar vehículos ordinarios en máquinas extraordinarias, optimizando cada detalle para el máximo rendimiento y estética.
                    </p>
                    <p>
                        Nuestra pasión es el motor, nuestro lienzo es la carrocería. Trabajamos con las mejores marcas internacionales y piezas de competición para asegurar que tu vehículo destaque en la calle y domine en la pista.
                    </p>
                </div>
                
                <div class="mt-10 flex border-t-2 border-primary pt-8 gap-8">
                    <div>
                        <span class="block text-4xl font-oswald font-bold text-dark mb-1">+10<span class="text-accent">Años</span></span>
                        <span class="text-sm text-gray-500 font-roboto uppercase tracking-wider">Experiencia</span>
                    </div>
                    <div>
                        <span class="block text-4xl font-oswald font-bold text-dark mb-1">+500</span>
                        <span class="text-sm text-gray-500 font-roboto uppercase tracking-wider">Proyectos</span>
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
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Mantenimiento Tuning</h3>
                    <p class="text-gray-400 font-roboto text-sm">Ajustes de suspensión deportiva, coilovers, alineación de competición y set-up.</p>
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
                    <p class="text-gray-400 font-roboto text-sm">Upgrades de pinzas, frenos ranurados/perforados, líneas metálicas y líquidos de alta temperatura.</p>
                </div>
            </a>
            
            <!-- Card 4 -->
            <a href="servicios.php#motor" class="group block bg-[#111] border-l-4 border-gray-800 hover:border-primary transition-smooth overflow-hidden">
                <div class="relative h-64 overflow-hidden">
                    <img src="assets/img/servicio-4.jpg" alt="Mantenimiento Motor" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 hover-grayscale">
                    <div class="absolute top-4 right-4 bg-accent text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider font-oswald z-10">MANTENIMIENTO</div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-oswald font-bold text-white mb-3 group-hover:text-primary transition-smooth">Servicio de Fluidos</h3>
                    <p class="text-gray-400 font-roboto text-sm">Cambio de aceites premium Motul/Liqui Moly, refrigerantes de competición.</p>
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

<!-- 4. NUESTRA HISTORIA -->
<section class="py-24 bg-white text-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
            <div class="lg:w-1/2">
                <p class="text-primary font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">La Cultura Tuning</p>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold mb-8 uppercase leading-tight">
                    Nacidos en la <span class="gradient-text">calle</span>,<br>forjados en el taller.
                </h2>
                
                <div class="space-y-6 font-roboto text-gray-600 text-lg mb-8">
                    <p>
                        Tokyo Tunning nació de la pasión pura por los motores y la estética agresiva. Empezamos como un pequeño garaje para amigos y hoy somos el referente número uno en personalización automotriz de alta gama en la región.
                    </p>
                    <p>
                        Nuestro equipo está formado por entusiastas puristas. Cada tornillo que apretamos, cada cable que ocultamos, lo hacemos con el nivel de perfeccionismo que aplicaríamos a nuestros propios vehículos.
                    </p>
                </div>
                
                <a href="contacto.php" class="btn-outline py-3 px-8 text-sm">Únete a la Familia</a>
            </div>
            
            <div class="lg:w-1/2">
                <img src="assets/img/equipo.jpg" alt="Equipo Tokyo Tunning" class="w-full h-auto object-cover border-b-8 border-primary hover-grayscale shadow-xl">
            </div>
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
