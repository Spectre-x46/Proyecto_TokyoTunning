<?php
$page_title = "Servicios | Tokyo Tunning";
$current_page = "servicios";
include 'includes/header.php';
?>

<!-- 1. HERO SECTION -->
<section class="relative h-[50vh] flex items-center justify-center overflow-hidden bg-dark">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=1920" alt="Servicios Tokyo Tunning" class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/60 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <p class="text-accent font-oswald tracking-[0.3em] uppercase mb-3 font-bold text-sm">San Bernardo, RM</p>
        <h1 class="text-5xl md:text-7xl font-oswald font-bold text-white mb-4 uppercase tracking-wider">
            Nuestros <span class="text-primary">Servicios</span>
        </h1>
        <p class="text-xl text-gray-300 font-roboto max-w-2xl mx-auto">
            Mecánica, electrónica y mantenimiento — precios transparentes y mano de obra especializada.
        </p>
        <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto mt-8"></div>

        <!-- Quick Stats -->
        <div class="flex flex-wrap justify-center gap-8 mt-10">
            <div class="text-center">
                <span class="block text-3xl font-oswald font-bold text-white">3 <span class="text-accent">Años</span></span>
                <span class="text-xs text-gray-400 font-roboto uppercase tracking-widest">Experiencia</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl font-oswald font-bold text-white">+500</span>
                <span class="text-xs text-gray-400 font-roboto uppercase tracking-widest">Proyectos</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl font-oswald font-bold text-white">Lun-Sáb</span>
                <span class="text-xs text-gray-400 font-roboto uppercase tracking-widest">10:00-19:00</span>
            </div>
        </div>
    </div>
</section>

<!-- SÍNTOMAS / DIAGNOSTIC -->
<section class="py-16 bg-white text-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-10">
            <p class="text-primary font-oswald tracking-[0.2em] uppercase font-bold text-sm mb-1">Diagnóstico Rápido</p>
            <h2 class="text-3xl md:text-4xl font-oswald font-bold uppercase">¿Qué le pasa a <span class="text-primary">tu auto?</span></h2>
            <p class="text-gray-500 font-roboto mt-2 text-sm mb-6">Filtra tu síntoma y te llevamos directo a la solución</p>
            
            <!-- Buscador Predictivo Visual -->
            <div class="max-w-md mx-auto relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 group-focus-within:text-primary transition-colors"></i>
                </div>
                <input type="text" id="symptomSearch" placeholder="¿Qué le duele a tu auto? Ej. Ruido, luz..." 
                       class="w-full bg-gray-50 border-2 border-gray-200 text-dark font-roboto text-sm px-12 py-4 rounded-full focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all shadow-inner">
            </div>
        </div>
        <?php
        $sintomas = [
            ['emoji'=>'🔊','sintoma'=>'Ruido o chirrido al frenar','solucion'=>'Pastillas, Balatas, Purgación de Frenos','href'=>'#mecanica','urgencia'=>'urgente'],
            ['emoji'=>'🥊','sintoma'=>'Golpes o ruido en suspensión','solucion'=>'Amortiguadores, Cazoletas, Bieletas, Bandejas','href'=>'#mecanica','urgencia'=>'urgente'],
            ['emoji'=>'🔄','sintoma'=>'Vibración en el volante','solucion'=>'Balanceo, Alineación, Bandejas, Terminales','href'=>'#mecanica','urgencia'=>'normal'],
            ['emoji'=>'🔓','sintoma'=>'Alarma o cierre que falla','solucion'=>'Alarma, Cierre Centralizado, Corta Corriente','href'=>'#electronica','urgencia'=>'normal'],
            ['emoji'=>'⚠️','sintoma'=>'Luz de motor encendida','solucion'=>'Scanner Diagnóstico, Lectura de fallas','href'=>'#diagnostico','urgencia'=>'urgente'],
            ['emoji'=>'🛢️','sintoma'=>'Cambio de aceite pendiente','solucion'=>'Cambio de Carter Motor/Caja','href'=>'#aceite','urgencia'=>'normal'],
        ];
        ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" id="symptomsGrid">
            <?php foreach($sintomas as $s): ?>
            <a href="<?= $s['href'] ?>"
               class="symptom-card group flex items-start gap-4 p-5 border-2 <?= $s['urgencia']==='urgente' ? 'border-primary/20 hover:border-primary' : 'border-gray-200 hover:border-accent' ?> bg-white hover:bg-gray-50 transition-all duration-300 hover:shadow-md">
                <span class="text-3xl shrink-0 mt-1"><?= $s['emoji'] ?></span>
                <div class="flex-grow">
                    <h3 class="font-oswald font-bold text-dark text-lg leading-tight <?= $s['urgencia']==='urgente' ? 'group-hover:text-primary' : 'group-hover:text-accent' ?> transition-colors">
                        <?= $s['sintoma'] ?>
                    </h3>
                    <p class="text-gray-500 font-roboto text-xs mt-1">→ <?= $s['solucion'] ?></p>
                </div>
                <?php if($s['urgencia']==='urgente'): ?>
                <span class="shrink-0 bg-primary/10 text-primary text-[9px] font-bold font-oswald px-2 py-1 uppercase self-start mt-1">⚡ Urgente</span>
                <?php endif; ?>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-8">
            <p class="text-gray-400 font-roboto text-sm mb-3">¿No encuentras tu síntoma? Escríbenos directamente.</p>
            <a href="https://wa.me/56935206018?text=Hola!%20Mi%20auto%20tiene%20un%20problema%20y%20necesito%20diagnóstico." target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-6 py-3 shadow-lg transition-smooth">
                <i class="fa-brands fa-whatsapp text-xl"></i> Consultar Síntoma por WhatsApp
            </a>
        </div>
        
        <script>
        document.getElementById('symptomSearch').addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.symptom-card');
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(term) ? 'flex' : 'none';
            });
        });
        </script>
        
    </div>
