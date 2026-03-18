# Tokyo Tunning - Web Minimalista Agresiva

Sitio web completo para taller especializado en tuning automotriz premium.

## Stack Tecnológico

- HTML5 Semántico
- PHP (para includes y variables básicas)
- Tailwind CSS vía CDN
- Font Awesome 6 vía CDN
- Google Fonts (Oswald, Roboto)
- CSS Puro (sin JavaScript, interacciones mobile resueltas con CSS hack)

## Estructura de Archivos

```
├── index.php         (Página principal, hero interactivo y carrusel de categorías dinámico)
├── servicios.php     (Detalle de los servicios ofrecidos)
├── catalogo.php      (Catálogo dinámico de productos y filtros)
├── contacto.php      (Formulario de contacto e información de ubicación)
├── BD_Worpress/      (Exportaciones de base de datos WooCommerce en CSV)
├── includes/
│   ├── header.php    (Cabecera común)
│   └── footer.php    (Pie de página común)
├── assets/
│   └── img/          (Imágenes estáticas del sitio)
├── .htaccess         (Reglas de reescritura de URLs limpias)
├── .gitignore        (Reglas de exclusión para control de versiones)
└── README.md         (Documentación)
```

## Características Especiales Implementadas

1. **Catálogo Dinámico desde CSV:** Las páginas `catalogo.php` e `index.php` leen y extraen automáticamente los productos y sus precios desde el archivo local exportado de WooCommerce (`BD_Worpress/wc-product-export-*.csv`), extrayendo siempre la sub-categoría terminal más específica para una óptima organización.
2. **Filtros Laterales SIN Javascript:** La barra literal del catálogo utiliza etiquetas HTML `<a>` diseñadas para verse como botones de selección ("radio buttons"). Esto permite al usuario filtrar los productos o reordenarlos por precio al instante con simples recargas GET de PHP. Totalmente sin JS apoyado de una capa CSS con *scroll* dinámico (`max-height`).
3. **Carrusel Táctil CSS-Only:** La galería principal de fotos interactiva y el Carrusel de Categorías Inferior aprovechan las propiedades modernas de CSS (`scroll-snap-type`) y radios ocultos para ofrecer interactividad fluida, deslizable en móviles, e independiente del rendimiento del navegador.

## Instrucciones de Instalación/Deploy

1. Sube todos los archivos a un servidor web con soporte PHP (Apache recomendado).
2. Asegúrate de que el módulo `mod_rewrite` de Apache esté activado para que el archivo `.htaccess` funcione (permite usar URLs limpias como `/servicios` en vez de `/servicios.php`).
3. La carpeta de imágenes `assets/img/` debe contener las imágenes referenciadas en el código.

## Notas sobre Personalización

- Los colores principales están configurados en el objeto `tailwind.config` dentro de `includes/header.php`.
- La clase `.hover-grayscale` es fundamental para el efecto visual requerido en las imágenes.
- El menú móvil se construyó usando el "*Checkbox Hack*" de CSS puramente, sin requerir JS.
