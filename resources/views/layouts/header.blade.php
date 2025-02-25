<style>
    /* Estilos generales para el header */
    header {
        position: fixed;
        width: 100%;
        top: 0;
        transition: 0.3s all;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px); 
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
    }

    header.hidden {
        transform: translateY(-100%);
    }

    header li a { 
        color: #fff;
    }

    header .submenu li a {
        color: var(--neutral-gray);
    }

    .menu-navegation .menu-categories {
        display: flex;
        gap: 1rem;
    }

    .menu-navegation ul li {
        position: relative;
        padding: 0.75rem;
    }

    /* Submenú */
    .submenu {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
        flex-direction: column;
    }

    li:hover .submenu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .submenu li a {
        padding: 0.3rem 1rem;
        white-space: nowrap;
        transition: 0.3s;
    }

    .submenu li a:hover {
        color: var(--bright-blue);
    }

    /* Estilos para los iconos */
    .logo {
        filter: brightness(0) invert(1);
        transition: filter 0.3s ease-in-out;
    }

    .icon-header .icon-svg {
        fill: var(--soft-pink); 
        transition: fill 0.3s ease; 
    }

    .icon-header:hover .icon-svg {
        fill: var(--energetic-pink);
    }

    .menu-toggle {
        display: none;
    }

    /* ======== RESPONSIVE DESIGN ======== */
    @media screen and (max-width: 768px) {
        header {
            padding: 1rem;
        }

        .menu-navegation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .menu-navegation.active {
            transform: translateY(0);
        }

        .menu-categories {
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .menu-categories li {
            text-align: center;
        }

        .submenu {
            position: static;
            background: transparent;
            box-shadow: none;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            display: none;
        }

        li.show-submenu .submenu {
            display: block;
        }

        /* Botón hamburguesa */
        .menu-toggle {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1050;
            position: relative;
        }

        .menu-toggle span {
            display: block;
            width: 30px;
            height: 3px;
            background: white;
            margin: 5px 0;
            border-radius: 2px;
            transition: 0.3s;
        }

        /* Animación de la hamburguesa */
        .menu-toggle.active span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        
        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .menu-toggle.active span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Capa para cerrar el menú al hacer clic fuera */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: -1;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }
    }
</style>

