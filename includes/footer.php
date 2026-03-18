</main>

<footer class="bg-[#050505] text-gray-400 pt-16 pb-8 border-t-[3px] border-transparent" style="border-image: linear-gradient(to right, #C41E3A, #D4A847) 1;">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            <!-- Col 1: Logo & Desc -->
            <div>
                <a href="index.php" class="inline-block mb-6 bg-white/5 hover:bg-white/10 transition-colors duration-300 rounded-lg px-4 py-2 border border-white/10 shadow-sm backdrop-blur-sm">
                    <img src="assets/img/TokyoTunning_LogoSinfondo.png" alt="Tokyo Tunning Logo" class="h-16 md:h-20 w-auto object-contain">
                </a>
                <p class="mb-6 leading-relaxed">
                    Taller especializado en tuning automotriz premium. Elevamos el rendimiento y la estética de tu vehículo al siguiente nivel con piezas de alta competencia y mano de obra experta.
                </p>
            </div>
            
            <!-- Col 2: Navigation -->
            <div>
                <h3 class="text-white font-oswald text-xl tracking-wider mb-6 font-bold uppercase relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-12 after:h-1 after:bg-primary">Navegación</h3>
                <ul class="space-y-3 font-roboto">
                    <li><a href="index.php" class="hover:text-accent transition-smooth flex items-center"><i class="fa-solid fa-chevron-right text-xs mr-2 text-primary"></i> Inicio</a></li>
                    <li><a href="servicios.php" class="hover:text-accent transition-smooth flex items-center"><i class="fa-solid fa-chevron-right text-xs mr-2 text-primary"></i> Servicios</a></li>
                    <li><a href="catalogo.php" class="hover:text-accent transition-smooth flex items-center"><i class="fa-solid fa-chevron-right text-xs mr-2 text-primary"></i> Catálogo</a></li>
                    <li><a href="contacto.php" class="hover:text-accent transition-smooth flex items-center"><i class="fa-solid fa-chevron-right text-xs mr-2 text-primary"></i> Contacto</a></li>
                </ul>
            </div>
            
            <!-- Col 3: Horarios -->
            <div>
                <h3 class="text-white font-oswald text-xl tracking-wider mb-6 font-bold uppercase relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-12 after:h-1 after:bg-primary">Horarios</h3>
                <ul class="space-y-3 font-roboto">
                    <li class="flex justify-between border-b border-gray-800 pb-2">
                        <span>Lunes - Viernes</span>
                        <span class="text-white font-medium">10:00 - 19:00</span>
                    </li>
                    <li class="flex justify-between border-b border-gray-800 pb-2">
                        <span>Sábado</span>
                        <span class="text-white font-medium">10:00 - 14:00</span>
                    </li>
                    <li class="flex justify-between pb-2">
                        <span>Domingo</span>
                        <span class="text-primary font-medium">Cerrado</span>
                    </li>
                </ul>
            </div>
            
            <!-- Col 4: Contacto -->
            <div>
                <h3 class="text-white font-oswald text-xl tracking-wider mb-6 font-bold uppercase relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-12 after:h-1 after:bg-primary">Contacto</h3>
                <ul class="space-y-4 font-roboto mb-6">
                    <li class="flex items-start">
                        <i class="fa-solid fa-location-dot mt-1 mr-3 text-accent text-lg"></i>
                        <span>Av. Principal 1234, Ciudad<br>Sector Automotriz</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-phone mr-3 text-accent text-lg"></i>
                        <a href="tel:+1234567890" class="hover:text-white transition-smooth">+1 (234) 567-890</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fa-solid fa-envelope mr-3 text-accent text-lg"></i>
                        <a href="mailto:info@tokyotunning.com" class="hover:text-white transition-smooth">info@tokyotunning.com</a>
                    </li>
                </ul>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-gray-900 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-smooth" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-900 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-smooth" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-900 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-smooth" aria-label="TikTok">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
            
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-8 text-center font-roboto text-sm flex flex-col md:flex-row justify-between items-center">
            <p>&copy; <?= date('Y') ?> Tokyo Tunning. Todos los derechos reservados.</p>
            <div class="mt-4 md:mt-0 space-x-4">
                <a href="#" class="hover:text-accent transition-smooth">Políticas de Privacidad</a>
                <a href="#" class="hover:text-accent transition-smooth">Términos de Servicio</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
