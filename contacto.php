<?php
$page_title = "Contacto | Tokyo Tunning";
$current_page = "contacto";
include 'includes/header.php';
?>

<!-- 1. HERO SECTION -->
<section class="relative h-[40vh] flex items-center justify-center overflow-hidden bg-dark border-b-4 border-transparent" style="border-image: linear-gradient(to right, #C41E3A, #D4A847) 1;">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&q=80&w=1920" alt="Contacto Tokyo Tunning" class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0A] to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-oswald font-bold text-white tracking-wider uppercase">
            <span class="text-primary">Contacta</span> a los Expertos
        </h1>
    </div>
</section>

<!-- 2. CONTENIDO (2 Columnas) -->
<section class="py-24 bg-gray-50 text-dark relative">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-primary font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Excelencia en Mantenimiento y Optimización Automotriz</p>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold mb-8 uppercase leading-tight">Su taller de confianza especializado en mecánica ágil y equipamiento.</h2>
                <p class="mb-6">En Tokyo Tunning, gestionamos el cuidado de su vehículo con precisión técnica y un enfoque en la eficiencia. Nos especializamos en servicios de mantenimiento preventivo y mejoras estéticas, asegurando que cada intervención cumpla con los más altos estándares de calidad y seguridad.</p>
                <ul class="list-disc pl-5 mb-6">
                    <li><strong>Mantenimiento Preventivo:</strong> Cambio de aceite, sustitución de filtros y optimización del sistema de refrigeración.</li>
                    <li><strong>Tren Delantero y Suspensión:</strong> Diagnóstico y reemplazo de bandejas, cazoletas y amortiguadores.</li>
                    <li><strong>Seguridad Activa:</strong> Renovación de pastillas de freno y revisión integral de sistemas de frenado.</li>
                    <li><strong>Dinámica de Conducción:</strong> Servicios especializados de alineación y balanceo computarizado.</li>
                    <li><strong>Equipamiento de Confort:</strong> Venta e instalación de sistemas de audio y accesorios de personalización.</li>
                </ul>
                <p class="text-primary font-oswald tracking-[0.2em] uppercase mb-2 font-bold text-sm">Trayectoria y Resultados</p>
                <p class="text-lg font-roboto">3 Años de experiencia en el sector automotriz.</p>
                <p class="text-lg font-roboto">+500 Proyectos finalizados con éxito.</p>
            </div>
        </div>
    </div>
</section>

