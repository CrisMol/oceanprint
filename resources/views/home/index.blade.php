@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.025.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive/home.026.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <main class="">
        <section id="presentation" data-menu-navigation="Leyenda">
            @include('home.section.slider-video')
        </section>

        <section class="container container-categories" id="services" data-menu-navigation="Servicios">
            <x-sub-heading-row 
                title="Principales" 
                subtitle="Servicios" 
                description="Bienvenidos a <strong>Ocean Print!</strong><br>
                Somos una imprenta profesional que cuenta con una amplia gama de servicios de impresión para satisfacer tus necesidades."
            />
            @include('home.section.categories')
            @include('home.section.extras')
        </section>

        <section class="container container-featured" id="featured" data-menu-navigation="Destacados">
            <x-sub-heading-row 
                title="Productos" 
                subtitle="Destacados" 
                description="Mira una pequeña parte de nuestras principales creaciones, más solicitadas y personalizadas a cada cliente."
                icon="destacado.png"
            />
        </section>

        <section class="products">
            @include('home.section.products-infinite')
        </section>

        <section class="container container-steps" id="steps" data-menu-navigation="Proceso">
            <div class="row-subheading-center text-center">
                <h2 class="animated-title white">
                    <span class="word first">Nuestro</span>
                    <span class="word second">Proceso</span>
                </h2>
            </div>
            @include('home.section.steps')
        </section>

        <section class="container container-brands" id="brands" data-menu-navigation="Marcas">
            @include('home.section.brands')
        </section>

        <section class="container container-business" id="business" data-menu-navigation="Soluciones empresariales">
            <div class="row-subheading">
                <div class="subheading">
                    <h2 class="animated-title white text-white">
                        <span class="word first">Soluciones</span>
                        <br>
                        <span class="word second">Empresariales</span>
                    </h2>
                </div>
                <div class="description scroll-section">
                    <div class="container-description white">
                        <p class="scroll-animate">
                            <span>Brindamos soluciones de impresión especializadas para negocios que desean proyectar una imagen profesional, organizada y de confianza</span>
                        </p>
                    </div>
                </div>
            </div>
            <!--Veterinarias-->
            <div class="row">
                <div class="column">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/veterinaria.jpg') }}" alt="" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Veterinarias</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/carnet-veterinario.webp') }}" alt="Carnet veterinario Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Carnet de vacunas</h6>
                                <p>
                                    $1,99 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/recetarios-para-veterinarias.webp') }}" alt="Recetarios para veterinarias Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Recetarios</h6>
                                <p>
                                    $5,50 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Instituciones educativas-->
            <div class="row">
                <div class="column order-2">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/carnet-estudiantil.webp') }}" alt="Carnet estudiantil Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Carnet estudiantil</h6>
                                <p>
                                    $1,10 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/impresion-de-libros.webp') }}" alt="Impresión de libros Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Impresión de libros</h6>
                                <p>
                                    $2,49 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column order-1">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-instituciones-educativas.webp') }}" alt="Servicios para instituciones educativas" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Instituciones Educativas</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Tecnología-->
            <div class="row">
                <div class="column">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-tecnologia.webp') }}" alt="Servicios para tecnología" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Tecnología</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/flyers-tecnologia.webp') }}" alt="Flyers tecnología Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Flyers</h6>
                                <p>
                                    $1,99 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/tarjetas-de-presentacion-tecnologia.webp') }}" alt="Tarjetas de presentación Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Tarjetas de presentación</h6>
                                <p>
                                    $5,50 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seguridad-->
            <div class="row">
                <div class="column order-2">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/cuaderno-espiralado.webp') }}" alt="Cuadernos espiralados Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Cuadernos</h6>
                                <p>
                                    $1,10 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/gorra-personalizada.webp') }}" alt="Gorras Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Gorras</h6>
                                <p>
                                    $2,49 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column order-1">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-seguridad.webp') }}" alt="Servicios para seguridad Ocean print" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Seguridad</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Restaurantes-->
            <div class="row">
                <div class="column">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-restaurantes.webp') }}" alt="Servicios para restaurantes Ocean print" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Restaurantes</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/menu-para-restaurante.webp') }}" alt="Menú para restaurantes Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Menús</h6>
                                <p>
                                    $1,99 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/papel-antigrasa.webp') }}" alt="papel antigrasa para restaurantes Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Papel antigrasa</h6>
                                <p>
                                    $5,50 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Cooperativas-->
            <div class="row">
                <div class="column order-2">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/promocionales-personalizados.webp') }}" alt="Promocionales personalizados Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Promocionales personalizados</h6>
                                <p>
                                    $1,10 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/placas-de-cargos-corporativos.webp') }}" alt="Placas de cargos corporativos Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Placas de cargo</h6>
                                <p>
                                    $2,49 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column order-1">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-cooperativas.webp') }}" alt="Servicios para cooperativas" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Cooperativas</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Constructoras-->
            <div class="row">
                <div class="column">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-constructoras.webp') }}" alt="Servicios para constructoras" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Constructoras</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/sublimacion-de-chalecos-de-seguridad.webp') }}" alt="Sublimación de chalecos de seguridad Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Sublimación de chalecos de seguridad</h6>
                                <p>
                                    $1,99 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/senaleticas.webp') }}" alt="Señaletica para seguridad Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Señaletica</h6>
                                <p>
                                    $5,50 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Vehículos-->
            <div class="row">
                <div class="column order-2">
                    <div class="containerServicesBusiness scroll-section">
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/brandeo-vehicular.webp') }}" alt="Brandeo vehicular Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Brandeo vehicular</h6>
                                <p>
                                    $1,10 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card scroll-animate">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/moquetas.webp') }}" alt="Moquetas Ocean print" width="200" height="200" loading="lazy">
                            </div>
                            <div class="titleService">
                                <h6>Moquetas</h6>
                                <p>
                                    $2,49 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column order-1">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/servicios-para-vehiculos.webp') }}" alt="Servicios para vehiculos Ocean print" width="600" height="600" loading="lazy">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Vehículos</h4>
                            <button class="buttonCTA" onclick="abrirWhatsapp('Quiero comunicarme con un asesor de Ocean Print');">
                                Solicitar cotización
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-testimonials" id="testimonials" data-menu-navigation="¿Porqué Nosotros?">
            <div class="containerTitleAliance">
                <h3 class="animated-title text-center show uppercase">
                    <span class="word first">Marcas que confían en nosotros</span>
                </h3>
            </div>
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"Excelente servicio, la calidad de impresión superó totalmente mis expectativas. ¡Muy recomendados!"</p>
                            <div class="user-name">Carlos M.</div>
                            <div class="testimonial-date">08 Octubre, 2025</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"Rápidos, amables y con una atención increíble. Mis tarjetas quedaron perfectas."</p>
                            <div class="user-name">Andrea G.</div>
                            <div class="testimonial-date">12 Octubre, 2025</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"La calidad es impresionante. Pedí carpetas personalizadas y quedaron profesionales y elegantes."</p>
                            <div class="user-name">Jorge L.</div>
                            <div class="testimonial-date">18 Octubre, 2025</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="stars">★★★★★</div>
                            <p class="testimonial-text">"Atención al cliente de primera. Me ayudaron con el diseño y en menos de 24 horas tenía todo listo."</p>
                            <div class="user-name">Valeria P.</div>
                            <div class="testimonial-date">20 Octubre, 2025</div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination swiper-pagination-testimonials"></div>
            </div>
        </section>
        <div class="logo-slider" id="aliance">
                <div class="swiper swiper-logo">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-construmaq-ecuador.webp') }}" 
                                alt="Logo Construmaq Ecuador" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-benemerito-bomberos-santo-domingo.webp') }}" 
                                alt="Logo Bomberos Benermerito" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-home-speak.webp') }}" 
                                alt="Logo Home Speak" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-security-depot.webp') }}" 
                                alt="Logo Security Depot" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-grupo-editoral-amazonas.webp') }}" 
                                alt="Logo Grupo Editoral Amazonas" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-alumvida.webp') }}" 
                                alt="Logo Alumvida" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-grupo-mancheno.webp') }}" 
                                alt="Logo Grupo Mancheno" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-unidad-educativa-soldado-monge.webp') }}" 
                                alt="Logo Unidad Educativa Soldado Monge" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-servicios-y-construcciones.webp') }}" 
                                alt="Logo Servicios y Construcciones" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-anniroses.webp') }}" 
                                alt="Logo Anniroses" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-dra-cristina.webp') }}" 
                                alt="Logo Dra Cristina" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-vida-sana.webp') }}" 
                                alt="Logo Vida Sana" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-lujo-net.webp') }}" 
                                alt="Logo Lujo Net" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/logo-unidad-educativa-guillermo-ordonez-gomez.webp') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/xavier-abogado.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/vetshopbruca.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/vetscorner.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/veterinaria-gualaceo.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/terraluna.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/suannyching.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/stetidogs.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/sportex.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/silvet.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/servet.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/royal-pet.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/romina.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/pulguitas.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/patitas-pet.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/nubelle.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/movitech.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/monkeyplanet.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/maxicompras.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/lasazon.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/la-campina.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/koica.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/kaif.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/jyr-secgom.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/jaspeblack.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/innovacan.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/infratelecons.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/hospital-baca-ortiz.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/hamkumdo.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/gruposxxm.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/gimoour.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/empsertel.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/elgato.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/dpelos.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/don-guillo.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/detcuador.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/corpcultivos.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/club-la-union.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/centro-edu-mi-nuevo-mundo.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/central-veterinaria.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/bomberos-santa-elena.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/bomberos-la-libertad.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/biodental.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/bayer.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/agrokuchi.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/edifika.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/marcas/3s-industrial.png') }}" 
                                alt="Logo clientes de Ocean print" 
                                width="175" 
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection

@push('scripts')
    @include('home.scripts.index')
@endpush