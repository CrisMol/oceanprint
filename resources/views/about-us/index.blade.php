@extends('layouts.app')

@push('styles')
    @include('about-us.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation">
            <div class="containerPresentationText">
                <h1 class="text-center text-gradient energetic-pink">
                    Nosotros
                </h1>
                <p class="text-center">
                    <strong>Oceanprint</strong> se ha ganado el reconocimiento de todos sus clientes, no solo por su excelente trabajo, calidad excepcional y entregas puntuales, si no por la pasión de aceptar y mejorar ideas para crear soluciones de impresión que realmente reflejen su visión y resuenen con su audiencia.
                </p>
            </div>
            <div class="containerPresentationImage">
                <img 
                    class="image-presentation"
                    src="{{ asset('images/nosotros/presentacion.jpg') }}" 
                    alt="Nosotros OceanPrint"
                    width="1920"
                    height="600"
                >
            </div>
        </section>

        <section class="container container-advantages">
            <div class="containerAdvantagesColumns">
                <div class="column">
                    <div class="containerTitleAdvantages">
                        <h3>
                            <span class="text-gradient soft-pink">Impulsando Empresas</span> con Calidad y Confianza
                        </h3>
                    </div>
                    <div class="containerImageAdvantages">
                        <img 
                            class="image-presentation"
                            src="{{ asset('images/nosotros/empleada.jpg') }}" 
                            alt="Diseñadora Oceanprint"
                            width="600"
                            height="500"
                            loading="lazy"
                        >
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
    </main>
@endsection

@push('scripts')
    @include('about-us.scripts.index')
@endpush