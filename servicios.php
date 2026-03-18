<?php
$page_title = "Servicios | Tokyo Tunning";
$current_page = "servicios";
include 'includes/header.php';
?>

<!-- 1. HERO SECTION -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden bg-dark">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=1920" alt="Servicios Tokyo Tunning" class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-oswald font-bold text-white mb-4 uppercase tracking-wider">
            Nuestros <span class="text-primary">Servicios</span>
        </h1>
        <p class="text-xl text-gray-300 font-roboto max-w-2xl mx-auto">
            Soluciones integrales de alto rendimiento para llevar tu vehículo al siguiente nivel.
        </p>
        <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto mt-8"></div>
    </div>
</section>

<!-- 2. NAV STICKY -->
<div class="sticky top-20 z-40 bg-black/90 backdrop-blur-md border-b border-gray-800 hidden md:block">
    <div class="container mx-auto px-4">
        <ul class="flex justify-center space-x-8 font-oswald tracking-widest uppercase text-sm">
            <li><a href="#accesorios" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">Accesorios</a></li>
            <li><a href="#performance" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">Performance</a></li>
            <li><a href="#frenos" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">Frenos</a></li>
            <li><a href="#mantenimiento" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">Mantenimiento</a></li>
            <li><a href="#audio" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">Audio</a></li>
            <li><a href="#escape" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">Escape</a></li>
        </ul>
    </div>
</div>

<!-- 3. ACCESORIOS (Claro) -->
<section id="accesorios" class="py-20 bg-gray-50 text-dark scroll-mt-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center mb-12">
            <h2 class="text-3xl md:text-4xl font-oswald font-bold uppercase">Accesorios y <span class="text-primary">Estética</span></h2>
            <div class="ml-6 flex-grow h-[2px] bg-gray-200"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 border-l-4 border-gray-300 hover:border-primary shadow-md transition-smooth group">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-oswald font-bold group-hover:text-primary transition-smooth">Instalación Body Kits</h3>
                    <span class="bg-dark text-white text-xs font-bold px-2 py-1 uppercase rounded-sm [ Popular ]">Popular</span>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-4">Ajuste y montaje profesional de parachoques, faldones, y alerones aerodinámicos.</p>
                <div class="text-accent font-oswald font-bold">Desde $150.000</div>
            </div>
            
            <div class="bg-white p-6 border-l-4 border-gray-300 hover:border-primary shadow-md transition-smooth group">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-oswald font-bold group-hover:text-primary transition-smooth">Iluminación LED Custom</h3>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-4">Underglow, luces interiores ambientales, y modificación de ópticas (ojos de ángel/demonio).</p>
                <div class="text-accent font-oswald font-bold">Desde $80.000</div>
            </div>
            
            <div class="bg-white p-6 border-l-4 border-gray-300 hover:border-primary shadow-md transition-smooth group">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-oswald font-bold group-hover:text-primary transition-smooth">Láminas de Seguridad</h3>
                    <span class="bg-primary text-white text-xs font-bold px-2 py-1 uppercase rounded-sm [ Nuevo ]">Recomendado</span>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-4">Tinte fotocromático y láminas anti-impacto (4 a 12 micras) con protección UV.</p>
                <div class="text-accent font-oswald font-bold">Desde $120.000</div>
            </div>
        </div>
    </div>
</section>

