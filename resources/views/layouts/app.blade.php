<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Título de la página -->
    <title>Oceanprint | Impresión Digital y Soluciones Personalizadas</title>

    <!-- Descripción para buscadores (140-160 caracteres, atractiva) -->
    <meta name="description" content="Ocean print ofrece impresión digital de alta calidad, soluciones personalizadas y servicio profesional. Descubre nuestros productos y servicios.">

    <!-- Control de indexación -->
    <meta name="robots" content="index, follow">
    <!-- Autor (opcional) -->
    <meta name="author" content="Cristian Molina">

    <!-- Palabras clave (opcional, cada vez menos relevante) -->
    <meta name="keywords" content="Impresión digital, impresión personalizada, servicios de impresión, Ocean print">

    <!-- Etiquetas Open Graph para redes sociales -->
    <meta property="og:title" content="Oceanprint | Impresión Digital y Soluciones Personalizadas">
    <meta property="og:description" content="Impresión digital profesional con Oceanprint. Calidad y servicio a tu alcance.">
    <meta property="og:image" content="URL-de-tu-imagen-destacada.jpg">
    <meta property="og:url" content="https://oceanprintec.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Oceanprint | Impresión Digital y Soluciones Personalizadas">
    <meta name="twitter:description" content="Impresión digital profesional con Oceanprint. Calidad y servicio a tu alcance.">
    <meta name="twitter:image" content="URL-de-tu-imagen-destacada.jpg">

    <link rel="shortcut icon" href="{{ asset('images/logo/logo-sin-texto.png') }}">
    
    <!--<link rel="stylesheet" href="{{ asset('css/base/variables.025.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/typography.025.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/layout.025.css') }}">

    <link rel="stylesheet" href="{{ asset('css/components/loading.025.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.025.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive/layout.025.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive/header.025.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/base/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.025.min.css') }}">

    @stack('styles')
