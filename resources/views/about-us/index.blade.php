@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/about.026.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive/about.026.css') }}">
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation" id="presentation" data-menu-navigation="Leyenda">
            <div class="containerPresentationText">
                <h1 class="text-center text-white">
                    Nosotros
                </h1>
                <p class="text-center text-white">
                    <strong>OCEAN PRINT</strong>, es una empresa que te ofrece gran variedad de productos que se encuentran destinados a distintos giros de negocios, además de soluciones eficientes e integrales con respecto a Impresión Digital, Offset y de Gran Formato, además que contamos con un acompañamiento íntegro en cada una de las etapas de tu compra consolidando nuestro compromiso y calidad en la entrega de tus productos. 
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

        <section class="container container-about" id="about">
            <div class="containerTitleAdvantages">
                <h3 class="animated-title text-center">
                    <span class="word first">Impulsando Empresas</span>
                    <br> 
                    <span class="word second">
                        con Calidad y Confianza
                    </span>
                </h3>
            </div>
            <div class="container-cards">
                <div class="cards scroll-section">
                    <div class="icon">
                        <img 
                            class="scroll-animate"
                            src="{{ asset('images/nosotros/mission.png') }}" 
                            alt="Mision Ocean print"
                            width="128"
                            height="128"
                            loading="lazy"
                        >
                    </div>
                    <div class="content">
                        <div class="text">
                            <h2 class="scroll-animate">Misión</h2>
                            <p class="scroll-animate">Ofrecer soluciones de impresión de la más alta calidad, combinando criterios profesionales de impresión y tecnología avanzada para garantizar productos nítidos, duraderos y visualmente impactantes. Nuestro compromiso con nuestros clientes es real, buscando satisfacer las necesidades y cumplir con excelencia cada proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="cards scroll-section">
                    <div class="icon">
                        <img 
                            class="scroll-animate"
                            src="{{ asset('images/nosotros/vision.png') }}" 
                            alt="Visión Ocean print"
                            width="128"
                            height="128"
                            loading="lazy"
                        >
                    </div>
                    <div class="content">
                        <div class="text">
                            <h2 class="scroll-animate">Visión</h2>
                            <p class="scroll-animate">Ser reconocidos a nivel nacional como la imprenta líder en calidad de impresión, innovando constantemente en tecnología y diseño, para convertirnos en los aliados confiables de empresas y emprendedores que buscan destacar con productos de gran impacto visual y una impresión impecable.</p>
                        </div>
                    </div>
                </div>
                <div class="cards scroll-section">
                    <div class="icon">
                        <img 
                            class="scroll-animate"
                            src="{{ asset('images/nosotros/values.png') }}" 
                            alt="Valores Ocean print"
                            width="128"
                            height="128"
                            loading="lazy"
                        >
                    </div>
                    <div class="content">
                        <div class="text">
                            <h2 class="scroll-animate">Valores</h2>
                            <ol class="scroll-animate">
                                <li>
                                    Asesoramiento al cliente
                                </li>
                                <li>
                                    Creatividad
                                </li>
                                <li>
                                    Compromiso con el cliente
                                </li>
                                <li>
                                    Calidad y cumplimiento
                                </li>
                                <li>
                                    Integridad
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-difference" id="difference">
            <div class="container-row">
                <div class="column container-image">
                    <img 
                        class="image-presentation"
                        src="{{ asset('images/nosotros/que-nos-diferencia-equipo-ocean-print.webp') }}" 
                        alt="Que nos diferencia como equipo de Ocean print"
                        width="500"
                    >
                </div>
                <div class="column">
                    <div class="description-difference">
                        <h3 class="animated-title white">
                            <span class="word first">¿Qué nos diferencia?</span>
                        </h3>

                        <p class="text">
                            Entendemos perfectamente que cada cliente es un mundo y lo importante que es contar con todos sus productos adquiridos.
                        </p>
                    </div>

                    <ul class="difference-list">
                        <li>
                            <div class="number">
                                <p>
                                    01
                                </p>
                            </div>
                            <p>
                                Te ofrecemos productos con tonos correctos
                            </p>
                        </li>
                        <li>
                            <div class="number">
                                <p>
                                    02
                                </p>
                            </div>
                            <p>
                                Material de primera categoría 
                            </p>
                        </li>
                        <li>
                            <div class="number">
                                <p>
                                    03
                                </p>
                            </div>
                            <p>
                                Excelencia en los terminados y presentación
                            </p>
                        </li>
                        <li>
                            <div class="number">
                                <p>
                                    04
                                </p>
                            </div>
                            <p>
                                Responsabilidad con los tiempos de entrega acordados con el cliente
                            </p>
                        </li>
                        <li>
                            <div class="number">
                                <p>
                                    05
                                </p>
                            </div>
                            <p>
                                Nos orientamos a entregar propuestas de diseño que los diferencie de su competencia
                            </p>
                        </li>
                        <li>
                            <div class="number">
                                <p>
                                    06
                                </p>
                            </div>
                            <p>
                                Diseños únicos y espectaculares para los productos que adquieran
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container container-numbers" id="container-numbers" data-menu-navigation="Nuestros números">
            <div class="containerTitle text-center scroll-section">
                <h3 class="scroll-animate">
                    Los mejores <span class="">precios y servicios</span>
                </h3>
            </div>
            <div class="containerNumbersCards">
                <div class="cardNumber scroll-section">
                    <div class="number scroll-animate">
                        <span>
                            +
                        </span>
                        <span class="digit">
                            1500
                        </span>
                    </div>
                    <div class="text scroll-animate">
                        <p>
                            Ayúdamos a mas de 1500 negocios en todo el Ecuador
                        </p>
                    </div>
                </div>
                <div class="cardNumber scroll-section">
                    <div class="number scroll-animate">
                        <span>
                            +
                        </span>
                        <span class="digit">
                            2600
                        </span>
                    </div>
                    <div class="text scroll-animate">
                        <p>
                            Más de 2600 proyectos completados
                        </p>
                    </div>
                </div>
                <div class="cardNumber scroll-section">
                    <div class="number scroll-animate">
                        <span class="digit">
                            95
                        </span>
                        <span>
                            %
                        </span>
                    </div>
                    <div class="text scroll-animate">
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