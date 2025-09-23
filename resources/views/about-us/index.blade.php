@extends('layouts.app')

@push('styles')
    @include('about-us.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation" id="presentation" data-menu-navigation="Leyenda">
            <div class="containerPresentationText">
                <h1 class="text-center color-white">
                    Nosotros
                </h1>
                <p class="text-center color-white">
                    <strong>Oceanprint</strong> se ha ganado el reconocimiento de todos sus clientes, no solo por su excelente trabajo, calidad excepcional y entregas puntuales, si no por la pasión de aceptar y mejorar ideas para crear soluciones de impresión que realmente reflejen su visión y resuenen con su audiencia.
                </p>
            </div>
            <div class="containerPresentationImage">
                <picture>
                    <source 
                        media="(max-width: 767px)" 
                        srcset="{{ asset('images/nosotros/equipo-de-trabajo-oceanprint-800.webp') }}"
                    >
                    
                    <img 
                        class="image-presentation"
                        src="{{ asset('images/nosotros/equipo-de-trabajo-oceanprint-1920.webp') }}" 
                        alt="Nuestro equipo de trabajo en OceanPrint"
                        width="1920"
                        height="1281"
                        fetchpriority="high"
                    >
                </picture>
            </div>
        </section>

        <section class="container container-advantages" id="advantages" data-menu-navigation="Ofrecemos">
            <div class="containerAdvantagesColumns">
                <div class="column">
                    <div class="containerTitleAdvantages">
                        <h3 class="animated-title">
                            <span class="text-gradient soft-pink word first">Impulsando Empresas</span> <span class="word second">
                                con Calidad y Confianza
                            </span>
                        </h3>
                    </div>
                    <div class="containerImageAdvantages">
                        <picture>
                            <source 
                                media="(max-width: 767px)" 
                                srcset="{{ asset('images/nosotros/emprendedora-de-negocio-750.webp') }}"
                            >
                            
                            <img 
                                class="image-presentation"
                                src="{{ asset('images/nosotros/emprendedora-de-negocio-960.webp') }}" 
                                alt="Emprendedora de negocio, jefa"
                                width="960"
                                height="640"
                                loading="lazy"
                            >
                        </picture>
                    </div>
                </div>
                <div class="column">
                    <div class="containerTextAdvantages">
                        <p>
                            Productos y servicios de calidad realizados con la más alta tecnología y adaptados a cada necesidad específica. Nos enfocamos en lograr los más altos estándares de impresión con materiales amigables al medio ambiente, seguros y con garantía.
                        </p>
                        <ul>
                            <li>Asesoramiento profesional</li>
                            <li>Impresiones de máxima calidad</li>
                            <li>Envíos a todo el Ecuador</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-numbers" id="container-numbers" data-menu-navigation="Nuestros números">
            <div class="containerTitle text-center scroll-section">
                <h3 class="scroll-animate">
                    Los mejores <span class="text-gradient bright-light">precios y servicios</span>
                </h3>
            </div>
            <div class="containerNumbersCards">
                <div class="cardNumber">
                    <div class="number">
                        <span>
                            +
                        </span>
                        <span class="digit">
                            1500
                        </span>
                    </div>
                    <div class="text">
                        <p>
                            Ayúdamos a mas de 1500 negocios en todo el Ecuador
                        </p>
                    </div>
                </div>
                <div class="cardNumber">
                    <div class="number">
                        <span>
                            +
                        </span>
                        <span class="digit">
                            2600
                        </span>
                    </div>
                    <div class="text">
                        <p>
                            Más de 2600 proyectos completados
                        </p>
                    </div>
                </div>
                <div class="cardNumber">
                    <div class="number">
                        <span class="digit">
                            95
                        </span>
                        <span>
                            %
                        </span>
                    </div>
                    <div class="text">
                        <p>
                            Cobertura en más de 95% del territorio Ecuatoriano
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @include('about-us.scripts.index')
@endpush