</head>
<body>
    <div id="app">
        @guest
            @include('layouts.header')
        @else 
            @include('layouts.header')
        @endguest

        @yield('content')

        @include('layouts.footer')

        <!--Redes sociales-->
        <div class="social-floating" id="socialBar" aria-hidden="false">
            <a href="https://www.facebook.com/oceanprintec/" class="social-facebook" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                </i>
            </a>

            <a href="https://www.instagram.com/oceanprintec/" class="social-instagram" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </i>
            </a>

            <a href="https://www.tiktok.com/@oceanprintec" class="social-tiktok" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                </i>
            </a>
        </div>

        <!--Pantalla de carga-->
        <div class="loading-page">
            <svg id="svg" version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="282.000000pt" height="288.000000pt" viewBox="0 0 282.000000 288.000000"
                preserveAspectRatio="xMidYMid meet">
                <metadata>
                Created by potrace 1.16, written by Peter Selinger 2001-2019
                </metadata>
                <g transform="translate(0.000000,288.000000) scale(0.100000,-0.100000)">
                <path d="M1195 2796 c-114 -19 -198 -43 -295 -83 -457 -188 -769 -583 -845
                -1068 -24 -151 -16 -367 19 -516 105 -451 439 -826 874 -983 254 -91 610 -100
                870 -20 337 102 648 364 809 680 102 198 141 347 150 565 9 233 -22 415 -106
                609 -54 125 -55 126 -117 99 -78 -35 -174 -102 -236 -165 -109 -113 -232 -345
                -277 -523 -75 -300 -312 -539 -617 -623 -106 -29 -306 -31 -408 -4 -178 47
                -300 120 -430 256 -70 74 -95 109 -136 193 -72 145 -93 233 -93 387 0 155 21
                242 94 390 46 93 64 116 153 206 57 57 127 116 161 136 209 120 412 150 665
                96 194 -42 297 -52 383 -40 93 14 154 40 207 88 45 41 95 128 84 146 -10 16
                -177 93 -264 122 -132 44 -217 57 -395 61 -115 3 -196 0 -250 -9z m395 -77
                c153 -18 405 -82 434 -109 14 -14 -147 -59 -271 -75 -65 -8 -194 -19 -288 -23
                l-170 -7 103 -13 c138 -16 351 -15 434 3 84 17 155 48 191 82 35 35 34 19 -2
                -40 -58 -90 -185 -135 -350 -124 -47 4 -149 22 -226 42 -195 48 -189 46 -173
                56 7 5 -12 7 -47 4 -33 -2 -99 -7 -146 -10 -233 -14 -510 -137 -700 -312 l-63
                -58 34 50 c56 80 249 268 330 322 268 179 585 253 910 212z m1025 -780 c15
                -39 23 -74 19 -78 -5 -4 -45 -20 -89 -36 -100 -34 -163 -66 -240 -119 -33 -23
                -66 -46 -74 -50 -8 -5 4 24 25 65 49 92 174 221 259 266 33 17 63 30 66 27 4
                -2 19 -36 34 -75z m80 -285 l7 -82 -58 -17 c-204 -59 -343 -160 -453 -327 -40
                -61 -60 -100 -209 -408 -149 -309 -347 -551 -532 -649 -48 -26 -69 -31 -124
                -31 -36 0 -66 4 -66 8 0 5 19 17 42 28 108 49 263 199 377 364 92 134 146 234
                262 486 151 331 220 433 362 539 98 74 359 196 379 177 3 -4 10 -44 13 -88z
                m17 -277 c-6 -126 -6 -126 -93 -151 -159 -46 -222 -126 -354 -446 -104 -254
                -176 -382 -267 -478 -35 -37 -66 -57 -118 -78 -38 -15 -73 -24 -77 -20 -4 3 7
                21 24 39 45 47 133 173 133 189 0 8 4 18 9 23 15 16 86 190 150 367 33 92 83
                213 112 269 87 169 218 283 402 349 80 29 83 27 79 -63z m-953 -524 c-122
                -158 -304 -310 -498 -417 l-84 -47 -84 16 c-46 9 -91 19 -100 22 -37 14 1 -19
                50 -44 l52 -26 -30 -13 c-16 -7 -71 -25 -122 -40 l-92 -27 -76 36 c-86 41
                -182 104 -238 156 -45 43 -74 123 -58 164 33 86 132 75 386 -42 71 -33 123
                -51 148 -51 l39 0 -26 31 c-52 62 -35 73 145 94 74 9 141 17 149 20 8 2 31 6
                50 9 91 14 281 93 360 150 42 30 47 31 29 9z"/>
                <path d="M2303 2379 c-137 -67 -248 -292 -272 -546 -10 -106 -4 -293 8 -293 4
                0 12 21 19 47 35 128 132 274 284 426 143 142 184 225 155 307 -15 43 -68 80
                -116 80 -20 0 -55 -9 -78 -21z m127 -49 c25 -25 27 -88 4 -136 -19 -41 -266
                -290 -253 -255 14 36 46 78 122 159 101 109 123 165 92 235 -10 23 10 22 35
                -3z"/>
                <path d="M1672 2238 c-18 -18 -14 -62 8 -86 12 -12 39 -31 61 -43 49 -24 125
                -92 151 -134 l19 -30 -6 30 c-27 126 -72 210 -134 252 -37 25 -80 30 -99 11z"/>
                <path d="M1695 2005 c-51 -50 -30 -103 80 -212 95 -94 139 -153 172 -233 l23
                -55 0 85 c0 155 -45 298 -118 373 -68 71 -116 84 -157 42z"/>
                </g>
            </svg>

            <div class="name-container">
                <div class="logo-name">
                    Ocean print
                </div>
            </div>
        </div>

        <div class="container-button-arrow-navigation">
            <!-- Flecha para subir -->
            <button id="scrollUp" class="scroll-toggle">
                ↑
            </button>

            <!-- Flecha para bajar -->
            <button id="scrollDown" class="scroll-toggle">
                ↓
            </button>
        </div>
    </div>

    <script>
        let lastScrollY = window.scrollY;
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > lastScrollY) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
            }
            lastScrollY = window.scrollY;
        });

        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const menuNav = document.querySelector(".menu-navegation");
            const overlay = document.createElement("div");
            overlay.classList.add("overlay");
            document.body.appendChild(overlay);

            const submenuItems = document.querySelectorAll(".menu-categories li");
            const menuLinks = document.querySelectorAll(".menu-categories a");

            menuToggle.addEventListener("click", function () {
                menuNav.classList.toggle("active");
                menuToggle.classList.toggle("active");
                overlay.classList.toggle("active");
            });

            submenuItems.forEach(item => {
                item.addEventListener("click", function (event) {
                    // Evita que se cierre si se hace clic dentro del submenú
                    if (event.target.closest(".submenu")) return;
                    this.classList.toggle("show-submenu");
                });
            });

            // Cerrar menú al hacer clic fuera o en un link
            overlay.addEventListener("click", closeMenu);
            menuLinks.forEach(link => link.addEventListener("click", closeMenu));

            function closeMenu() {
                menuNav.classList.remove("active");
                menuToggle.classList.remove("active");
                overlay.classList.remove("active");
            }

            setTimeout(() => {
                document.getElementById("socialBar").classList.add("show");
            }, 2000);

            // Boton de subir o bajar
            const scrollUp = document.getElementById('scrollUp');
            const scrollDown = document.getElementById('scrollDown');

            function updateButtonsVisibility() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const windowHeight = window.innerHeight;
                const docHeight = document.documentElement.scrollHeight;

                if (scrollTop <= 10) {
                    // Usuario está arriba → ocultar flecha subir
                    scrollUp.style.display = 'none';
                    scrollDown.style.display = 'inline-block';
                } else if (scrollTop + windowHeight >= docHeight - 10) {
                    // Usuario está abajo → ocultar flecha bajar
                    scrollUp.style.display = 'inline-block';
                    scrollDown.style.display = 'none';
                } else {
                    // Usuario en medio → mostrar ambas flechas
                    scrollUp.style.display = 'inline-block';
                    scrollDown.style.display = 'inline-block';
                }
            }

            window.addEventListener('scroll', updateButtonsVisibility);

            // Funcionalidad para subir y bajar al hacer clic
            scrollUp.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            scrollDown.addEventListener('click', () => {
                window.scrollTo({ top: document.documentElement.scrollHeight, behavior: 'smooth' });
            });

            // Inicializar estado
            updateButtonsVisibility();
        });
    </script>
    @stack('scripts')
</body>
</html>
