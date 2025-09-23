<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Oceanprint') }}</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Cristian Molina" />
    <link rel="shortcut icon" href="{{ asset('images/logo/logo-sin-texto.png') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&family=Cormorant:wght@400;500;600&family=Spectral:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @include('layouts.styles.index')

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
            <a href="https://www.facebook.com/yourpage" class="social-facebook" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>

            <a href="https://www.instagram.com/yourprofile" class="social-instagram" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>

            <a href="https://www.tiktok.com/@yourprofile" class="social-tiktok" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
                <i class="fab fa-tiktok" aria-hidden="true"></i>
                <span class="sr-only">TikTok</span>
            </a>
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
        });
    </script>
    @stack('scripts')
</body>
</html>
