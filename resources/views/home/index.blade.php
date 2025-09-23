@extends('layouts.app')

@push('styles')
    @include('home.styles.index')
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
                description="Bienvenidos a <strong>OceanPrint!</strong><br>
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
            <x-sub-heading-row 
                title="Soluciones" 
                subtitle="Empresariales" 
                description="Brindamos soluciones de impresión especializadas para negocios que desean proyectar una imagen profesional, organizada y de confianza."
                icon="solucion.png"
            />
            <div class="row">
                <div class="column">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/veterinaria.jpg') }}" alt="" width="600" height="600">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Veterinarias</h4>
                            <a class="buttonCTA" href="#">
                                Solicitar cotización
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerServicesBusiness">
                        <div class="card">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/carnet-de-vacunas.jpg') }}" alt="" width="200" height="200">
                            </div>
                            <div class="titleService">
                                <h6>Carnet de vacunas</h6>
                                <p>
                                    $1,99 c/u
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/kit-de-cedulacion-mascotas.jpg') }}" alt="" width="200" height="200">
                            </div>
                            <div class="titleService">
                                <h6>Kit de identificación</h6>
                                <p>
                                    $5,50 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="containerServicesBusiness">
                        <div class="card">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/impresion-de-libros.png') }}" alt="" width="200" height="200">
                            </div>
                            <div class="titleService">
                                <h6>Impresión de libros</h6>
                                <p>
                                    Por tipo, calidad y diseño
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="containerImageService">
                                <img src="{{ asset('images/negocios/credencial.png') }}" alt="" width="200" height="200">
                            </div>
                            <div class="titleService">
                                <h6>Credenciales</h6>
                                <p>
                                    $2,49 c/u
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerImageBusiness">
                        <img src="{{ asset('images/negocios/colegios.jpg') }}" alt="" width="600" height="600">
                        <div class="containerDescriptionBusiness">
                            <h4 class="titleCTA">Instituciones Educativas</h4>
                            <a class="buttonCTA" href="#">
                                Solicitar cotización
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="logo-slider" id="aliance">
            <div class="swiper swiper-logo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" 
                            alt="Logo OceanPrint" 
                            width="200" 
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <section class="container container-testimonials" id="testimonials" data-menu-navigation="¿Porqué Nosotros?">
            @include('home.section.testimonials')
        </section>
    </main>
@endsection

@push('scripts')
    @include('home.scripts.index')
@endpush