</section>

<!-- 2. NAV STICKY -->
<div class="sticky top-20 z-40 bg-black/95 backdrop-blur-md border-b border-gray-800 hidden md:block">
    <div class="container mx-auto px-4">
        <ul class="flex justify-center space-x-8 font-oswald tracking-widest uppercase text-sm">
            <li><a href="#diagnostico" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">🔍 Diagnóstico</a></li>
            <li><a href="#aceite" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">🔧 Aceite</a></li>
            <li><a href="#mecanica" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">⚙️ Mecánica</a></li>
            <li><a href="#electronica" class="block py-4 text-gray-400 hover:text-accent border-b-2 border-transparent hover:border-accent transition-smooth">⚡ Electrónica</a></li>
        </ul>
    </div>
</div>

<!-- DIAGNÓSTICO Y REVISIÓN -->
<section id="diagnostico" class="py-24 bg-white text-dark scroll-mt-32">
    <div class="container mx-auto px-4 lg:px-8">

        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-12 gap-6">
            <div>
                <span class="inline-flex items-center gap-2 bg-dark text-accent border border-accent/20 font-oswald text-xs tracking-widest uppercase px-4 py-2 mb-3">
                    <i class="fa-solid fa-magnifying-glass-chart"></i> Diagnóstico Profesional
                </span>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold uppercase text-dark">Scanner y <span class="text-primary">Revisión</span></h2>
                <p class="text-gray-500 font-roboto mt-2">¿No sabes qué le pasa a tu auto? Primero te revisamos, después actúas con certeza.</p>
            </div>
            <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20una%20revisi%C3%B3n%20mecánica." target="_blank" rel="noopener"
               class="shrink-0 flex items-center gap-2 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-6 py-3 transition-smooth shadow-lg">
                <i class="fa-brands fa-whatsapp text-xl"></i> Agendar Revisión
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-gray-200 overflow-hidden shadow-xl">

            <!-- CARD 1: Revisión completa — la estrella -->
            <div class="relative flex flex-col p-8 bg-dark text-white border-b md:border-b-0 md:border-r border-gray-800">
                <!-- Badge destacado -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-accent"></div>
                <div class="absolute top-4 right-4 bg-accent text-dark text-[9px] font-bold font-oswald px-2 py-1 uppercase tracking-widest">⭐ Lo más pedido</div>

                <div class="flex items-center gap-3 mb-5 pt-2">
                    <div class="w-12 h-12 bg-primary/10 rounded flex items-center justify-center shrink-0 border border-primary/20">
                        <i class="fa-solid fa-car-on text-primary text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-oswald font-bold text-xl text-white uppercase leading-tight">Revisión Mecánica Completa</h3>
                        <p class="text-gray-400 font-roboto text-xs">Inspección visual — por debajo — del auto</p>
                    </div>
                </div>

                <ul class="space-y-3 mb-6 flex-grow font-roboto text-sm text-gray-300">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Revisión completa de tren delantero y trasero</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Revisión de frenos, suspensión y dirección</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Informe escrito de las fallas encontradas</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Cotización de reparación incluida</li>
                    <li class="flex items-start gap-2 border-t border-gray-700 pt-3 mt-2">
                        <i class="fa-solid fa-tag text-primary text-xs mt-1 shrink-0"></i>
                        <span class="text-primary font-bold text-xs">* Abonando $15.000 hoy, tu diagnóstico te sale gratis si reparas con nosotros.</span>
                    </li>
                </ul>

                <div class="border-t border-gray-700 pt-5">
                    <div class="flex items-baseline gap-2 mb-4">
                        <span class="block font-oswald font-bold text-5xl text-accent">$0</span>
                        <span class="font-roboto text-sm text-gray-400 font-bold">*</span>
                    </div>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20una%20Revisi%C3%B3n%20Mec%C3%A1nica%20Completa." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 w-full bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-4 py-3 text-sm transition-smooth shadow-lg">
                        <i class="fa-brands fa-whatsapp"></i> Reservar Revisión
                    </a>
                </div>
            </div>

            <!-- CARD 2: Scanner -->
            <div class="flex flex-col p-8 bg-white border-b md:border-b-0 md:border-r border-gray-200 hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-primary/5 rounded flex items-center justify-center shrink-0 border border-primary/10">
                        <i class="fa-solid fa-laptop-code text-primary text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-oswald font-bold text-xl text-dark uppercase leading-tight">Scanner Computarizado</h3>
                        <p class="text-gray-500 font-roboto text-xs">Lectura OBD2 de fallas activas</p>
                    </div>
                </div>

                <ul class="space-y-3 mb-6 flex-grow font-roboto text-sm text-gray-600">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Lectura de códigos de falla del motor</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Diagnóstico de sensores y sistemas electrónicos</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Explicación clara de lo que indica cada falla</li>
                    <li class="flex items-start gap-2 mt-2"><i class="fa-solid fa-circle-info text-gray-400 text-xs mt-1 shrink-0"></i> <span class="text-gray-400 italic text-xs">Ideal cuando se encendió la luz de motor o hay anomalías electrónicas.</span></li>
                </ul>

                <div class="border-t border-gray-200 pt-5">
                    <span class="block font-oswald font-bold text-4xl text-primary mb-4">$15.000</span>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20Scanner%20Computarizado." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 w-full border-2 border-primary hover:bg-primary text-primary hover:text-white font-oswald font-bold uppercase px-4 py-3 text-sm transition-smooth">
                        <i class="fa-brands fa-whatsapp"></i> Agendar Scanner
                    </a>
                </div>
            </div>

            <!-- CARD 3: Check neumáticos y frenos -->
            <div class="flex flex-col p-8 bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-accent/5 rounded flex items-center justify-center shrink-0 border border-accent/10">
                        <i class="fa-solid fa-circle-dot text-accent text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-oswald font-bold text-xl text-dark uppercase leading-tight">Check Frenos y Neumáticos</h3>
                        <p class="text-gray-500 font-roboto text-xs">Revisión express de seguridad</p>
                    </div>
                </div>

                <ul class="space-y-3 mb-6 flex-grow font-roboto text-sm text-gray-600">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Estado de pastillas y discos de freno</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Desgaste y presión de neumáticos</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Revisión del líquido de frenos</li>
                    <li class="flex items-start gap-2 mt-2"><i class="fa-solid fa-circle-info text-gray-400 text-xs mt-1 shrink-0"></i> <span class="text-gray-400 italic text-xs">Express: 20–30 minutos. No requiere alzar el auto.</span></li>
                </ul>

                <div class="border-t border-gray-200 pt-5">
                    <span class="block font-oswald font-bold text-4xl text-accent mb-4">$10.000</span>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20un%20Check%20de%20Frenos%20y%20Neum%C3%A1ticos." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 w-full border-2 border-accent hover:bg-accent text-accent hover:text-dark font-oswald font-bold uppercase px-4 py-3 text-sm transition-smooth">
                        <i class="fa-brands fa-whatsapp"></i> Agendar Check
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. CAMBIOS DE ACEITE -->
<section id="aceite" class="py-24 bg-[#0d0d0d] scroll-mt-32 relative">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #D4A847 1px, transparent 1px); background-size: 30px 30px;"></div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10">

        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-12 gap-6">
            <div>
                <span class="inline-flex items-center gap-2 bg-accent/10 border border-accent/30 text-accent font-oswald text-xs tracking-widest uppercase px-4 py-2 mb-3">
                    <i class="fa-solid fa-oil-can"></i> Servicio Completo Disponible
                </span>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white uppercase">Aceite y <span class="text-accent">Carter</span></h2>
                <p class="text-gray-400 font-roboto mt-2">Servicio express con o sin insumos. Tenemos aceites y filtros disponibles en el local — te hacemos todo en un solo lugar.</p>
            </div>
            <a href="https://wa.me/56935206018?text=Hola!%20Necesito%20un%20cambio%20de%20aceite." target="_blank" rel="noopener"
               class="shrink-0 flex items-center gap-2 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-6 py-3 transition-smooth shadow-lg">
                <i class="fa-brands fa-whatsapp text-xl"></i> Agendar Cambio
            </a>
        </div>

        <!-- COMPARATIVA VISUAL -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 max-w-5xl mx-auto border border-gray-800 overflow-hidden shadow-2xl">

            <!-- TIER 1: KICK (Básico) -->
            <div class="group relative bg-[#111] border-r border-gray-800 p-8 flex flex-col hover:bg-[#181818] transition-colors duration-300">
                <div class="mb-6">
                    <span class="inline-block bg-gray-800 text-gray-400 text-[10px] font-bold font-oswald px-3 py-1 uppercase tracking-widest mb-4">Económico</span>
                    <div class="flex items-center gap-3 mb-2">
                        <i class="fa-solid fa-oil-can text-gray-500 text-2xl"></i>
                        <div>
                            <h3 class="font-oswald font-bold text-white text-xl uppercase leading-tight">Pack Básico</h3>
                            <p class="text-gray-500 font-roboto text-xs">Aceite Kick Mineral 10W-40</p>
                        </div>
                    </div>
                </div>
                <ul class="space-y-2 mb-6 flex-grow font-roboto text-sm text-gray-400">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-gray-600 text-xs mt-1 shrink-0"></i> Aceite mineral Kick 10W-40</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-gray-600 text-xs mt-1 shrink-0"></i> Filtro de aceite incluido</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-gray-600 text-xs mt-1 shrink-0"></i> Mano de obra incluida</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-xmark text-gray-700 text-xs mt-1 shrink-0"></i> <span class="text-gray-600">Sin aditivos protectores</span></li>
                    <li class="flex items-start gap-2 mt-2"><i class="fa-solid fa-circle-info text-gray-600 text-xs mt-1 shrink-0"></i> <span class="text-gray-500 italic text-xs">Recomendado: autos con más de 150.000 km o motores de trabajo.</span></li>
                </ul>
                <div class="border-t border-gray-800 pt-5">
                    <span class="block font-oswald font-bold text-3xl text-gray-300 mb-4">Desde $39.990</span>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20el%20Pack%20B%C3%A1sico%20de%20cambio%20de%20aceite%20Kick%2010W-40." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 w-full border border-gray-700 hover:border-accent text-gray-300 hover:text-white font-oswald font-bold uppercase px-4 py-3 text-sm transition-smooth">
                        <i class="fa-brands fa-whatsapp"></i> Agendar este pack
                    </a>
                </div>
            </div>

            <!-- TIER 2: SHELL (Mid — DESTACADO) -->
            <div class="group relative bg-[#0d0d0d] border-r border-gray-800 p-8 flex flex-col shadow-[0_0_40px_rgba(212,168,71,0.15)] z-10">
                <!-- Badge -->
                <div class="absolute -top-px left-0 right-0 h-1 bg-gradient-to-r from-accent via-yellow-300 to-accent"></div>
                <div class="absolute -top-1 left-1/2 -translate-x-1/2 bg-accent text-dark text-[10px] font-bold font-oswald px-4 py-1 uppercase tracking-widest whitespace-nowrap shadow-lg">
                    ⭐ Más Popular
                </div>
                <div class="mb-6 pt-4">
                    <span class="inline-block bg-accent/10 text-accent text-[10px] font-bold font-oswald px-3 py-1 uppercase tracking-widest mb-4 border border-accent/20">Semi-Sintético</span>
                    <div class="flex items-center gap-3 mb-2">
                        <i class="fa-solid fa-oil-can text-accent text-2xl"></i>
                        <div>
                            <h3 class="font-oswald font-bold text-white text-xl uppercase leading-tight">Pack Estándar</h3>
                            <p class="text-accent font-roboto text-xs font-bold">Shell Helix HX7 10W-40</p>
                        </div>
                    </div>
                </div>
                <ul class="space-y-2 mb-6 flex-grow font-roboto text-sm text-gray-300">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Aceite semisintético Shell HX7</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Filtro de aceite incluido</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Mano de obra incluida</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-accent text-xs mt-1 shrink-0"></i> Mejor protección térmica</li>
                    <li class="flex items-start gap-2 mt-2"><i class="fa-solid fa-circle-info text-accent/50 text-xs mt-1 shrink-0"></i> <span class="text-gray-400 italic text-xs">Recomendado: uso diario en ciudad. La mejor relación calidad/precio.</span></li>
                </ul>
                <div class="border-t border-gray-700 pt-5">
                    <span class="block font-oswald font-bold text-4xl text-accent mb-4">Desde $54.990</span>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20el%20Pack%20Est%C3%A1ndar%20Shell%20Helix%20HX7." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 w-full bg-accent hover:bg-yellow-500 text-dark font-oswald font-bold uppercase px-4 py-3 text-sm transition-smooth shadow-lg">
                        <i class="fa-brands fa-whatsapp"></i> Agendar este pack
                    </a>
                </div>
            </div>

            <!-- TIER 3: FORMULA 1 (Premium) -->
            <div class="group relative bg-[#111] p-8 flex flex-col hover:bg-[#181818] transition-colors duration-300">
                <div class="mb-6">
                    <span class="inline-block bg-primary/10 text-primary text-[10px] font-bold font-oswald px-3 py-1 uppercase tracking-widest mb-4 border border-primary/20">Full Sintético</span>
                    <div class="flex items-center gap-3 mb-2">
                        <i class="fa-solid fa-oil-can text-primary text-2xl"></i>
                        <div>
                            <h3 class="font-oswald font-bold text-white text-xl uppercase leading-tight">Pack Premium</h3>
                            <p class="text-primary font-roboto text-xs font-bold">Formula 1 Racing 5W-40</p>
                        </div>
                    </div>
                </div>
                <ul class="space-y-2 mb-6 flex-grow font-roboto text-sm text-gray-300">
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Aceite 100% sintético F1 5W-40</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Filtro aceite de alta eficiencia</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Mano de obra incluida</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-check text-primary text-xs mt-1 shrink-0"></i> Tecnología racing, máx. protección</li>
                    <li class="flex items-start gap-2 mt-2"><i class="fa-solid fa-circle-info text-primary/50 text-xs mt-1 shrink-0"></i> <span class="text-gray-400 italic text-xs">Recomendado: autos de alto rendimiento, turbo o si cuidas mucho tu motor.</span></li>
                </ul>
                <div class="border-t border-gray-800 pt-5">
                    <span class="block font-oswald font-bold text-3xl text-primary mb-4">Desde $74.990</span>
                    <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20el%20Pack%20Premium%20Formula%201%205W-40." target="_blank" rel="noopener"
                       class="flex items-center justify-center gap-2 w-full border border-primary/50 hover:border-primary hover:bg-primary/10 text-primary font-oswald font-bold uppercase px-4 py-3 text-sm transition-smooth">
                        <i class="fa-brands fa-whatsapp"></i> Agendar este pack
                    </a>
                </div>
            </div>

        </div>

        <p class="text-center text-gray-600 font-roboto text-xs mt-6 max-w-2xl mx-auto">
            * Precios referenciales. El valor exacto puede variar según la viscosidad requerida por tu motor y la cantidad de litros. Confirma con nosotros por WhatsApp.
        </p>

    </div>
