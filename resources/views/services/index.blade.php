@extends('layouts.app')

@push('styles')
    @include('services.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation" id="presentation" data-menu-navigation="Leyenda">
            <img 
                class="image-background-contact"
                src="{{ asset('images/servicios/servicios.jpg') }}" 
                alt="Servicios OceanPrint"
                width="1500"
                height="1000"
            >
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
                        <h6>
                            MAS SOLICITADO
                        </h6>
                    </div>
                    <div class="mostRequestedServices">
                        <ul>
                            <li class="active" 
                                data-image="{{ asset('images/servicios/libros.jpg') }}" 
                                data-description="Ofrecemos <strong>impresión profesional de libros educativos y didácticos</strong> para todos los niveles: inicial, básico, bachillerato y superior, adaptados a las regiones Costa, Sierra y Amazonía del Ecuador.">
                                Impresión de libros
                            </li>
                            <li 
                                data-image="{{ asset('images/servicios/papeleria.jpg') }}" 
                                data-description="Papelería corporativa personalizada: hojas membretadas, facturas, sobres y más.">
                                Papelería corporativa
                            </li>
                            <li 
                                data-image="{{ asset('images/servicios/rotulacion.jpg') }}" 
                                data-description="Rotulación, viniles y gráficos de alta calidad para interiores, exteriores y vehículos.">
                                Rotulación y viniles
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
                            src="{{ asset('images/servicios/libros.jpg') }}" 
                            alt="Impresión de libros educativos"
                        >
                    </div>
                </div>
                <div class="column">
                    <div class="containerDescription" id="container-description-most-requested-service">
                        <p>
                            Ofrecemos <strong>impresión profesional de libros educativos y didácticos</strong> para todos los niveles: inicial, básico, bachillerato y superior, adaptados a las regiones Costa, Sierra y Amazonía del Ecuador. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-services" id="services" data-menu-navigation="Principales servicios">
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#facde6" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,192C640,192,800,160,960,154.7C1120,149,1280,171,1360,181.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            <div class="containerService first" id="offset">
                <div class="column">
                    <div class="content">
                        <h3>
                            Impresión Offset
                        </h3>
                        <p>
                            Técnica de alta calidad ideal para grandes volúmenes, que ofrece colores precisos, acabados uniformes y excelente definición en todo tipo de papelería y material publicitario
                        </p>
                    </div>
                </div>
                <div class="column">
                    <img
                        class="imageOffset"
                        src="{{ asset('images/servicios/offset.jpg') }}" 
                        alt="Impresión offset"
                    >
                </div>
            </div>
            <div class="containerService" id="publicity">
                <div class="column">
                    <div class="content">
                        <img
                            class="imageOffset"
                            src="{{ asset('images/servicios/offset.jpg') }}" 
                            alt="Impresión offset"
                        >
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <h3>
                            Publicidad
                        </h3>
                        <p>
                            Técnica de alta calidad ideal para grandes volúmenes, que ofrece colores precisos, acabados uniformes y excelente definición en todo tipo de papelería y material publicitario
                        </p>
                    </div>
                </div>
            </div>
            <div class="containerService" id="personalized">
                <div class="column">
                    <div class="content">
                        <h3>
                            Personalizado
                        </h3>
                        <p>
                            Técnica de alta calidad ideal para grandes volúmenes, que ofrece colores precisos, acabados uniformes y excelente definición en todo tipo de papelería y material publicitario
                        </p>
                    </div>
                </div>
                <div class="column">
                    <img
                        class="imageOffset"
                        src="{{ asset('images/servicios/offset.jpg') }}" 
                        alt="Impresión offset"
                    >
                </div>
            </div>
            <div class="containerService" id="design">
                <div class="column">
                    <div class="content">
                        <img
                            class="imageOffset"
                            src="{{ asset('images/servicios/offset.jpg') }}" 
                            alt="Impresión offset"
                        >
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <h3>
                            Diseño Gráfico
                        </h3>
                        <p>
                            Técnica de alta calidad ideal para grandes volúmenes, que ofrece colores precisos, acabados uniformes y excelente definición en todo tipo de papelería y material publicitario
                        </p>
                    </div>
                </div>
            </div>
            <svg class="waveBottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#facde6" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,192C640,192,800,160,960,154.7C1120,149,1280,171,1360,181.3L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        </section>

        <section class="container container-packs" id="kits" data-menu-navigation="Kits para emprendedores">
            <div class="containerPacks">
                <div class="title">
                    <h2>
                       <span class="text-gradient energetic-pink">
                        ¿Eres emprendedor?
                       </span>
                    </h2>
                    <h5>
                        Tenemos los mejores kits para que puedas iniciar.
                    </h5>
                </div>
                <div class="containerCards">
                    <div class="column">
                        <div class="card">
                            <div class="image">
                                <img
                                    class="imageKits"
                                    id="image-kits-1" 
                                    src="{{ asset('images/servicios/kits.png') }}" 
                                    alt="Kits para emprendendores"
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
                                <button type="button" class="button-circle-arrow-right">
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
                                    src="{{ asset('images/servicios/kits.png') }}" 
                                    alt="Kits para emprendendores"
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
                                <button type="button" class="button-circle-arrow-right">
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
                                    src="{{ asset('images/servicios/kits.png') }}" 
                                    alt="Kits para emprendendores"
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
                                <button type="button" class="button-circle-arrow-right">
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