<header id="header" class="header">
    <div class="logo">
        <a href="#" aria-label="Inicio">
            <img class="logo" src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="" width="115" height="65">
        </a>
    </div>
    <button class="menu-toggle" aria-label="Abrir menú">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav class="menu-navegation">
        <ul class="menu-categories">
            <li>
                <a href="/">Inicio</a>
            </li>
            <li>
                <a href="{{ route('about-us') }}">Nosotros</a>
            </li>
            <li>
                <a href="/servicios">Servicios</a>
                <ul class="submenu">
                    <li><a href="/servicios/impresion-offset">Impresión Offset</a></li>
                    <li><a href="/servicios/publicidad">Publicidad</a></li>
                    <li><a href="/servicios/personalizado">Personalizado</a></li>
                    <li><a href="/servicios/diseno-grafico">Diseño Gráfico</a></li>
                </ul>
            </li>
            <li>
                <a href="/productos">Productos</a>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contacto</a>
            </li>
            <li>
                <a class="icon-header" href="/buscar" aria-label="Buscar">
                    <svg class="icon-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 17 17"><g></g>
                        <path d="M16.604 15.868l-5.173-5.173c0.975-1.137 1.569-2.611 1.569-4.223 0-3.584-2.916-6.5-6.5-6.5-1.736 0-3.369 0.676-4.598 1.903-1.227 1.228-1.903 2.861-1.902 4.597 0 3.584 2.916 6.5 6.5 6.5 1.612 0 3.087-0.594 4.224-1.569l5.173 5.173 0.707-0.708zM6.5 11.972c-3.032 0-5.5-2.467-5.5-5.5-0.001-1.47 0.571-2.851 1.61-3.889 1.038-1.039 2.42-1.611 3.89-1.611 3.032 0 5.5 2.467 5.5 5.5 0 3.032-2.468 5.5-5.5 5.5z"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a class="icon-header" href="/favoritos" aria-label="Favoritos">
                    <svg class="icon-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 17 17"><g></g>
                        <path d="M12.5 0.658c-1.739 0-3.251 0.992-4 2.439-0.749-1.447-2.261-2.439-4-2.439-2.481 0-4.5 2.019-4.5 4.5 0 0.343 0.048 0.699 0.154 1.118l0.109 0.351c1.432 4.354 7.659 9.393 7.924 9.604l0.313 0.252 0.313-0.252c0.282-0.227 6.926-5.598 7.927-9.614l0.112-0.368c0.101-0.402 0.148-0.749 0.148-1.091 0-2.481-2.019-4.5-4.5-4.5zM15.889 5.98l-0.113 0.37c-0.809 3.246-5.946 7.727-7.276 8.843-1.282-1.083-6.122-5.337-7.285-8.872l-0.1-0.316c-0.077-0.311-0.115-0.588-0.115-0.847 0-1.93 1.57-3.5 3.5-3.5s3.5 1.571 3.5 3.5v0.252h1v-0.252c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5c0 0.258-0.038 0.527-0.111 0.822z"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a class="icon-header" href="/carrito" aria-label="Carrito de compras">
                    <svg class="icon-svg" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" width="20" height="20" viewBox="0 0 17 17" id="svg50" sodipodi:docname="shopping-cart-2.svg" inkscape:version="1.0.2-2 (e86c870879, 2021-01-15)">
                        <metadata id="metadata56">
                          <rdf:rdf>
                            <cc:work rdf:about="">
                              <dc:format>image/svg+xml</dc:format>
                              <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                              <dc:title></dc:title>
                            </cc:work>
                          </rdf:rdf>
                        </metadata>
                        <defs id="defs54"></defs>
                        <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="2400" inkscape:window-height="1271" id="namedview52" showgrid="false" inkscape:zoom="48.823529" inkscape:cx="8.5" inkscape:cy="8.5" inkscape:window-x="2391" inkscape:window-y="-9" inkscape:window-maximized="1" inkscape:current-layer="svg50"></sodipodi:namedview>
                        <g id="g46" transform="matrix(-1,0,0,1,16.926,0)"></g>
                        <path d="m 14.176,12.5 c 0.965,0 1.75,0.785 1.75,1.75 0,0.965 -0.785,1.75 -1.75,1.75 -0.965,0 -1.75,-0.785 -1.75,-1.75 0,-0.965 0.785,-1.75 1.75,-1.75 z m 0,2.5 c 0.414,0 0.75,-0.337 0.75,-0.75 0,-0.413 -0.336,-0.75 -0.75,-0.75 -0.414,0 -0.75,0.337 -0.75,0.75 0,0.413 0.336,0.75 0.75,0.75 z m -8.5,-2.5 c 0.965,0 1.75,0.785 1.75,1.75 0,0.965 -0.785,1.75 -1.75,1.75 -0.965,0 -1.75,-0.785 -1.75,-1.75 0,-0.965 0.785,-1.75 1.75,-1.75 z m 0,2.5 c 0.414,0 0.75,-0.337 0.75,-0.75 0,-0.413 -0.336,-0.75 -0.75,-0.75 -0.414,0 -0.75,0.337 -0.75,0.75 0,0.413 0.336,0.75 0.75,0.75 z M 3.555,2 3.857,4 H 17 l -1.118,8.036 H 3.969 L 2.931,4.573 2.695,3 H -0.074 V 2 Z M 4,5 4.139,6 H 15.713 L 15.852,5 Z M 15.012,11.036 15.573,7 H 4.278 l 0.561,4.036 z" id="path48"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</header>