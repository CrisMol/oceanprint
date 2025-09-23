@extends('layouts.app')

@push('styles')
    @include('contact.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation" id="presentation" data-menu-navigation="Leyenda">
            <picture>
                <source 
                    media="(max-width: 767px)" 
                    srcset="{{ asset('images/contacto/paleta-de-colores-oceanprint-800.webp') }}"
                >
                            
                <img 
                    class="image-background-contact"
                    src="{{ asset('images/contacto/paleta-de-colores-oceanprint-1920.webp') }}" 
                    alt="Paleta de colores como fondo"
                    width="1920"
                    height="1280"
                >
            </picture>
            <div class="containerPresentationText">
                <h1 class="text-center text-gradient bright-light">
                    Contáctanos
                </h1>
                <p class="text-center">
                    Bienvenido a <strong>Oceanprint</strong>. Somos una imprenta profesional y confiable que ofrece una gama amplia de servicios de impresión.
                    <br>
                </p>
                <div class="containerContactCards">
                    <a href="https://api.whatsapp.com/send/?phone=593963639728&text=Hola%2C+me+gustar%C3%ADa+m%C3%A1s+informaci%C3%B3n.&type=phone_number&app_absent=0" target="_blank" class="containerContactCard">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 12a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0 2c-6 0-10 3-10 6v2h20v-2c0-3-4-6-10-6z"/>
                        </svg>
                    </a>
                    <a href="#formContact" class="containerContactCard">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm-1.4 3L12 13 5.4 7H18.6zM4 18v-9l8 6 8-6v9H4z"/>
                        </svg>
                    </a>
                    <a href="#location" class="containerContactCard">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2C8.1 2 5 5.1 5 9c0 3.9 4.4 9.5 6.3 11.8a1 1 0 0 0 1.4 0C14.6 18.5 19 12.9 19 9c0-3.9-3.1-7-7-7zm0 17c-1.8-2.2-5-6.6-5-10 0-2.8 2.2-5 5-5s5 2.2 5 5c0 3.4-3.2 7.8-5 10zm0-12a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                    </a>
                </div>                
            </div>
        </section>

        <section class="container container-form" id="formContact" data-menu-navigation="Formulario">
            <div class="containerFormContent">
                <div class="column">
                    <div class="containerImage">
                        <picture>
                            <source 
                                media="(max-width: 767px)" 
                                srcset="{{ asset('images/contacto/asesora-comercial-de-ventas-oceanprint-750.webp') }}"
                            >
                            
                            <img 
                                class="image-presentation"
                                src="{{ asset('images/contacto/asesora-comercial-de-ventas-oceanprint-960.webp') }}" 
                                alt="Asesora comercial oceanprint"
                                width="960"
                                height="1140"
                                loading="lazy"
                            >
                        </picture>
                    </div>
                </div>
                <div class="column center">
                    <div class="containerForm">
                        <div class="containerTitleForm scroll-section">
                            <h3 class="scroll-animate">
                                <span class="text-gradient bright-light">Escríbenos </span>todos los detalles
                            </h3>
                        </div>
                        @if(session('success'))
                            <span class="successForm">{{ session('success') }}</span>
                        @endif

                        <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            {{-- Nombre --}}
                            <input 
                                type="text" 
                                name="name" 
                                placeholder="Tu nombre" 
                                value="{{ old('name') }}" 
                                required
                            >
                            <span class="errorForm">
                                @error('name') {{ $message }} @enderror
                            </span>

                            {{-- Email --}}
                            <input 
                                type="email" 
                                name="email" 
                                placeholder="Tu correo electrónico" 
                                value="{{ old('email') }}" 
                            >
                            <span class="errorForm">
                                @error('email') {{ $message }} @enderror
                            </span>

                            {{-- Teléfono --}}
                            <input 
                                type="tel" 
                                name="phone" 
                                placeholder="Tu número de teléfono" 
                                value="{{ old('phone') }}" 
                                pattern="^[0-9+\-\s]+$"
                                required
                            >
                            <span class="errorForm">
                                @error('phone') {{ $message }} @enderror
                            </span>

                            {{-- Mensaje --}}
                            <textarea 
                                name="message" 
                                rows="4" 
                                placeholder="Tu mensaje..." 
                                required
                            >{{ old('message') }}</textarea>
                            <span class="errorForm">
                                @error('message') {{ $message }} @enderror
                            </span>

                            <button type="submit">Enviar</button>
                        </form>
                    </div>  
                </div>
            </div>
        </section>

        <div class="containerScrollTitle">
            <h5 class="scroll-title">
                Trabajos personalizados con envíos a todo el Ecuador
            </h5>
        </div>

        <section class="container container-location" id="location" data-menu-navigation="Ubicación">
            <div class="containerLocationContent">
                <div class="containerMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.791637034951!2d-78.50827449798676!3d-0.20954685564349274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59b9ab1e310b9%3A0xd98a232c6297d2f7!2sOCEAN%20PRINT!5e0!3m2!1ses!2sec!4v1740266402805!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section class="container container-faq" id="faq" data-menu-navigation="Preguntas frecuentes">
            <div class="containerTitleFAQ text-center scroll-section">
                <h3 class="scroll-animate">
                    <span class="text-gradient bright-light">Preguntas</span> frecuentes
                </h3>
                <p>
                    Confía en Oceanprint y haz que tus proyectos logren una impresión de calidad.
                </p>
            </div>
            <div class="containerAccordionFAQ">
                <div class="tab">
                    <input type="radio" name="acc" id="acc1">
                    <label for="acc1">
                        <h2>
                            01
                        </h2>
                        <h5>
                            ¿Cómo hago un pedido?
                        </h5>
                    </label>
                    <div class="contentFAQ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero quis earum pariatur animi aspernatur, eum ipsa maxime consectetur nam numquam non. Odio tenetur hic voluptatum ipsam est corporis? In.
                        </p>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="acc" id="acc2">
                    <label for="acc2">
                        <h2>
                            02
                        </h2>
                        <h5>
                            ¿Qué métodos de pago aceptan?
                        </h5>
                    </label>
                    <div class="contentFAQ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero quis earum pariatur animi aspernatur, eum ipsa maxime consectetur nam numquam non. Odio tenetur hic voluptatum ipsam est corporis? In.
                        </p>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="acc" id="acc3">
                    <label for="acc3">
                        <h2>
                            03
                        </h2>
                        <h5>
                            ¿Cuál es su política de devolución?
                        </h5>
                    </label>
                    <div class="contentFAQ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero quis earum pariatur animi aspernatur, eum ipsa maxime consectetur nam numquam non. Odio tenetur hic voluptatum ipsam est corporis? In.
                        </p>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="acc" id="acc4">
                    <label for="acc4">
                        <h2>
                            04
                        </h2>
                        <h5>
                            ¿Los diseños son personalizados?
                        </h5>
                    </label>
                    <div class="contentFAQ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero quis earum pariatur animi aspernatur, eum ipsa maxime consectetur nam numquam non. Odio tenetur hic voluptatum ipsam est corporis? In.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @include('contact.scripts.index')
@endpush