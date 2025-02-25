@extends('layouts.app')

@push('styles')
    @include('contact.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-presentation" id="presentation" data-menu-navigation="Leyenda">
            <img 
                class="image-background-contact"
                src="{{ asset('images/contacto/paleta-de-colores.jpg') }}" 
                alt="Paleta de colores"
                width="1500"
                height="1000"
            >
            <div class="containerPresentationText">
                <h1 class="text-center text-gradient bright-light">
                    Contáctanos
                </h1>
                <p class="text-center">
                    Bienvenido a <strong>Oceanprint</strong>. Somos una imprenta profesional y confiable que ofrece una gama amplia de servicios de impresión.
                    <br>
                    <span class="text-gradient soft-pink titleOption">Puedes escoger una de las siguientes opciones!</sapan>
                </p>
                <div class="containerContactCards">
                    <div class="containerContactCard">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 12a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0 2c-6 0-10 3-10 6v2h20v-2c0-3-4-6-10-6z"/>
                        </svg>
                        <a href="#">
                            Contactar a gerencia
                        </a>
                    </div>
                    <div class="containerContactCard">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm-1.4 3L12 13 5.4 7H18.6zM4 18v-9l8 6 8-6v9H4z"/>
                        </svg>
                        <a href="#formContact">
                            Enviar un correo
                        </a>
                    </div>
                    <div class="containerContactCard">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2C8.1 2 5 5.1 5 9c0 3.9 4.4 9.5 6.3 11.8a1 1 0 0 0 1.4 0C14.6 18.5 19 12.9 19 9c0-3.9-3.1-7-7-7zm0 17c-1.8-2.2-5-6.6-5-10 0-2.8 2.2-5 5-5s5 2.2 5 5c0 3.4-3.2 7.8-5 10zm0-12a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                        <a href="#location">
                            Ver dirección
                        </a>
                    </div>
                </div>                
            </div>
        </section>

        <section class="container container-form" id="formContact" data-menu-navigation="Formulario">
            <div class="containerFormContent">
                <div class="column">
                    <div class="containerTitleForm">
                        <h3>
                            <span class="text-gradient energetic-pink">Escríbenos </span>todos los detalles
                        </h3>
                        <p>
                            Valoramos tu tiempo, te responderemos lo más pronto posible, puedes escribirnos tu número de contacto para tener una comunicación más directa.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="containerForm">
                        <form action="" method="POST">
                            <input type="text" name="name" placeholder="Tu nombre" required>
                            <input type="email" name="email" placeholder="Tu correo electrónico" required>
                            <textarea name="message" rows="4" placeholder="Tu mensaje..." required></textarea>
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
                <div class="column">
                    <div class="containerTitle">
                        <h3>
                            Ubicación
                        </h3>
                        <div class="contactInfo">
                            <div class="info-item">
                                <div class="containerSvg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z"/></svg>
                                </div>
                                <span class="info-text">OE5 MEXICO N15-46 Y BUENOS AIRES, Quito, Ecuador</span>
                            </div>
                            <div class="info-item">
                                <div class="containerSvg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.6 10.8c1.2 2.8 3.6 5.2 6.4 6.4l2.1-2.1c.2-.2.5-.3.8-.2 1 .3 2 .5 3 .5.4 0 .7.3.7.7V20c0 .4-.3.7-.7.7-9.2 0-16.7-7.5-16.7-16.7 0-.4.3-.7.7-.7h4.1c.4 0 .7.3.7.7 0 1 .2 2 .5 3 .1.3 0 .6-.2.8l-2.1 2.1z"/></svg>
                                </div>
                                <span class="info-text">096 233 0296</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="containerMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.791637034951!2d-78.50827449798676!3d-0.20954685564349274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59b9ab1e310b9%3A0xd98a232c6297d2f7!2sOCEAN%20PRINT!5e0!3m2!1ses!2sec!4v1740266402805!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-faq" id="faq" data-menu-navigation="Preguntas frecuentes">
            <div class="containerTitleFAQ text-center">
                <h3>
                    <span class="text-gradient energetic-pink">Preguntas</span> frecuentes
                </h3>
                <p>
                    Confía en Oceanprint y haz que tus proyectos logren una impresión de calidad.
                </p>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @include('contact.scripts.index')
@endpush