</section>

<!-- 3. MECÁNICA Y REPUESTOS -->
<section id="mecanica" class="py-24 bg-[#0d0d0d] scroll-mt-32 relative">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#C41E3A 1px, transparent 1px), linear-gradient(90deg, #C41E3A 1px, transparent 1px); background-size: 40px 40px;"></div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-12 gap-6">
            <div>
                <span class="inline-flex items-center gap-2 bg-primary/10 border border-primary/30 text-primary font-oswald text-xs tracking-widest uppercase px-4 py-2 mb-3">
                    <i class="fa-solid fa-wrench"></i> Mano de Obra
                </span>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white uppercase">Mecánica y <span class="text-primary">Repuestos</span></h2>
                <p class="text-gray-400 font-roboto mt-2">Precios de mano de obra. El cliente puede traer sus propias piezas.</p>
            </div>
            <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20cotizar%20un%20servicio%20de%20mec%C3%A1nica." target="_blank" rel="noopener"
               class="shrink-0 flex items-center gap-2 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-6 py-3 transition-smooth shadow-lg">
                <i class="fa-brands fa-whatsapp text-xl"></i> Cotizar por WhatsApp
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            <?php
            $mecanica = [
                ['Pastillas de Freno', 'Cambio de pastillas delanteras o traseras.', 'Desde $20.000', 'fa-circle-dot'],
                ['Discos de Freno', 'Cambio de disco delantero o trasero. x1 o x2 unidades.', 'Desde $25.000 c/u', 'fa-compact-disc'],
                ['Balanceo de Ruedas', 'Balanceo de las 4 ruedas para eliminar vibraciones.', 'Desde $16.000 x4', 'fa-rotate'],
                ['Alineación 3D', 'Alineación computarizada en 3D. Dirige mejor, reduce desgaste.', 'Desde $25.000', 'fa-arrows-to-dot'],
                ['Bandejas', 'Cambio de bandeja por unidad (x1 o x2).', 'Desde $25.000 c/u', 'fa-car-side'],
                ['Axial', 'Instalación de axial de dirección. x1 $25.000 / x2 $50.000', 'Desde $25.000', 'fa-up-down-left-right'],
                ['Terminal Axial / Dirección', 'Cambio de terminal axial o de dirección.', 'Desde $15.000 c/u', 'fa-arrows-left-right'],
                ['Cazoleta', 'Reemplazo de cazoleta de suspensión. x1 $30.000 / x2 $60.000', 'Desde $30.000', 'fa-gear'],
                ['Amortiguadores', 'Cambio delantero o trasero. x1 $40.000 / x2 $80.000', 'Desde $40.000', 'fa-car-burst'],
                ['Balatas', 'Cambio de balatas del freno de mano (x2).', 'Desde $30.000', 'fa-hand-paper'],
                ['Purgación de Frenos', 'Purgado completo del sistema. Incluye líquido.', 'Desde $30.000', 'fa-droplet'],
                ['Bieletas', 'Cambio del par de bieletas estabilizadoras.', 'Desde $15.000 el par', 'fa-link'],
                ['Rodamiento Masa', 'Cambio de rodamiento en masa. x1 $30.000 / par $50.000', 'Desde $30.000', 'fa-circle-nodes'],
                ['Correa de Accesorios', 'Cambio de correa de accesorios del motor.', 'Desde $25.000', 'fa-infinity'],
                ['Embrague', 'Reemplazo de kit de embrague (solo mano de obra).', 'Desde $120.000', 'fa-gauge-high'],
            ];
            ?>

            <?php foreach($mecanica as $srv): ?>
            <div class="group bg-[#111] border border-gray-800 hover:border-primary transition-all duration-300 p-5 flex flex-col gap-3 hover:shadow-[0_0_20px_rgba(196,30,58,0.15)] relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-gray-700 group-hover:bg-primary transition-colors duration-300"></div>
                <div class="flex items-start gap-3 pl-3">
                    <i class="fa-solid <?= $srv[2] ?>" style="display:none"></i>
                    <i class="fa-solid <?= $srv[3] ?> text-primary text-2xl mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-oswald font-bold text-white text-lg group-hover:text-primary transition-colors duration-300 leading-tight"><?= $srv[0] ?></h3>
                        <p class="text-gray-500 font-roboto text-xs mt-1"><?= $srv[1] ?></p>
                    </div>
                </div>
                <div class="pl-3 border-t border-gray-800 pt-3 mt-auto">
                    <span class="font-oswald font-bold text-accent text-2xl"><?= $srv[2] ?></span>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- 4. INSTALACIONES Y ELECTRÓNICA -->
