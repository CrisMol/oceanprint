<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oceanprint - Próximamente</title>

    <!-- Meta descripción para SEO -->
    <meta name="description" content="Oceanprint - Estamos renovando nuestro sitio web para ofrecerte mejores servicios e impresión de alta calidad. Muy pronto estaremos de vuelta.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo-sin-texto.png') }}">

    <!-- Meta social (Open Graph para Facebook y LinkedIn) -->
    <meta property="og:title" content="Oceanprint - Próximamente">
    <meta property="og:description" content="Estamos renovando nuestro sitio web. Vuelve pronto para conocer nuestras novedades.">
    <meta property="og:image" content="{{ asset('images/mantenimiento/comming-soon-desktop.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://oceanprintec.com">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap');

        :root {
            --slide-count: 4;
            --slide-height: 400px;
            --slide-width: 200px;
            --gap: 7px;
            --time: 15s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        body {
            height: 100vh;
            font-family: "Nunito", sans-serif;
        }

        section {
            display: grid;
            grid-template-columns: 50% 50%;
            place-items: center;
            height: 100vh;
            background: linear-gradient(135deg, rgba(5, 175, 242, 0.8), rgba(241, 119, 186, 0.3));
            overflow: hidden;
        }

        .sliders {
            display: flex;
            gap: 35px;
            transform: rotate(8deg);
        }

        .slider-container {
            width: var(--slide-width);
            height: 100vh;
            background: transparent;
            position: relative;
        }

        .slider-track {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 0;
            animation: moveUp calc(var(--time) * var(--slide-count)) linear infinite;
        }

        #slider2 .slider-track {
            animation: moveDown calc(var(--time) * var(--slide-count)) linear infinite;
        }

        .slide {
            width: var(--slide-width);
            height: var(--slide-height);
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                rgba(255,255,255,0.1),
                transparent,
                rgba(255,255,255,0.1)
            );
            border: 1px solid rgba(255,255,255,0.3);
            margin: var(--gap) 0;
        }

        .slide img {
            border-radius: inherit;
        }

        @keyframes moveUp {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(
                    calc(-1 * var(--slide-count) * (var(--slide-height) + var(--gap) * 2))
                );
            }
        }

        @keyframes moveDown {
            0% {
                transform: translateY(
                    calc(-1 * var(--slide-count) * (var(--slide-height) + var(--gap) * 2))
                );
            }
            100% {
                transform: translateY(0);
            }
        }

        .content {
            color: rgb(207,207,207);
            margin-left: 80px;
            padding: 20px;
            border-radius: 30px;
            position: relative;
            z-index: 2;
            background: rgba(0,0,0,0.7);
            color: #e3e2e5;
        }

        .content h1 {
            font-family: "Old Standard TT", serif;
            width: max-content;
            font-size: clamp(2rem, 4vw, 6rem);
            letter-spacing: 2px;
            margin-bottom: 30px;
            background: #21ad67;
            background-image: linear-gradient(to right, #00a0e6, #90d9f8, #00a0e6);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            z-index: 3;
            text-align: center;
        }

        .content p {
            font-size: clamp(1rem, 2vw, 1.4rem);
            font-weight: 500;
            max-width: 600px;
            line-height: 1.5;
            color: #fff;
            text-align: center;
        }

        .content-image-bg {
            position: absolute;
            bottom: 40px;
            left: calc(50% - 175px);
            transform: translateX(calc(50% - 175px));
            width: 175px;
            height: auto;
            opacity: 0.38;
        }

        .content-image-bg.bottom {
            width: 200px;
            top: inherit;
            bottom: 15px;
            left: 80px;
            transform: none;
        }

        .content-image-bg.right {
            top: 50%;
            left: 50%;
            width: 200px;
            bottom: inherit;
            transform: translate(-50%,-50%);
        }

        .qr {
            position: absolute;
            right: 10px;
            top: 10px;
            width: auto;
            height: 100px;
            filter: invert(1);
        }

        .logo {
            position: absolute;
            width: auto;
            height: 120px;
            left: 50%;
            transform: translateX(-50%);
            top: -120px;
        }

        .logo.white {
            display: none;
        }
        
        /* Pantallas grandes */
        @media screen and (min-width: 1601px) {
            :root {
                --slide-height: 375px;
                --slide-width: 375px;
            }
            
            .logo {
                height: 180px;
                top: -180px;  
            }
            
            .content {
                margin-left: -50px;
            }
        }

        @media (max-width: 1500px) {
            :root {
                --slide-height: 300px;
                --slide-width: 200px;
            }

            section {
                grid-template-columns: 45% 55%;
            }

            .sliders {
                gap: 15px;
            }
        }

        @media (max-width: 1200px) {
            :root {
                --slide-height: 300px;
                --slide-width: 150px;
            }

            section {
                grid-template-columns: 40% 60%;
            }

            .content {
                padding-left: 20px;
            }

            .content h1 {
                text-align: left;
            }

            .logo {
                left: 100px;
            }

            .qr {
                top: -50px;
            }
        }

        @media (max-width: 850px) {
            :root {
                --slide-height: 350px;
                --slide-width: 180px;
            }

            section {
                grid-template-columns: 100%;
            }

            .sliders {
                gap: 35px;
            }

            .content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                background: rgba(0,0,0,0.7);
                color: #e3e2e5;
                padding: 40px;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                border-radius: 30px;
                margin: 0;
            }

            .content h1 {
                text-align: center;
            }

            .content p {
                box-lines: 1.3;
            }

            .qr {
                display: none;
            }

            .logo {
                display: none;
            }

            .logo.white {
                display: inline-block;
                position: relative;
                top: 0;
                left: 0;
                margin-bottom: 20px;
                height: 70px;
                transform: none;
            }

            .content-image-bg {
                display: none;
            }
        }

        @media (max-width: 650px) {
            :root {
                --slide-height: 175px;
                --slide-width: 175px;
            }

            .sliders {
                gap: 15px;
            }
        }

        @media (max-width: 350px) {
            .content {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <section>
        <div class="content-image-bg">
            <img src="{{ asset('images/marcas/infinity-300.png') }}" alt="">
        </div>
        <div class="content-image-bg bottom">
            <img src="{{ asset('images/marcas/dreams.png') }}" alt="">
        </div>
        <div class="content-image-bg right">
            <img src="{{ asset('images/logo/logo-blanco.png') }}" alt="">
        </div>
        <div class="content">
            <img class="logo" src="{{ asset('images/logo/logo-oficial-oceanprint.png') }}" alt="">
            <img class="logo white" src="{{ asset('images/logo/logo-blanco.png') }}" alt="">
            <h1>
                Se acerca <br>¡algo increíble!
            </h1>
            <p>
                Muy pronto descubrirás una experiencia única que cambiará la forma en que disfrutas nuestros productos. 
            </p>
            <img class="qr" src="{{ asset('images/mantenimiento/qr.png') }}" alt="">
        </div>
        <div class="sliders">
            <div class="slider-container" id="slider1">
                <div class="slider-track">
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/agendas-clasicas.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/carnet-veterinario.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/carpetas-uv-brillo.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/roll-up.jpg') }}" 
                            alt=""
                        >
                    </div>
                </div>
            </div>

            <div class="slider-container" id="slider2">
                <div class="slider-track">
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/tarjetas-de-presentacion.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/tarjetas-de-presentacion-oro.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/tazas-cromadas.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/agendas-clasicas.jpg') }}" 
                            alt=""
                        >
                    </div>
                </div>
            </div>

            <div class="slider-container" id="slider3">
                <div class="slider-track">
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/tomatodo-metalico.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/volantes.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/placas.jpg') }}" 
                            alt=""
                        >
                    </div>
                    <div class="slide">
                        <img 
                            src="{{ asset('images/mantenimiento/carnet-veterinario.jpg') }}" 
                            alt=""
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
    <script>
        function duplicateSlides(sliderId) {
            const sliderTrack = document.querySelector(`#${sliderId} .slider-track`);
            const slides = Array.from(sliderTrack.children);
            slides.forEach((slide) => {
                const clone = slide.cloneNode(true);
                sliderTrack.appendChild(clone);
            });
        }

        duplicateSlides("slider1");
        duplicateSlides("slider2");
        duplicateSlides("slider3");

        function launchConfetti() {
            const colors = ["#e63946", "#a8dadc", "#1d3557"];

            setInterval(() => {
                confetti({
                    particleCount: 3,
                    angle: 90,
                    spread: 50,
                    startVelocity: 20,
                    ticks: 1000,
                    gravity: 0.3,
                    origin: { x: Math.random(), y: 0},
                    colors
                });
            }, 200);
        }

        window.addEventListener("load", launchConfetti);
    </script>
</body>
</html>