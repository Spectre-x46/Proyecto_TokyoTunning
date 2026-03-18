<?php
$page_title = $page_title ?? 'Tokyo Tunning | Tuning Automotriz Premium';
$page_description = $page_description ?? 'Taller especializado en tuning automotriz premium, con venta directa de productos y servicios.';
$current_page = $current_page ?? 'inicio';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C41E3A',
                        accent: '#D4A847',
                        dark: '#0A0A0A',
                    },
                    fontFamily: {
                        oswald: ['Oswald', 'sans-serif'],
                        roboto: ['Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom Styles based on guidelines */
        body { font-family: 'Roboto', sans-serif; background-color: #0A0A0A; color: #f9fafb; }
        h1, h2, h3, h4, h5, h6, .font-oswald { font-family: 'Oswald', sans-serif; }
        .gradient-text { background: linear-gradient(to right, #C41E3A, #D4A847); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .btn-primary { background: linear-gradient(to right, #C41E3A, #9b172d); color: white; transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 0; display: inline-block; text-align: center; font-weight: bold; text-transform: uppercase; font-family: 'Oswald', sans-serif; }
        .btn-primary:hover { transform: scale(1.05); box-shadow: 0 4px 15px rgba(196, 30, 58, 0.4); }
        .btn-outline { border: 2px solid #D4A847; color: #D4A847; transition: all 0.3s ease; border-radius: 0; display: inline-block; text-align: center; font-weight: bold; text-transform: uppercase; font-family: 'Oswald', sans-serif; }
        .btn-outline:hover { background-color: #D4A847; color: #0A0A0A; transform: scale(1.05); }
        .hover-grayscale { filter: grayscale(100%); transition: filter 0.5s ease; }
        .hover-grayscale:hover { filter: grayscale(0%); }
        /* CSS Only Checkbox Hack for Mobile Menu */
        #mobile-menu-toggle:checked ~ #mobile-menu { display: block; }
        #mobile-menu { display: none; }
        /* Smooth transitions */
        .transition-smooth { transition: all 0.3s ease-in-out; }
    </style>
</head>
<body class="bg-dark text-gray-100 flex flex-col min-h-screen">

<!-- Header -->
<header class="fixed w-full top-0 z-50 bg-black/80 backdrop-blur-md border-b-[3px] border-transparent" style="border-image: linear-gradient(to right, #C41E3A, #D4A847) 1;">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="index.php" class="flex items-center bg-white/5 hover:bg-white/10 transition-colors duration-300 rounded-lg px-3 py-1 border border-white/10 shadow-sm backdrop-blur-sm">
                <img src="assets/img/TokyoTunning_LogoSinfondo.png" alt="Tokyo Tunning Logo" class="h-12 md:h-16 w-auto object-contain">
            </a>
            
            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-8 items-center font-oswald text-lg tracking-wide">
                <a href="index.php" class="transition-smooth <?= $current_page == 'inicio' ? 'text-accent' : 'text-gray-300 hover:text-accent' ?>">INICIO</a>
                <a href="servicios.php" class="transition-smooth <?= $current_page == 'servicios' ? 'text-accent' : 'text-gray-300 hover:text-accent' ?>">SERVICIOS</a>
                <a href="catalogo.php" class="transition-smooth <?= $current_page == 'catalogo' ? 'text-accent' : 'text-gray-300 hover:text-accent' ?>">CATÁLOGO</a>
                <a href="contacto.php" class="transition-smooth <?= $current_page == 'contacto' ? 'text-accent' : 'text-gray-300 hover:text-accent' ?>">CONTACTO</a>
                <a href="contacto.php" class="btn-primary px-6 py-2 ml-4">AGENDAR</a>
            </nav>
            
            <!-- Mobile Menu Button (CSS Only) -->
            <div class="md:hidden flex items-center">
                <label for="mobile-menu-toggle" class="cursor-pointer text-gray-300 hover:text-accent transition-smooth">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </label>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <input type="checkbox" id="mobile-menu-toggle" class="hidden">
    <div id="mobile-menu" class="md:hidden bg-dark border-t border-gray-800 absolute w-full left-0">
        <nav class="flex flex-col px-4 pt-2 pb-6 space-y-2 font-oswald text-xl">
            <a href="index.php" class="block py-3 px-4 <?= $current_page == 'inicio' ? 'text-accent border-l-4 border-accent bg-gray-900' : 'text-gray-300 hover:bg-gray-900 border-l-4 border-transparent hover:border-accent' ?>">INICIO</a>
            <a href="servicios.php" class="block py-3 px-4 <?= $current_page == 'servicios' ? 'text-accent border-l-4 border-accent bg-gray-900' : 'text-gray-300 hover:bg-gray-900 border-l-4 border-transparent hover:border-accent' ?>">SERVICIOS</a>
            <a href="catalogo.php" class="block py-3 px-4 <?= $current_page == 'catalogo' ? 'text-accent border-l-4 border-accent bg-gray-900' : 'text-gray-300 hover:bg-gray-900 border-l-4 border-transparent hover:border-accent' ?>">CATÁLOGO</a>
            <a href="contacto.php" class="block py-3 px-4 <?= $current_page == 'contacto' ? 'text-accent border-l-4 border-accent bg-gray-900' : 'text-gray-300 hover:bg-gray-900 border-l-4 border-transparent hover:border-accent' ?>">CONTACTO</a>
            <div class="pt-4 px-4">
                <a href="contacto.php" class="btn-primary w-full py-3 block">AGENDAR CITA</a>
            </div>
        </nav>
    </div>
</header>
<main class="flex-grow pt-20">