<section id="electronica" class="py-24 bg-dark scroll-mt-32 border-y-4 border-transparent relative" style="border-image: linear-gradient(to right, #C41E3A, #D4A847) 1;">
    <div class="container mx-auto px-4 lg:px-8 relative z-10">

        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-12 gap-6">
            <div>
                <span class="inline-flex items-center gap-2 bg-accent/10 border border-accent/30 text-accent font-oswald text-xs tracking-widest uppercase px-4 py-2 mb-3">
                    <i class="fa-solid fa-bolt"></i> Venta + Instalación
                </span>
                <h2 class="text-4xl md:text-5xl font-oswald font-bold text-white uppercase">Electrónica e <span class="text-accent">Instalaciones</span></h2>
                <p class="text-gray-400 font-roboto mt-2">Precio del producto instalado. Incluye mano de obra cuando se indica.</p>
            </div>
            <a href="https://wa.me/56935206018?text=Hola!%20Quiero%20cotizar%20una%20instalaci%C3%B3n%20el%C3%A9ctrica." target="_blank" rel="noopener"
               class="shrink-0 flex items-center gap-2 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-6 py-3 transition-smooth shadow-lg">
                <i class="fa-brands fa-whatsapp text-xl"></i> Cotizar por WhatsApp
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php
            $electronica = [
                ['Alarma', 'Venta e instalación de alarma vehicular.', 'Solo alarma: Desde $30.000', '$70.000 instalada', 'fa-shield-halved', 'primary'],
                ['Cierre Centralizado', 'Sistema para 2 puertas, instalado incluye mano de obra.', 'Solo sistema: Desde $30.000', '$50.000 instalado', 'fa-lock', 'primary'],
                ['Corta Corriente', 'Dispositivo antirrobo que corta el circuito del motor.', 'Instalado', 'Desde $50.000', 'fa-power-off', 'accent'],
                ['Radio con Pantalla', 'Instalación de radio 2DIN o pantalla táctil Android. Incluye cableado y configuración.', 'Solo instalación: Desde $20.000', 'Desde $80.000 instalado', 'fa-display', 'accent'],
                ['Instalación de Parlantes', 'Instalación de parlantes coaxiales o componentes delanteros/traseros.', 'Solo ins. Desde $15.000', 'Desde $15.000', 'fa-volume-high', 'accent'],
                ['Instalación de Subwoofer', 'Instalación de subwoofer y caja. Simple o con amplificador.', 'Solo ins. Desde $20.000', 'Desde $20.000', 'fa-music', 'primary'],
                ['Sistema de Audio Completo', 'Instalación integral: radio + parlantes + subwoofer + amplificador.', 'Cotiza tu proyecto', 'A convenir', 'fa-tower-broadcast', 'accent'],
                ['Sensor de Retroceso', 'Sensores ultrasónicos traseros con alerta sonora.', 'Incluye instalación', 'Desde $60.000', 'fa-satellite-dish', 'accent'],
                ['Cámara de Retroceso', 'Cámara trasera para mayor seguridad al retroceder.', 'Instalada', 'Desde $30.000', 'fa-video', 'primary'],
            ];
            ?>

            <?php foreach($electronica as $e): ?>
            <div class="group relative bg-[#111] border border-gray-800 hover:border-<?= $e[5] ?> transition-all duration-300 p-6 flex flex-col overflow-hidden hover:shadow-[0_0_25px_rgba(212,168,71,0.1)]">
                <!-- Top color stripe -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gray-800 group-hover:bg-<?= $e[5] ?> transition-colors duration-300"></div>
                <div class="mt-2">
                    <div class="w-12 h-12 rounded bg-gray-900 group-hover:bg-<?= $e[5] ?>/10 flex items-center justify-center mb-4 transition-colors duration-300">
                        <i class="fa-solid <?= $e[4] ?> text-<?= $e[5] ?> text-2xl"></i>
                    </div>
                    <h3 class="font-oswald font-bold text-white text-2xl mb-2 uppercase group-hover:text-<?= $e[5] ?> transition-colors duration-300"><?= $e[0] ?></h3>
                    <p class="text-gray-400 font-roboto text-sm mb-1"><?= $e[1] ?></p>
                    <p class="text-gray-600 font-roboto text-xs uppercase tracking-widest"><?= $e[2] ?></p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-800">
                    <span class="font-oswald font-bold text-<?= $e[5] ?> text-3xl"><?= $e[3] ?></span>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- CÓMO LLEGAR -->