<!-- 4. PERFORMANCE DESTACADA (Oscuro) -->
<section id="performance" class="py-24 bg-dark relative border-y border-gray-800 scroll-mt-32">
    <!-- Grid pattern background -->
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(#333 1px, transparent 1px), linear-gradient(90deg, #333 1px, transparent 1px); background-size: 30px 30px;"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="lg:w-1/2">
                <span class="text-primary font-oswald tracking-widest uppercase text-sm font-bold mb-2 block">Sección Destacada</span>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white mb-6 uppercase">
                    Stage 1, 2 y 3 <br><span class="text-accent">Reprogramación</span>
                </h2>
                <p class="text-gray-400 font-roboto text-lg mb-8 leading-relaxed">
                    Desbloquea el verdadero potencial de tu motor. Nuestras reprogramaciones de ECU están hechas a medida para tu vehículo, optimizando curvas de potencia, respuesta del acelerador y consumo, siempre manteniendo los márgenes de seguridad.
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start text-gray-300">
                        <i class="fa-solid fa-check text-primary mt-1 mr-3"></i>
                        <div><strong class="text-white font-oswald uppercase">Stage 1:</strong> Optimización de software sin modificaciones mecánicas.</div>
                    </li>
                    <li class="flex items-start text-gray-300">
                        <i class="fa-solid fa-check text-primary mt-1 mr-3"></i>
                        <div><strong class="text-white font-oswald uppercase">Stage 2:</strong> Requiere inducción de aire y downpipe/escape.</div>
                    </li>
                    <li class="flex items-start text-gray-300">
                        <i class="fa-solid fa-check text-primary mt-1 mr-3"></i>
                        <div><strong class="text-white font-oswald uppercase">Stage 3:</strong> Upgrade de turbo/supercargador e inyectores.</div>
                    </li>
                </ul>
                
                <a href="contacto.php" class="btn-primary py-3 px-8">Consultar Factibilidad</a>
            </div>
            
            <div class="lg:w-1/2 w-full">
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&q=80&w=800" alt="Dyno testing" class="w-full h-48 md:h-64 object-cover border-2 border-gray-800 hover:border-accent transition-smooth">
                    <img src="https://images.unsplash.com/photo-1622353344332-6a4a15efb5fd?auto=format&fit=crop&q=80&w=800" alt="ECU tuning" class="w-full h-48 md:h-64 object-cover border-2 border-gray-800 hover:border-accent transition-smooth mt-8">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. FRENOS (Claro) -->
<section id="frenos" class="py-20 bg-gray-50 text-dark scroll-mt-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center mb-12">
            <h2 class="text-3xl md:text-4xl font-oswald font-bold uppercase">Sistemas de <span class="text-primary">Frenos</span></h2>
            <div class="ml-6 flex-grow h-[2px] bg-gray-200"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 border-l-4 border-gray-300 hover:border-primary shadow-md transition-smooth group">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-oswald font-bold group-hover:text-primary transition-smooth">Upgrade a Frenos Deportivos</h3>
                    <span class="bg-dark text-white text-xs font-bold px-2 py-1 uppercase rounded-sm [ Popular ]">Popular</span>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-4">Instalación de discos perforados/ranurados y pastillas de compuesto de carbono/cerámica para menor fatiga.</p>
                <div class="text-accent font-oswald font-bold">Según Vehículo</div>
            </div>
            
            <div class="bg-white p-6 border-l-4 border-gray-300 hover:border-primary shadow-md transition-smooth group">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-oswald font-bold group-hover:text-primary transition-smooth">Líneas Metálicas (Latiguillos)</h3>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-4">Reemplazo de líneas de goma por acero inoxidable trenzado. Mejora el tacto del pedal y respuesta.</p>
                <div class="text-accent font-oswald font-bold">Desde $110.000</div>
            </div>
            
            <div class="bg-white p-6 border-l-4 border-gray-300 hover:border-primary shadow-md transition-smooth group">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-oswald font-bold group-hover:text-primary transition-smooth">Pintura de Calipers</h3>
                </div>
                <p class="text-gray-600 font-roboto text-sm mb-4">Pintura de alta temperatura horneada (VHT). Diferentes colores disponibles con logos personalizados.</p>
                <div class="text-accent font-oswald font-bold">Desde $75.000</div>
            </div>
        </div>
        <p class="text-sm font-roboto text-gray-500 mt-6 italic">* Nota: Trabajamos con marcas como Brembo, EBC Brakes, Hawk y StopTech.</p>
    </div>
</section>

<!-- 6. MANTENIMIENTO (Oscuro) -->
<section id="mantenimiento" class="py-20 bg-dark text-white scroll-mt-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center mb-12">
            <h2 class="text-3xl md:text-4xl font-oswald font-bold uppercase">Mantenimiento <span class="text-accent">Avanzado</span></h2>
            <div class="ml-6 flex-grow h-[2px] bg-gray-800"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-[#111] p-6 border-l-4 border-gray-700 hover:border-accent shadow-md transition-smooth group">
                <h3 class="text-xl font-oswald font-bold group-hover:text-accent transition-smooth mb-4">Servicio de Suspensión</h3>
                <p class="text-gray-400 font-roboto text-sm mb-4">Instalación y set-up de coilovers, resortes deportivos (lowering springs), y barras estabilizadoras.</p>
                <div class="text-primary font-oswald font-bold">Desde $180.000 (Mano de obra)</div>
            </div>
            
            <div class="bg-[#111] p-6 border-l-4 border-gray-700 hover:border-accent shadow-md transition-smooth group">
                <h3 class="text-xl font-oswald font-bold group-hover:text-accent transition-smooth mb-4">Cambio Aceite Competición</h3>
                <p class="text-gray-400 font-roboto text-sm mb-4">Solo utilizamos fluidos Motul 300V, Liqui Moly o equivalentes, con filtros de alto flujo K&N u OEM.</p>
                <div class="text-primary font-oswald font-bold">Desde $90.000</div>
            </div>
            
            <div class="bg-[#111] p-6 border-l-4 border-gray-700 hover:border-accent shadow-md transition-smooth group">
                <h3 class="text-xl font-oswald font-bold group-hover:text-accent transition-smooth mb-4">Limpieza Inyectores y Admisión</h3>
                <p class="text-gray-400 font-roboto text-sm mb-4">Limpieza ultrasónica de inyectores y descarbonización de múltiple de admisión (Walnut Blasting).</p>
                <div class="text-primary font-oswald font-bold">Desde $130.000</div>
            </div>
        </div>
    </div>
</section>

<!-- 7. AUDIO Y 8. ESCAPE COMBINADO (Claro) -->
<section id="audio" class="py-20 bg-gray-50 text-dark scroll-mt-32">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Audio -->
            <div>
                <div class="flex items-center mb-8">
                    <h2 class="text-3xl font-oswald font-bold uppercase">Sistemas de <span class="text-primary">Audio</span></h2>
                    <div class="ml-4 flex-grow h-[2px] bg-gray-200"></div>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-white p-5 shadow border-b-2 border-transparent hover:border-primary transition-smooth">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-oswald font-bold text-lg">Insonorización Completa</h3>
                            <span class="text-accent font-bold">Cotizar</span>
                        </div>
                        <p class="text-gray-600 text-sm">Aplicación de material insonorizante (Dynamat/STP) en puertas, maletero y piso para acústica perfecta.</p>
                    </div>
                    
                    <div class="bg-white p-5 shadow border-b-2 border-transparent hover:border-primary transition-smooth">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-oswald font-bold text-lg">Instalación Subwoofers & Amps</h3>
                            <span class="text-accent font-bold">Desde $110.000</span>
                        </div>
                        <p class="text-gray-600 text-sm">Cableado OFC calibre 4 o 0, ajuste de ganancias por osciloscopio y cajones a medida.</p>
                    </div>
                </div>
            </div>
            
            <!-- Escape -->
            <div id="escape" class="scroll-mt-32">
                <div class="flex items-center mb-8">
                    <h2 class="text-3xl font-oswald font-bold uppercase">Sistemas de <span class="text-accent">Escape</span></h2>
                    <div class="ml-4 flex-grow h-[2px] bg-gray-200"></div>
                </div>
                
                <div class="space-y-4">
                    <div class="bg-white p-5 shadow border-b-2 border-transparent hover:border-accent transition-smooth">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-oswald font-bold text-lg">Downpipes (Catless/High-Flow)</h3>
                            <span class="text-primary font-bold">Desde $250.000</span>
                        </div>
                        <p class="text-gray-600 text-sm">Acero inoxidable 304, soldadura TIG. Liberación de contrapresión del turbo para mayor spool y WHP.</p>
                    </div>
                    
                    <div class="bg-white p-5 shadow border-b-2 border-transparent hover:border-accent transition-smooth">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-oswald font-bold text-lg">Catbacks & Mufflers custom</h3>
                            <span class="text-primary font-bold">Desde $350.000</span>
                        </div>
                        <p class="text-gray-600 text-sm">Líneas completas en 2.5" o 3". Opciones con válvulas inalámbricas (Cut-out) para controlar el sonido.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- 9. CTA FINAL -->
<section class="py-24 bg-dark border-t-4 border-primary text-center">
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white mb-6 uppercase">
            Transforma tu <span class="text-accent">Vehículo</span> Hoy
        </h2>
        <p class="text-xl text-gray-400 font-roboto max-w-2xl mx-auto mb-10">
            Cada proyecto es único. Agenda una asesoría técnica con nuestro equipo para definir el rumbo exacto de las modificaciones que necesitas.
        </p>
        <a href="contacto.php" class="btn-primary py-4 px-12 text-xl shadow-2xl inline-block hover:scale-110">AGENDAR CITA AHORA</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
