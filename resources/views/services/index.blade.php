@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/services.026.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/gradients.025.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive/services.025.css') }}">
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation" id="presentation" data-menu-navigation="Leyenda">
            <picture>
                <source 
                    media="(max-width: 767px)" 
                    srcset="{{ asset('images/servicios/servicios-que-ofrecen-oceanprint-impresion-800.webp') }}"
                >
                    
                <img 
                    class="image-background-contact"
                    src="{{ asset('images/servicios/servicios-que-ofrecen-oceanprint-impresion-1920.webp') }}" 
                    alt="Trabajadores discutiendo los servicios que se ofrecen en Ocean print"
                    width="1920"
                    height="1280"
                >
            </picture>
            <div class="containerPresentationText">
                <h1 class="text-center text-gradient bright-light">
                    ¿Qué es lo que hacemos?
                </h1>
                <p class="text-center">
                    Descubre todos nuestros servicios que ponemos a tu disposición.
                </p>             
            </div>
        </section>

        <section class="container container-most-requested" id="mostRequested" data-menu-navigation="Más solicitado">
            <div class="containerMostRequested">
                <div class="column">
                    <div class="title">
                        <x-sub-heading-row 
                            title="Más" 
                            subtitle="Solicitado" 
                            description=""
                        />
                    </div>
                    <div class="mostRequestedServices">
                        <ul>
                            <li class="active" 
                                data-image="{{ asset('images/servicios/servicio-impresion-de-libros-ocean-print.webp') }}" 
                                data-description="Impresión profesional de libros educativos y didácticos en Ecuador. Imprenta con calidad editorial, adaptada a cada nivel y región del país.">
                                Impresión de libros
                            </li>
                            <li 
                                data-image="{{ asset('images/servicios/servicio-papeleria-coporativa-ocean-print.webp') }}" 
                                data-description="Papelería corporativa personalizada: hojas membretadas, facturas, sobres y más.">
                                Papelería corporativa
                            </li>
                            <li 
                                data-image="{{ asset('images/servicios/servicio-rotulacion-de-viniles-ocean-print.webp') }}" 
                                data-description="Rotulación, viniles y gráficos de alta calidad para interiores, exteriores y vehículos.">
                                Rotulación y viniles
                            </li>
                            <li 
                                data-image="{{ asset('images/servicios/servicio-de-veterinaria-ocean-print.webp') }}" 
                                data-description="Impresión para veterinarias: carnets de vacunación, roll ups, recetarios, etiquetas y más, con calidad profesional y diseño personalizado.">
                                Veterinaria
                            </li>
                        </ul>
                    </div>
                    <div class="containerButton">
                        <a href="{{ route('shop') }}" class="btn buttonShop">
                            <span class="text">Ir a la tienda</span>
                            <span class="spanButtonColor"></span>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="containerImage">
                        <img
                            class="imageMostRequestedServices"
                            id="image-most-requested-services" 
                            src="{{ asset('images/servicios/servicio-impresion-de-libros-ocean-print.webp') }}" 
                            alt="Servicio de impresión Ocean print"
                        >
                    </div>
                </div>
                <div class="column">
                    <div class="containerDescription" id="container-description-most-requested-service">
                        <p>
                            Impresión profesional de libros educativos y didácticos en Ecuador. Imprenta con calidad editorial, adaptada a cada nivel y región del país.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-services" id="services" data-menu-navigation="Principales servicios">
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#097099" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,192C640,192,800,160,960,154.7C1120,149,1280,171,1360,181.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            <div class="containerService first" id="offset">
                <div class="column">
                    <img
                        class="imageBack envelope"
                        src="{{ asset('images/servicios/envelope.svg') }}"
                        width="75"
                        height="75" 
                        alt="Sobres"
                        loading="lazy"
                    >
                    <img
                        class="imageBack folder"
                        src="{{ asset('images/servicios/folder.svg') }}"
                        width="75"
                        height="75" 
                        alt="Sobres"
                        loading="lazy"
                    >
                    <div class="content scroll-section">
                        <h3 class="scroll-animate">
                            Papelería
                        </h3>
                        <p class="scroll-animate">
                            Técnica de alta calidad ideal para grandes volúmenes, que ofrece colores precisos, acabados uniformes y excelente definición en todo tipo de papelería y material publicitario
                        </p>
                        <ul>
                            <li class="scroll-animate">Material de papelería personalizada: sobres, carpetas, hojas membretadas, tarjetas de presentación.</li>
                            <li class="scroll-animate">Impresión de folletos y catálogos para promoción.</li>
                            <li class="scroll-animate">Impresión de carteles y banners para publicidad.</li>
                            <li class="scroll-animate">Materiales para eventos: invitaciones, programas, credenciales, señalización.</li>
                        </ul>
                        <button type="button" class="button-primary blue-light scroll-animate" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                            <span class="button-text">Solicitar</span>
                        </button>
                    </div>
                </div>
                <div class="column end container-image">
                    <img
                        class="imageOffset"
                        src="{{ asset('images/servicios/servicio-papeleria-corporativa-ocean-print.webp') }}"
                        width="500"
                        height="500" 
                        alt="Artículos de una empresa personalizada - Papelería corporativa Ocean print"
                        loading="lazy"
                    >
                </div>
            </div>
            <div class="containerService" id="publicity">
                <div class="column order-2 container-image change">
                    <div class="content">
                        <img
                            class="imageOffset"
                            src="{{ asset('images/servicios/servicio-personalizados-ocean-print.webp') }}"
                            width="500"
                            height="500" 
                            alt="Artículos personalizados con tu propia marca - Ocean print"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div class="column end order-1">
                    <img
                        class="imageBack shirt"
                        src="{{ asset('images/servicios/shirt.svg') }}"
                        width="75"
                        height="75" 
                        alt="Sobres"
                        loading="lazy"
                    >
                    <div class="content scroll-section">
                        <h3 class="scroll-animate">
                            Personalizados
                        </h3>
                        <p class="scroll-animate">
                            Dale un toque único a tus productos con diseños personalizados. Desde tarjetas y camisetas hasta material corporativo, crea lo que imaginas con calidad profesional. ¡Haz que tu marca hable por ti!
                        </p>
                        <ul>
                            <li class="scroll-animate">Diseño y personalización de tarjetas y papelería corporativa.</li>
                            <li class="scroll-animate">Impresión personalizada de camisetas y textiles.</li>
                            <li class="scroll-animate">Material promocional adaptado a la identidad de tu marca.</li>
                            <li class="scroll-animate">Productos personalizados para eventos y campañas especiales.</li>
                        </ul>
                        <button type="button" class="button-primary blue-light scroll-animate" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                            <span class="button-text">Solicitar</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="containerService" id="personalized">
                <div class="column">
                    <img
                        class="imageBack van"
                        src="{{ asset('images/servicios/van.svg') }}"
                        width="75"
                        height="75" 
                        alt="Sobres"
                        loading="lazy"
                    >
                    <div class="content scroll-section">
                        <h3 class="scroll-animate">
                            Publicidad
                        </h3>
                        <p class="scroll-animate">
                            Lleva tu marca más lejos con impresiones de calidad profesional. Carteles, folletos y material promocional que atraen clientes.
                        </p>
                        <ul>
                            <li class="scroll-animate">Diseño e impresión de flyers, volantes y folletos promocionales.</li>
                            <li class="scroll-animate">Producción de carteles, banners y señalización para eventos.</li>
                            <li class="scroll-animate">Publicidad en vehículos y rotulación comercial personalizada.</li>
                            <li class="scroll-animate">Campañas publicitarias impresas y materiales para puntos de venta.</li>
                        </ul>
                        <button type="button" class="button-primary blue-light scroll-animate" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                            <span class="button-text">Solicitar</span>
                        </button>
                    </div>
                </div>
                <div class="column end container-image">
                    <img
                        class="imageOffset"
                        src="{{ asset('images/servicios/servicio-publicidad-ocean-print.webp') }}" 
                        width="500"
                        height="500" 
                        alt="Artículos de publicidad - Ocean print"
                        loading="lazy"
                    >
                </div>
            </div>
            <div class="containerService" id="design">
                <div class="column order-2 container-image change">
                    <div class="content">
                        <img
                            class="imageOffset"
                            src="{{ asset('images/servicios/servicio-corporativo-ocean-print.webp') }}" 
                            width="500"
                            height="500" 
                            alt="Artículos para corporaciones - Ocean print"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div class="column order-1">
                    <img
                        class="imageBack stats"
                        src="{{ asset('images/servicios/stats.svg') }}"
                        width="75"
                        height="75" 
                        alt="Sobres"
                        loading="lazy"
                    >
                    <div class="content scroll-section">
                        <h3 class="scroll-animate">
                            Corporativo
                        </h3>
                        <p class="scroll-animate">
                            Ofrecemos paquetes exclusivos para empresas: materiales de alta calidad, impresiones profesionales, asesoría, materiales y soluciones personalizadas para cada negocio
                        </p>
                        <ul>
                            <li class="scroll-animate">Impresión de papelería corporativa: hojas membretadas, sobres y tarjetas de presentación.</li>
                            <li class="scroll-animate">Diseño y producción de informes, manuales y memorandos empresariales.</li>
                            <li class="scroll-animate">Materiales para reuniones y presentaciones: folders, carpetas y blocs de notas personalizados.</li>
                            <li class="scroll-animate">Regalos corporativos con branding personalizado para clientes y empleados.</li>
                        </ul>
                        <button type="button" class="button-primary blue-light scroll-animate" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                            <span class="button-text">Solicitar</span>
                        </button>
                    </div>
                </div>
            </div>
            <svg class="waveBottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#097099" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,192C640,192,800,160,960,154.7C1120,149,1280,171,1360,181.3L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        </section>

        <section class="container container-packs" id="kits" data-menu-navigation="Kits para emprendedores">
            <div class="containerPacks">
                <div class="title scroll-section">
                    <h2 class="scroll-animate">
                       <span class="text-gradient bright-light">
                        ¡Emprender nunca fue tan fácil!
                       </span>
                    </h2>
                    <h5>
                        Descubre nuestros kits ideales para dar el primer paso hacia tu negocio.
                    </h5>
                </div>
                <div class="containerCards">
                    <div class="column">
                        <div class="card">
                            <div class="image">
                                <img
                                    class="imageKits"
                                    id="image-kits-1" 
                                    src="{{ asset('images/servicios/kit-basic.webp') }}" 
                                    width="500"
                                    height="500" 
                                    alt="Kit básico para emprendedores - Ocean print"
                                    loading="lazy"
                                >
                            </div>
                            <div class="title-card">
                                <h6>
                                    Kit Basic
                                </h6>
                            </div>
                            <div class="details">
                                <ul>
                                    <li>100 tarjetas de presentación</li>
                                    <li>Cuadernos personalizados</li>
                                    <li>Calendarios</li>
                                    <li>Carpetas con logo</li>
                                </ul>
                            </div>
                            <div class="containerButtonCard">
                                <button type="button" class="button-circle-arrow-right" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                    <span class="button-text">Solicitar</span>
                                    <span class="button-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <i>
                                <span>Más comprado</span>
                            </i>
                            <div class="image">
                                <img
                                    class="imageKits"
                                    id="image-kits-1" 
                                    src="{{ asset('images/servicios/kit-medium.webp') }}" 
                                    width="500"
                                    height="500" 
                                    alt="Kit medio para emprendedores - Ocean print"
                                    loading="lazy"
                                >
                            </div>
                            <div class="title-card">
                                <h6>
                                    Kit Medio
                                </h6>
                            </div>
                            <div class="details">
                                <ul>
                                    <li>100 tarjetas de presentación</li>
                                    <li>Cuadernos personalizados</li>
                                    <li>Calendarios</li>
                                    <li>Carpetas con logo</li>
                                </ul>
                            </div>
                            <div class="containerButtonCard">
                                <button type="button" class="button-circle-arrow-right" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                    <span class="button-text">Solicitar</span>
                                    <span class="button-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="image">
                                <img
                                    class="imageKits"
                                    id="image-kits-1" 
                                    src="{{ asset('images/servicios/kit-premium.webp') }}" 
                                    width="500"
                                    height="500" 
                                    alt="Kit medio para emprendedores - Ocean print"
                                    loading="lazy"
                                >
                            </div>
                            <div class="title-card">
                                <h6>
                                    Kit Premium
                                </h6>
                            </div>
                            <div class="details">
                                <ul>
                                    <li>100 tarjetas de presentación</li>
                                    <li>Cuadernos personalizados</li>
                                    <li>Calendarios</li>
                                    <li>Carpetas con logo</li>
                                </ul>
                            </div>
                            <div class="containerButtonCard">
                                <button type="button" class="button-circle-arrow-right" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                    <span class="button-text">Solicitar</span>
                                    <span class="button-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @include('services.scripts.index')
@endpush