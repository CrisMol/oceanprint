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
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Sora:wght@100..800&family=Comfortaa:wght@300;400;700&family=Cormorant:wght@400;500;600&family=Spectral:wght@200..800&display=swap" rel="stylesheet">

    @include('layouts.styles.index')

    @stack('styles')
</head>
<body>
    <div id="app">
        @guest
            @include('layouts.header')
        @else 
            @include('layouts.header')
            <div>
                <a href="{{ Auth::user()->utype === 'ADM' ? route('admin.index') : route('user.index') }}">
                    <span class="pr-6px">{{ Auth::user()->name }}</span>
                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user" />
                    </svg>
                </a>
            </div>
        @endguest

        @yield('content')

        @include('layouts.footer')
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
        });
    </script>
    @stack('scripts')
</body>
</html>
