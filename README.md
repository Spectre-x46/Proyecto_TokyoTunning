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
├── index.php                 (Página principal, hero interactivo y carrusel de categorías dinámico)
├── servicios.php             (Detalle de los servicios ofrecidos)
├── catalogo.php              (Catálogo dinámico de productos y filtros)
├── contacto.php              (Formulario de contacto e información de ubicación)
├── politicas.php             (Página de políticas)
├── terminos.php              (Página de términos y condiciones)
├── audit.php                 (Script de auditoría para desarrollo)
├── test_cats.php             (Script de prueba de categorías)
├── BD_Worpress/              (Exportaciones de base de datos WooCommerce en CSV)
├── includes/
│   ├── header.php            (Cabecera común)
│   └── footer.php            (Pie de página común)
├── assets/
│   └── img/                  (Imágenes estáticas del sitio)
├── .htaccess                 (Reglas de reescritura de URLs limpias)
├── .gitignore                (Reglas de exclusión para control de versiones)
└── README.md                 (Documentación)
```

## Scripts y Herramientas de Desarrollo

- `analyze_products.py`: Script en Python para analizar y procesar datos de productos desde CSV de WooCommerce.
- `reorder.py`: Script para reordenar y optimizar listas de productos.
- `analisis_output.txt` / `analisis_output_utf8.txt`: Archivos de salida generados por scripts de análisis.
- `tags.txt`: Lista de etiquetas extraídas para categorización.

## Características Especiales Implementadas

1. **Catálogo Dinámico desde CSV:** Las páginas `catalogo.php` e `index.php` leen y extraen automáticamente los productos y sus precios desde el archivo local exportado de WooCommerce (`BD_Worpress/wc-product-export-*.csv`), extrayendo siempre la sub-categoría terminal más específica para una óptima organización.
2. **Filtros Laterales SIN Javascript:** La barra literal del catálogo utiliza etiquetas HTML `<a>` diseñadas para verse como botones de selección ("radio buttons"). Esto permite al usuario filtrar los productos o reordenarlos por precio al instante con simples recargas GET de PHP. Totalmente sin JS apoyado de una capa CSS con *scroll* dinámico (`max-height`).
3. **Carrusel Táctil CSS-Only:** La galería principal de fotos interactiva y el Carrusel de Categorías Inferior aprovechan las propiedades modernas de CSS (`scroll-snap-type`) y radios ocultos para ofrecer interactividad fluida, deslizable en móviles, e independiente del rendimiento del navegador.

## Control de Versiones

- Utiliza Git para control de versiones.
- El archivo `.gitignore` excluye archivos confidenciales como entornos locales archivos temporales de desarrollo y configuraciones específicas del sistema operativo.
- Para desarrollo local, clona el repositorio y configura un entorno PHP compatible.

## Instrucciones de Instalación/Deploy

1. Sube todos los archivos a un servidor web con soporte PHP (Apache recomendado).
2. Asegúrate de que el módulo `mod_rewrite` de Apache esté activado para que el archivo `.htaccess` funcione (permite usar URLs limpias como `/servicios` en vez de `/servicios.php`).
3. La carpeta de imágenes `assets/img/` debe contener las imágenes referenciadas en el código.
4. Para desarrollo local, instala PHP y un servidor web; opcionalmente, usa herramientas como XAMPP incluidas en el proyecto.

## Descripción de Componentes y Páginas

### Componentes Comunes
- **Header (`includes/header.php`)**: Contiene la navegación principal con logo, menú de enlaces y menú móvil responsive implementado con "Checkbox Hack" de CSS puro (sin JavaScript). Incluye configuración de Tailwind CSS y fuentes.
- **Footer (`includes/footer.php`)**: Pie de página con información de contacto, enlaces a redes sociales, políticas y términos, y copyright.

### Páginas Principales
- **Index (`index.php`)**: Página principal con hero section agresiva, carrusel táctil de categorías dinámicas extraídas del CSV, y productos destacados. Incluye llamada a acción para contacto.
- **Servicios (`servicios.php`)**: Detalla los servicios ofrecidos por el taller, con descripciones, imágenes y estructura organizada por categorías.
- **Catálogo (`catalogo.php`)**: Catálogo interactivo de productos con grid responsive, filtros laterales sin JavaScript (usando enlaces GET), y opciones de ordenamiento por precio.
- **Contacto (`contacto.php`)**: Formulario de contacto con validación básica, información de ubicación, mapa embebido y detalles de horario.
- **Políticas (`politicas.php`)** y **Términos (`terminos.php`)**: Páginas estáticas con contenido legal y de privacidad.

## Notas sobre Personalización

- Los colores principales están configurados en el objeto `tailwind.config` dentro de `includes/header.php`.
- La clase `.hover-grayscale` es fundamental para el efecto visual requerido en las imágenes.
- El menú móvil se construyó usando el "*Checkbox Hack*" de CSS puramente, sin requerir JS.