<section class="py-20 bg-white text-dark">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-10">
            <p class="text-primary font-oswald tracking-[0.2em] uppercase font-bold text-sm mb-1">Visítanos</p>
            <h2 class="text-3xl md:text-4xl font-oswald font-bold uppercase">¿Cómo <span class="text-primary">Llegar?</span></h2>
        </div>

        <div class="flex flex-col lg:flex-row gap-0 overflow-hidden shadow-2xl border border-gray-200">

            <!-- Info lateral -->
            <div class="bg-dark text-white p-8 lg:w-[38%] flex flex-col justify-between gap-6">

                <div class="space-y-6">
                    <!-- Dirección -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded flex items-center justify-center shrink-0 mt-1">
                            <i class="fa-solid fa-location-dot text-primary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-oswald font-bold text-sm uppercase tracking-widest text-gray-400 mb-1">Dirección</h3>
                            <p class="font-oswald text-lg font-bold text-white">Santa Marta 0538</p>
                            <p class="text-gray-300 font-roboto text-sm">San Bernardo, Región Metropolitana</p>
                            <a href="https://maps.google.com/?q=Santa+Marta+0538+San+Bernardo" target="_blank" rel="noopener"
                               class="inline-flex items-center gap-1 text-accent text-xs font-bold font-oswald uppercase tracking-wider mt-2 hover:text-white transition-colors">
                                <i class="fa-solid fa-map-location-dot text-xs"></i> Abrir en Google Maps
                            </a>
                        </div>
                    </div>

                    <!-- Horarios -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-accent/10 rounded flex items-center justify-center shrink-0 mt-1">
                            <i class="fa-regular fa-clock text-accent text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-oswald font-bold text-sm uppercase tracking-widest text-gray-400 mb-2">Horario de Atención</h3>
                            <div class="space-y-1 font-roboto text-sm">
                                <div class="flex justify-between gap-6"><span class="text-gray-300">Lunes – Sábado</span><span class="text-white font-bold">10:00 – 19:00</span></div>
                                <div class="flex justify-between gap-6"><span class="text-gray-400 italic text-xs">Colación</span><span class="text-accent text-xs font-bold">14:00 – 15:00</span></div>
                                <div class="flex justify-between gap-6"><span class="text-gray-300">Domingo</span><span class="text-primary font-bold">Cerrado</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded flex items-center justify-center shrink-0 mt-1">
                            <i class="fa-solid fa-phone text-primary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-oswald font-bold text-sm uppercase tracking-widest text-gray-400 mb-1">Teléfono</h3>
                            <a href="tel:+56935206018" class="font-oswald text-lg font-bold text-white hover:text-accent transition-colors">+56 9 3520 6018</a>
                        </div>
                    </div>
                </div>

                <!-- CTA confirmar visita -->
                <a href="https://wa.me/56935206018?text=Hola%20Tokyo%20Tunning!%20Quiero%20confirmar%20una%20visita%20al%20taller." target="_blank" rel="noopener"
                   class="flex items-center justify-center gap-2 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-6 py-4 text-center transition-smooth shadow-lg w-full">
                    <i class="fa-brands fa-whatsapp text-2xl"></i> Confirmar Visita por WhatsApp
                </a>
            </div>

            <!-- Mapa -->
            <div class="lg:w-[62%] h-72 lg:h-auto min-h-[320px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.704140307992!2d-70.69209870688826!3d-33.587030204584366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d966a86eb8d1%3A0x669cffcf7322d975!2sAv.%20Sta.%20Marta%200538%2C%20San%20Bernardo%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1774323176397!5m2!1ses-419!2scl"
                    width="100%" height="100%" style="border:0; display:block;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    title="Ubicación Tokyo Tunning — Santa Marta 0538, San Bernardo">
                </iframe>
            </div>

        </div>
    </div>
</section>

<!-- 6. CTA FINAL con urgencia -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=1920" alt="Taller" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-primary/60 to-black"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <p class="text-accent font-oswald tracking-[0.3em] uppercase mb-3 font-bold text-sm">¿Ya sabes lo que necesitas?</p>
        <h2 class="text-4xl md:text-6xl font-oswald font-bold text-white mb-4 uppercase drop-shadow-lg">
            Agenda ahora, sin esperas
        </h2>
        <p class="text-xl text-gray-300 font-roboto max-w-2xl mx-auto mb-10">
            Escríbenos directamente o pasa al taller. Santa Marta 0538, San Bernardo. Lun-Sáb 10:00-19:00 hrs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/56935206018?text=Hola%20Tokyo%20Tunning!%20Quiero%20agendar%20una%20visita%20al%20taller." target="_blank" rel="noopener"
               class="flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#20c05c] text-white font-oswald font-bold uppercase px-10 py-4 text-xl shadow-2xl transition-smooth hover:scale-105">
                <i class="fa-brands fa-whatsapp text-2xl"></i> AGENDAR VÍA WHATSAPP
            </a>
            <a href="catalogo.php" class="btn-outline py-4 px-10 text-xl shadow-2xl">
                Ver Catálogo <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
