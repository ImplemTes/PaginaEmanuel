<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrupoEmanuel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    .social-icon:hover {
        opacity: 0.7;
        background-color: #F0F0F0;
    }

    .social-icon {
        display: inline-block;
        text-decoration: none;
        padding: 5px;
        border-radius: 15px;
        transition: background-color 0.3s;
    }

    .top-border {
        border-top: 6px solid #FFD700;
        border-bottom: 2px solid #FFD700;
        border-left: 1px solid #FFD700;
        border-right: 1px solid #FFD700;
    }


    .logo img {
        max-height: 4rem;
        /* Altura máxima del logo */
        /* Ancho máximo del logo */
        object-fit: contain;

    }

    .carousel-container {
        max-height: 450px;
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .nav-item {
        padding: 2px 15px;
        margin-top: 10px;
        margin-bottom: 24px;
        border: 2px solid transparent;
        border-radius: 8px;
        transition: all 0.3s ease;
        color: #4a5568;
        text-align: center;
    }

    .nav-item:hover,
    .nav-item.active {
        background-color: #FFD700;
        color: white;
        border: 2px solid #FFD700;
        transition: all 0.3s ease;
        //MEJORA DE LETRA
        letter-spacing: 1px;
        letter-spacing: 0.5px;
        font-weight: bold;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        border-radius: 8px;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        z-index: 10;
    }

    .submenu a {
        display: block;
        padding: 10px 15px;
        color: #4a5568;
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 1px solid #ddd;
    }

    .submenu a:last-child {
        border-bottom: none;
    }

    .submenu a:hover {
        background-color: #FFD700;
        color: white;
    }

    .nav-item:hover .submenu {
        display: block;
    }
</style>

<body class="bg-gray-200">

    <!-- Encabezado -->
    <header class="bg-white shadow-md fixed top-0 w-full z-20 top-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center logo">
                <img src="/img/logo.png" alt="Grupo Emanuel" class="h-12">
            </div>

            <!-- Menú para pantallas grandes -->
            <nav class="hidden md:flex space-x-4 items-center">
                <a href="#" class="nav-item active">Inicio</a>
                <div class="relative nav-item">
                    <a href="#" class="nav-item">Nosotros</a>
                    <div class="submenu">
                        <a href="#">Nosotros</a>
                        <a href="#">Vision y Mision</a>
                    </div>
                </div>
                <a href="#" class="nav-item">Servicios</a>
                <a href="#" class="nav-item">Blog</a>
                <a href="#" class="nav-item">Contacto</a>
            </nav>

            <!-- Botón de menú móvil -->
            <button id="menu-button" class="md:hidden">
                <i class="fas fa-bars text-gray-800 text-xl"></i>
            </button>
        </div>

        <!-- Menú lateral para pantallas pequeñas -->
        <div id="mobile-menu"
            class="fixed top-0 right-0 w-64 h-full bg-gray-800 text-white transform translate-x-full transition-transform duration-300 ease-in-out z-30">
            <div class="flex justify-between items-center p-4">
                <span class="text-lg font-semibold">Menú</span>
                <button id="close-menu-button" class="text-white focus:outline-none">
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
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Clientes</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Blog</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Contacto</a>
            </nav>
        </div>
    </header><br><br><br>

    <!-- Cuerpo -->
    <main class="relative mt-6" style="background: #faf8ef">
        <!-- Carrusel -->
        <div class="carousel-container bg-cover bg-center">
            <div class="relative mt-4 h-full">
                <div class="overflow-hidden relative h-full">
                    <div class="flex transition-transform duration-300 h-full" id="carousel">
                        <div class="flex-none w-full relative h-full">
                            <img src="/img/carrusel/imagen1.jpg" alt="Imagen 1" class="carousel-image">
                        </div>
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen2.jpg" alt="Imagen 2" class="carousel-image">
                        </div>
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen3.jpg" alt="Imagen 3" class="carousel-image">
                        </div>
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen4.jpg" alt="Imagen 4" class="carousel-image">
                        </div>
                    </div>
                </div>
                <button id="prev"
                    class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded shadow z-10">❮</button>
                <button id="next"
                    class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded shadow z-10">❯</button>
            </div>
        </div>
        <!-- Añadir contenido -->
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-center text-2xl font-bold mb-6">GRUPO EMANUEL</h2>
            <p class="text-center text-gray-600 mb-8">
                Más de 10 años de experiencia proveyendo productos para el Sector Construcción, Industrial,
                Minero, Logístico y Agroindustria.
            </p>
            <div class="grid gap-6 md:grid-cols-2">
                <!-- Imágenes y Brochure -->
                <div class="relative space-y-4">
                    <img src="/img/carrusel/equipo.jpg" alt="Equipo"
                        class="mx-auto w-[350px] h-[350px]   rounded shadow-lg">
                </div>

                <!-- Contenido de Texto -->
                <div class="space-y-6">
                    <!-- Sobre Nosotros -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Sobre Nosotros</h2>
                        <p class="text-gray-600 mt-2">
                            Emanuel R.L.G, es un grupo privados fundada en el año 2008, dedicada a la Gestión ferretera,
                            proyectos y/o formalización de actividades en curso de empresas que operan en diversos
                            sectores productivos a nivel nacional.
                        </p>
                    </div>

                    <!-- Misión -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Misión</h2>
                        <p class="text-gray-600 mt-2">
                            Somos un equipo multidisciplinario de especialistas en consultoría ambiental, legal y
                            administrativa, orientados a proporcionar las mejores soluciones integrales a los diversos
                            retos de cada proyecto que emprenden nuestros clientes.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Vision</h2>
                        <p class="text-gray-600 mt-2">
                            Somos un equipo multidisciplinario de especialistas en consultoría ambiental, legal y
                            administrativa, orientados a proporcionar las mejores soluciones integrales a los diversos
                            retos de cada proyecto que emprenden nuestros clientes.
                        </p>
                    </div>

                    <!-- Botón Más de Nosotros -->
                    <a href="/sobre-nosotros"
                        class="inline-flex items-center px-4 py-2 bg-blue-800 text-white rounded shadow-md hover:bg-blue-700 transition">
                        Más de Nosotros →
                    </a>
                </div>
            </div>
        </div>

        <!-- Sección Sobre servicios -->
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-left text-3xl font-bold text-gray-800 mb-6">Nuestros Servicios</h2>
            <div class="flex flex-col items-center space-y-6">
                <!-- Fila 1 (3 tarjetas) -->
                <div class="grid gap-6 md:grid-cols-3 md:justify-center">
                    <!-- Tarjeta 1 -->
                    <div
                        class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 shadow-lg rounded-lg overflow-hidden text-center p-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="/img/servicios/sareli.jpg" alt="Servicios Generales Gabriel & Zareli SAC"
                            class="mx-auto w-[245px] h-[200px] object-cover rounded-md mb-4">
                        <h3 class="font-bold text-lg text-blue-900 mb-2">Servicios Generales Gabriel & Zareli SAC</h3>
                        <p class="text-gray-700">
                            Contamos con un amplio stock de materiales de construcción habilitada en las especies más
                            comerciales para la construcción y mantenimiento de terrenos.
                        </p>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div
                        class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 shadow-lg rounded-lg overflow-hidden text-center p-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="/img/servicios/hotel.jpg" alt="Hotel Emanuel"
                            class="mx-auto w-[245px] h-[200px] object-cover rounded-md mb-4">
                        <h3 class="font-bold text-lg text-blue-900 mb-2">Hotel Emanuel</h3>
                        <p class="text-gray-700">
                            Contamos con mix variado de triplay para construcción: lupuna nacional, Fenólico, Fenólico
                            doble Film, OSB y MDF, con nuestra asesoría especializada podrá elegir el más adecuado y
                            <span class="font-semibold">reducir su presupuesto de obra hasta en un 45%</span>.
                        </p>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div
                        class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 shadow-lg rounded-lg overflow-hidden text-center p-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="/img/servicios/tripleg.jpg" alt="Complejo deportivo triple G"
                            class="mx-auto w-[245px] h-[200px] object-cover rounded-md mb-4">
                        <h3 class="font-bold text-lg text-blue-900 mb-2">Complejo deportivo triple G</h3>
                        <p class="text-gray-700">
                            Fabricamos parihuelas/pallets a medida, modelo y especies según el requerimiento del
                            cliente. Para uso local y para exportación.
                        </p>
                    </div>
                </div>

                <!-- Fila 2 (2 tarjetas) -->
                <div class="grid gap-6 md:grid-cols-2 md:justify-center">
                    <!-- Tarjeta 4 -->
                    <div
                        class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 shadow-lg rounded-lg overflow-hidden text-center p-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="/img/servicios/ferreteria.jpg" alt="Distribuidora Ferreteria"
                            class="mx-auto w-[245px] h-[200px] object-cover rounded-md mb-4">
                        <h3 class="font-bold text-lg text-blue-900 mb-2">Distribuidora Ferreteria</h3>
                        <p class="text-gray-700">
                            Fabricamos parihuelas/pallets a medida, modelo y especies según el requerimiento del
                            cliente. Para uso local y para exportación (Certificación SENASA y especificaciones técnicas
                            requeridas).
                        </p>
                    </div>

                    <!-- Tarjeta 5 -->
                    <div
                        class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 shadow-lg rounded-lg overflow-hidden text-center p-6 hover:shadow-xl transition-shadow duration-300">
                        <img src="/img/servicios/servicentro.jpg" alt="Servicentro"
                            class="mx-auto w-[245px] h-[200px] object-cover rounded-md mb-4">
                        <h3 class="font-bold text-lg text-blue-900 mb-2">Servicentro</h3>
                        <p class="text-gray-700">
                            Fabricamos parihuelas/pallets a medida, modelo y especies según el requerimiento del
                            cliente. Para uso local y para exportación (Certificación SENASA y especificaciones técnicas
                            requeridas).
                        </p>
                    </div>
                </div>
            </div>
        </div>



    </main>

    <!-- Footer -->
    <footer>

        <div class="bg-gray-300 w-full py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap md:flex-nowrap justify-around items-start">
                    <!-- Menú de Navegación -->
                    <div class="w-full md:w-1/7">
                    </div>
                    <!-- Información sobre Fundación -->
                    <div class="w-full md:w-2/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Fundación Emanuel</h2>
                        <p class="text-gray-600 text-sm">
                            Brindamos herramientas que ayudan a los peruanos a fortalecer y desarrollar sus capacidades,
                            incentivando la generación de ideas o proyectos sostenibles y escalables, que aporten al
                            desarrollo de nuestro país.
                        </p>
                    </div>
                    <div class="w-full md:w-3/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Menú</h2>
                        <ul class="text-gray-600 space-y-1 list-disc list-inside">
                            <li><a href="#" class="hover:text-red-600">Inicio</a></li>
                            <li><a href="#" class="hover:text-red-600">Conócenos</a></li>
                            <li><a href="#" class="hover:text-red-600">Campus Emanuel</a></li>
                            <li><a href="#" class="hover:text-red-600">Portal PQS</a></li>

                            <li><a href="#" class="hover:text-red-600">Noticias</a></li>
                            <li><a href="#" class="hover:text-red-600">Contactos</a></li>
                        </ul>
                    </div>


                    <!-- Información de Contacto -->
                    <div class="w-full md:w-4/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Dirección de la oficina</h2>
                        <p class="text-gray-600 text-sm mb-2">
                            Avenida Camino Real, Mz32 Lt.2 Trujillo, Perú
                        </p>
                        <h2 class="text-gray-700 font-semibold mb-2">Contacto</h2>
                        <p class="text-gray-600 text-sm">Celular: 922457777</p>
                        <h2 class="text-gray-700 font-semibold mb-2">Correo</h2>
                        <p class="text-gray-600 text-sm">Correo:----------</p>
                    </div>

                    <!-- Redes Sociales -->
                    <div class="w-full md:w-5/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Síguenos</h2>
                        <div class="grid grid-cols-2 gap-2">
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-facebook text-2xl"></i>
                                <p class="text-gray-600 text-sm">Facebook</p>
                            </a>
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-twitter text-2xl"></i>
                                <p class="text-gray-600 text-sm">Twitter</p>
                            </a>
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-tiktok text-2xl"></i>
                                <p class="text-gray-600 text-sm">TikTok</p>
                            </a>
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-instagram text-2xl"></i>
                                <p class="text-gray-600 text-sm">Instagram</p>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-6/7">
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white w-full py-4" style="text-align: center">
            <div class="container mx-auto px-4">
                <!-- Logo y Derechos Reservados -->
                <div class="flex flex-col items-center text-black">
                    <p class="text-sm">2024 <span class="font-semibold">Fundación Emanuel</span>. Todos los derechos
                        reservados</p>
                    <a href="#" class="text-red-600 text-sm  ">Políticas de privacidad y protección de datos</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Carousel and Menu -->
    <script>
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const totalImages = 4;
        let currentIndex = 0;

        const updateCarousel = () => {
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        };

        // Función para avanzar al siguiente slide
        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % totalImages;
            updateCarousel();
        };

        // Avance automático cada 4 segundos
        setInterval(nextSlide, 4000);

        nextButton.addEventListener('click', () => {
            nextSlide();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateCarousel();
        });

        // Código para el menú móvil
        const menuButton = document.getElementById('menu-button');
        const closeButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('translate-x-full');
        });

        closeButton.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });
    </script>

</body>

</html>