<!-- 2. CONTENIDO (2 Columnas) -->
<section class="py-20 bg-gray-50 relative -mt-10 z-20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- IZQUIERDA - Información -->
            <div class="w-full lg:w-5/12">
                <div class="bg-dark p-8 md:p-12 text-white shadow-2xl h-full border-r-4 border-accent relative overflow-hidden">
                    <div class="absolute -right-16 -top-16 text-gray-800 opacity-20 text-9xl">
                        <i class="fa-solid fa-wrench"></i>
                    </div>
                    
                    <h2 class="text-3xl font-oswald font-bold uppercase mb-8 relative z-10">Información del <span class="text-accent">Taller</span></h2>
                    
                    <div class="space-y-8 relative z-10 font-roboto">
                        <!-- Item -->
                        <div class="flex">
                            <div class="mt-1 bg-gray-800 w-12 h-12 flex items-center justify-center rounded-sm text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-oswald uppercase text-gray-400 text-sm tracking-wider mb-1">Horarios de Atención</h3>
                                <p>Lunes - Viernes: 10:00 a 19:00 hrs</p>
                                <p>Sábados: 10:00 a 14:00 hrs</p>
                                <p class="text-primary mt-1 text-sm">Domingos: Cerrado</p>
                            </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="flex">
                            <div class="mt-1 bg-gray-800 w-12 h-12 flex items-center justify-center rounded-sm text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-oswald uppercase text-gray-400 text-sm tracking-wider mb-1">Ubicación</h3>
                                <p>Av. Principal 1234, Ciudad</p>
                                <p>Sector Automotriz Industrial</p>
                            </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="flex">
                            <div class="mt-1 bg-gray-800 w-12 h-12 flex items-center justify-center rounded-sm text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-oswald uppercase text-gray-400 text-sm tracking-wider mb-1">Llámanos</h3>
                                <p class="text-xl font-oswald font-bold">+1 (234) 567-890</p>
                            </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="flex">
                            <div class="mt-1 bg-[#128C7E] w-12 h-12 flex items-center justify-center rounded-sm text-white text-xl flex-shrink-0">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-oswald uppercase text-gray-400 text-sm tracking-wider mb-1">WhatsApp Ventas/Citas</h3>
                                <a href="#" class="text-lg hover:text-accent transition-smooth">+1 (987) 654-321</a>
                            </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="flex">
                            <div class="mt-1 bg-gray-800 w-12 h-12 flex items-center justify-center rounded-sm text-primary text-xl flex-shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-oswald uppercase text-gray-400 text-sm tracking-wider mb-1">Correo Electrónico</h3>
                                <a href="mailto:info@tokyotunning.com" class="hover:text-accent transition-smooth">info@tokyotunning.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12 pt-8 border-t border-gray-800 relative z-10">
                        <h3 class="font-oswald uppercase text-gray-400 text-sm tracking-wider mb-4">Síguenos en Redes</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-800 w-12 h-12 flex items-center justify-center text-white hover:bg-primary transition-colors duration-300 text-xl"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="bg-gray-800 w-12 h-12 flex items-center justify-center text-white hover:bg-primary transition-colors duration-300 text-xl"><i class="fa-brands fa-tiktok"></i></a>
                            <a href="#" class="bg-gray-800 w-12 h-12 flex items-center justify-center text-white hover:bg-primary transition-colors duration-300 text-xl"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="bg-gray-800 w-12 h-12 flex items-center justify-center text-white hover:bg-[#FF0000] transition-colors duration-300 text-xl"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- DERECHA - Formulario -->
            <div class="w-full lg:w-7/12 mt-8 lg:mt-0">
                <div class="bg-white p-8 md:p-12 shadow-xl border-t-4 border-primary h-full">
                    <h2 class="text-3xl font-oswald font-bold uppercase mb-2 text-dark">Agenda tu <span class="text-primary">Proyecto</span></h2>
                    <p class="text-gray-500 font-roboto mb-8">Completa el formulario y un asesor se pondrá en contacto contigo a la brevedad para agendar tu visita o enviar una cotización formal.</p>
                    
                    <!-- Formulario (Simulado HTML Puro) -->
                    <form action="#" method="POST" class="space-y-6 font-roboto">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nombre -->
                            <div>
                                <label for="nombre" class="block text-sm font-bold text-gray-700 mb-2 uppercase font-oswald">Nombre Completo *</label>
                                <input type="text" id="nombre" name="nombre" required class="w-full bg-gray-50 border border-gray-300 px-4 py-3 text-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-smooth" placeholder="Ej: Juan Pérez">
                            </div>
                            
                            <!-- Teléfono -->
                            <div>
                                <label for="telefono" class="block text-sm font-bold text-gray-700 mb-2 uppercase font-oswald">Teléfono / WhatsApp *</label>
                                <input type="tel" id="telefono" name="telefono" required class="w-full bg-gray-50 border border-gray-300 px-4 py-3 text-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-smooth" placeholder="+56 9 1234 5678">
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-700 mb-2 uppercase font-oswald">Correo Electrónico *</label>
                            <input type="email" id="email" name="email" required class="w-full bg-gray-50 border border-gray-300 px-4 py-3 text-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-smooth" placeholder="juan@correo.com">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Vehículo -->
                            <div>
                                <label for="vehiculo" class="block text-sm font-bold text-gray-700 mb-2 uppercase font-oswald">Marca y Modelo Vehículo</label>
                                <input type="text" id="vehiculo" name="vehiculo" class="w-full bg-gray-50 border border-gray-300 px-4 py-3 text-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-smooth" placeholder="Ej: Subaru WRX STI 2018">
                            </div>
                            
                            <!-- Motivo -->
                            <div>
                                <label for="motivo" class="block text-sm font-bold text-gray-700 mb-2 uppercase font-oswald">Motivo de Contacto</label>
                                <div class="relative">
                                    <select id="motivo" name="motivo" class="w-full bg-gray-50 border border-gray-300 px-4 py-3 text-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-smooth appearance-none">
                                        <option value="cotizacion">Cotización Proyecto (Stage 1, 2, 3)</option>
                                        <option value="mantenimiento">Mantenimiento o Reparo</option>
                                        <option value="estetica">Accesorios / Estética</option>
                                        <option value="compra">Compra Producto Catálogo</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mensaje -->
                        <div>
                            <label for="mensaje" class="block text-sm font-bold text-gray-700 mb-2 uppercase font-oswald">Detalles del Proyecto o Consulta</label>
                            <textarea id="mensaje" name="mensaje" rows="5" class="w-full bg-gray-50 border border-gray-300 px-4 py-3 text-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-smooth resize-none" placeholder="Cuéntanos qué tienes en mente para tu vehículo..."></textarea>
                        </div>
                        
                        <!-- Submit -->
                        <div class="pt-2">
                            <button type="submit" class="btn-primary w-full py-4 text-lg tracking-wider">
                                ENVIAR MENSAJE <i class="fa-solid fa-paper-plane ml-2"></i>
                            </button>
                        </div>
                        <p class="text-xs text-gray-400 text-center mt-4">Al enviar este formulario aceptas nuestra política de privacidad de datos.</p>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- 3. MAPA -->
<section class="bg-dark pt-16 border-t font-oswald border-gray-800">
    <div class="container mx-auto px-4 mb-8 text-center">
        <h2 class="text-3xl font-bold text-white uppercase"><i class="fa-solid fa-map-location-dot text-primary mr-3"></i>Cómo Llegar</h2>
        <p class="text-gray-400 mt-2 font-roboto font-light">Contamos con estacionamiento exclusivo y seguro para clientes.</p>
    </div>
    
    <!-- Contenedor Mapa (Placeholder) -->
    <div class="w-full h-[400px] bg-gray-800 relative group grayscale hover:grayscale-0 transition-all duration-1000">
        <!-- Overlay texto -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-10">
            <div class="bg-black/70 text-white px-6 py-3 border border-gray-600 backdrop-blur-sm group-hover:opacity-0 transition-opacity duration-500">
                <i class="fa-solid fa-map-location-dot text-accent mr-2"></i> Integración Google Maps
            </div>
        </div>
        
        <!-- Iframe simulación map oscuro -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113426.35345717!2d-122.0911578351513!3d37.36932599781667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon%20Valley%2C%20CA%2C%20USA!5e0!3m2!1sen!2scl!4v1709230538237!5m2!1sen!2scl" width="100%" height="100%" style="border:0; filter: invert(90%) hue-rotate(180deg);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
