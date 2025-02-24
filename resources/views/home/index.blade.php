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
            />
        </section>

        <section class="products" style="--width: 300px; --height: 500px; --imageQuantity: 4">
            @include('home.section.products-infinite')
        </section>

        <section class="container container-steps" id="steps" data-menu-navigation="Proceso">
            <div class="row-subheading-center text-center">
                <h2>
                    Nuestro proceso
                </h2>
            </div>
            @include('home.section.steps')
        </section>

        <section class="container container-brands" id="brands" data-menu-navigation="Marcas">
            @include('home.section.brands')
        </section>

        <section class="container container-kits" id="kits" data-menu-navigation="Kits">
            <x-sub-heading-row 
                title="Kits" 
                subtitle="Profesionales" 
                description="Escoge o crea el kit que mejor se adapte a tu marca."
            />
            @include('home.section.kits')
        </section>

        <div class="logo-slider">
            <h5 class="titleLogos">Aliados que llevan su imagen al siguiente nivel</h5>
            <div class="logos-slide">
                <div class="slide">
                    <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
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