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
        border-top: 4px solid #FFD700;
    }

    .logo img {
        max-height: 4rem; /* Altura máxima del logo */
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
        padding: 5px 20px;
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
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
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

<body class="bg-gray-100">

 
    <!-- Encabezado -->
    <header class="bg-white shadow-md relative z-20 top-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center logo">
                <img src="/img/logo.png" alt="Grupo Emanuel" class="h-12">
            </div>
    
            <!-- Menú para pantallas grandes -->
            <nav class="hidden md:flex space-x-4 items-center">
                <a href="#" class="nav-item active">Inicio</a>
                <a href="#" class="nav-item">Nosotros</a>
                <div class="relative nav-item">
                    <a href="#" class="nav-item">Productos</a>
                    <div class="submenu">
                        <a href="#">Madera para Construcción</a>
                        <a href="#">Triplay para Construcción</a>
                        <a href="#">Pallets / Parihuelas</a>
                        <a href="#">Durmientes de Madera</a>
                        <a href="#">Postes de Madera</a>
                    </div>
                </div>
                <a href="#" class="nav-item">Servicios</a>
                <a href="#" class="nav-item">¿Por qué elegirnos?</a>
                <a href="#" class="nav-item">Clientes</a>
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
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">¿Por qué elegirnos?</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Clientes</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Blog</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-500 hover:text-black">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Cuerpo -->
    <!-- Cuerpo -->
    <main class="relative mt-6">
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
                    </div>
                </div>
                <button id="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded shadow z-10">❮</button>
                <button id="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded shadow z-10">❯</button>
            </div>
        </div>
        <h1>Emanuel Presenta</h1>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-200 py-10">
        <div class="container mx-auto px-4">
            <!-- Footer Content Here -->
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
                <p class="text-gray-600 text-sm">2024 <span class="font-semibold">Fundación Emanuel</span>. Todos los
                    derechos reservados</p>
                <a href="#" class="text-red-600 text-sm mt-2">Políticas de privacidad y protección de datos</a>
            </div>
        </div>
    </footer>


   <!-- JavaScript for Carousel and Menu -->
   <script>
    const carousel = document.getElementById('carousel');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const totalImages = 2;
    let currentIndex = 0;

    const updateCarousel = () => {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    };

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });

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
