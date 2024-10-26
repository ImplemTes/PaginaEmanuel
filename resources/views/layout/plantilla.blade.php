<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevaera</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<style>
    /* Efecto de opacidad en hover */
    .social-icon:hover {
        opacity: 0.7;
    }

    .social-icon {
        display: inline-block;
        text-decoration: none;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .social-icon:hover {
        background-color: rgba(59, 4, 255, 0.1);
        /* Cambio de color al pasar el mouse */
    }
</style>

<body class="bg-gray-100">

    <!-- Encabezado -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">

                <!-- Logo -->
                <div class="flex items-center">
                    <img src="/img/logo.png" alt="Grupo Emanuel" class="h-16 ">
                </div>

                <!-- Menú para pantallas grandes -->
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Inicio</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Nosotros</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Productos</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Servicios</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">¿Por qué elegirnos?</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Clientes</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Blog</a>
                    <a href="#" class="text-gray-700 hover:text-yellow-500">Contacto</a>
                </nav>

                <!-- Botón desplegable para pantallas pequeñas -->
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-gray-700 focus:outline-none">
                        <!-- Icono del menú (hamburguesa) -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú lateral desplegable para pantallas pequeñas (lado derecho) -->
        <div id="mobile-menu"
            class="fixed top-0 right-0 w-64 h-full bg-gray-800 text-white transform translate-x-full transition-transform duration-300 ease-in-out">
            <div class="flex justify-between items-center p-4">
                <span class="text-lg font-semibold">Menú</span>
                <button id="close-menu-button" class="text-white focus:outline-none">
                    <!-- Icono de cerrar -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="mt-4">
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Inicio</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Nosotros</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Productos</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Servicios</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">¿Por qué elegirnos?</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Clientes</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Blog</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Sección Principal -->
    <section class="relative">
        <div class="h-96 bg-cover bg-center" style="background-image: url('fondo-madera.jpg');">
            <!-- Carrusel -->
            <div class="relative mt-4">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-300" id="carousel">
                        <div class="flex-none w-full"><img src="/img/carrusel/imagen1.jpg" alt="Imagen 1"
                                class="w-full h-auto"></div>
                        <div class="flex-none w-full"><img src="/img/carrusel/imagen2.jpg" alt="Imagen 2"
                                class="w-full h-auto"></div>
                        <div class="flex-none w-full"><img src="/img/carrusel/imagen3.jpg" alt="Imagen 3"
                                class="w-full h-auto"></div>
                        <div class="flex-none w-full"><img src="/img/carrusel/imagen4.jpg" alt="Imagen 4"
                                class="w-full h-auto"></div>
                        <div class="flex-none w-full"><img src="/img/carrusel/imagen5.jpg" alt="Imagen 5"
                                class="w-full h-auto"></div>
                        <div class="flex-none w-full"><img src="/img/carrusel/imagen6.jpg" alt="Imagen 6"
                                class="w-full h-auto"></div>
                    </div>
                </div>
                <button id="prev"
                    class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded shadow">❮</button>
                <button id="next"
                    class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded shadow">❯</button>
            </div>
        </div>
    </section>

    <script>
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const totalImages = 6; // Total de imágenes
        let currentIndex = 0;

        const updateCarousel = () => {
            // Cada imagen ocupa el 100% del ancho total
            const width = 100; // Cambia el ancho a 100%
            carousel.style.transform = `translateX(-${currentIndex * width}%)`;
        };

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalImages; // Rollover al inicio
            updateCarousel();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Rollover al final
            updateCarousel();
        });

        // Cambiar automáticamente cada 3 segundos
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalImages; // Avanza al siguiente
            updateCarousel();
        }, 4000); // Cambia cada 3000 milisegundos (3 segundos)
    </script>



    <!-- Footer -->
    <footer class="bg-gray-200 py-10">
        <div class="container mx-auto px-4">

            <!-- Contenedor Principal -->
            <div class="flex flex-wrap md:flex-nowrap justify-between items-start">

                <!-- Menú de Navegación -->
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h2 class="text-gray-700 font-semibold mb-2">Menú</h2>
                    <ul class="text-gray-600 space-y-2">
                        <li><a href="#" class="hover:text-red-600">Inicio</a></li>
                        <li><a href="#" class="hover:text-red-600">Conócenos</a></li>
                        <li><a href="#" class="hover:text-red-600">Campus Emanuel</a></li>
                        <li><a href="#" class="hover:text-red-600">Portal PQS</a></li>
                        <li><a href="#" class="hover:text-red-600">Incubadora y Premio PQS</a></li>
                        <li><a href="#" class="hover:text-red-600">Noticias</a></li>
                        <li><a href="#" class="hover:text-red-600">Contactos</a></li>
                    </ul>
                </div>

                <!-- Información sobre Fundación -->
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h2 class="text-gray-700 font-semibold mb-2">Fundación Emanuel</h2>
                    <p class="text-gray-600 text-sm">
                        Brindamos herramientas que ayudan a los peruanos a fortalecer y desarrollar sus capacidades,
                        incentivando la generación de ideas o proyectos sostenibles y escalables, que aporten al
                        desarrollo de nuestro país.
                    </p>
                </div>

                <!-- Información de Contacto -->
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h2 class="text-gray-700 font-semibold mb-2">Contacto</h2>
                    <p class="text-gray-600 text-sm flex items-center">
                        <span class="material-icons text-red-600">phone</span>&nbsp; Lima (511) 215 4132
                    </p>
                </div>

                <!-- Redes Sociales -->
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h2 class="text-gray-700 font-semibold mb-2">Síguenos</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="social-icon text-red-600 text-center">
                            <i class="fab fa-facebook text-2xl"></i>
                            <p class="text-gray-600">Facebook</p>
                        </a>
                        <a href="#" class="social-icon text-red-600 text-center">
                            <i class="fab fa-twitter text-2xl"></i>
                            <p class="text-gray-600">Twitter</p>
                        </a>
                        <a href="#" class="social-icon text-red-600 text-center">
                            <i class="fab fa-tiktok text-2xl"></i>
                            <p class="text-gray-600">TikTok</p>
                        </a>
                        <a href="#" class="social-icon text-red-600 text-center">
                            <i class="fab fa-instagram text-2xl"></i>
                            <p class="text-gray-600">Instagram</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logo y Derechos Reservados -->
            <div class="flex flex-col items-center mt-10">
                <img src="/img/iso-logo2.png" alt="Logo R" width="56" height="64" class="mb-4">
                <p class="text-gray-600 text-sm">2017 <span class="font-semibold">Fundación Romero</span>. Todos los
                    derechos reservados</p>
                <a href="#" class="text-red-600 text-sm mt-2">Políticas de privacidad y protección de datos</a>
            </div>

        </div>
    </footer>


    <!-- TailwindCSS y FontAwesome Iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Script para controlar el menú lateral -->
    <script>
        const menuButton = document.getElementById('menu-button');
        const closeButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        // Función para mostrar el menú lateral
        function openMenu() {
            mobileMenu.classList.remove('translate-x-full');
            document.addEventListener('click', closeOnClickOutside);
        }

        // Función para ocultar el menú lateral
        function closeMenu() {
            mobileMenu.classList.add('translate-x-full');
            document.removeEventListener('click', closeOnClickOutside);
        }

        // Mostrar el menú al hacer clic en el botón de menú
        menuButton.addEventListener('click', (event) => {
            event.stopPropagation(); // Evitar cierre inmediato
            openMenu();
        });

        // Ocultar el menú al hacer clic en el botón de cerrar
        closeButton.addEventListener('click', (event) => {
            event.stopPropagation(); // Evitar cierre inmediato
            closeMenu();
        });

        // Función para cerrar el menú al hacer clic fuera de él
        function closeOnClickOutside(event) {
            if (!mobileMenu.contains(event.target) && event.target !== menuButton) {
                closeMenu();
            }
        }
    </script>

</body>

</html>
