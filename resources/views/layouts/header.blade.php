<header id="header" class="header">
    <div class="logo">
        <a href="{{ route('home') }}" aria-label="Inicio">
            <img class="logo" 
                src="{{ request()->is('shop') || request()->is('tienda/*') || request()->is('tienda') || request()->is('cart') ? asset('images/logo/logo-oficial-oceanprint.png') : asset('images/logo/logo-blanco.png') }}" 
                alt="Logo" 
                width="115" 
            >
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
                <a href="{{ route('about-us') }}">Nosotros</a>
            </li>
            <li>
                <a href="{{ route('services') }}">Servicios</a>
                <ul class="submenu">
                    <li><a href="{{ route('services') }}#offset">Impresión Offset</a></li>
                    <li><a href="{{ route('services') }}#publicity">Publicidad</a></li>
                    <li><a href="{{ route('services') }}#personalized">Personalizado</a></li>
                    <li><a href="{{ route('services') }}#design">Diseño Gráfico</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('shop') }}">Tienda</a>
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
                <a class="icon-header" href="{{ route('cart.index') }}" aria-label="Carrito de compras">
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
                    @if(Cart::instance('cart')->content()->count()>0)
                        <span class="cart-amount">{{ Cart::instance('cart')->content()->count() }}</span>
                    @endif
                </a>
            </li>
            @if(Auth::check())
                <li>
                    <a class="icon-header" href="{{ Auth::user()->utype === 'ADM' ? route('admin.index') : route('user.index') }}" aria-label="Perfil">
                        <svg class="icon-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-3.333 0-10 1.667-10 5v3h20v-3c0-3.333-6.667-5-10-5z"/>
                        </svg>
                    </a>
                </li>
            @endif  
        </ul>
    </nav>
</header>