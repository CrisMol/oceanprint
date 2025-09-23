<style>
    :root {
        --bright-blue: #05AFF2; /* Azul Brillante */
        --bright-pastel-blue: #def6ff; /* Azul Brillante */
        --bright-crem-blue: #6EC1E4;
        --black-blue: #0688bb; /* Azul Brillante Oscuro */
        --deep-black: #0D0D0D; /* Negro Profundo */
        --warm-black: #262626; /*Negro cálido*/
        --neutral-gray: #414141; /*Gris neutro*/
        --neutral-gray-background: #f0efef;
        --energetic-pink: #F20587; /* Rosa Energético */
        --black-energetic-pink: #a8055f; /* Rosa Energético Oscuro*/
        --calm-turquoise: #03A6A6; /* Turquesa Calmante */
        --vibrant-yellow: #F2CB05; /* Amarillo Vibrante */
        --soft-pink: #F177BA; /* Rosa Suave */
        --soft-crem-pink: #facde6;
        --fresh-lime-green: #32CD32;

        --deep-ocean-blue: #097099; /* Azul Océanico */

        --border-radius: 20px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    body {
        transition: background-color 0.5s ease;
    }

    ul, ol {
        list-style: none;
        color: var(--neutral-gray);
    }

    p {
        color: var(--warm-gray);
        line-height: 1.5em;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    img {
        max-width: 100%;
    }

    textarea {
        resize: none;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .container {
        padding: min(5rem, 5vw);
        position: relative;
    }

    .text-white {
        color: #fff;
    }

    .container .text-container-main {
        position: relative;
        width: 100%;
        text-align: center;
    }

    .container .text-container-main .text-container-small {
        color: var(--soft-pink);
        font-size: 0.87rem;
    }

    .container .text-container-main .text-container-big {
        position: relative;
        width: 100%;
        padding: 0 2rem;
        display: flex;
    }

    .line {
        position: relative;
        margin-top: 10px;
        height: 1px;
        background-color: var(--energetic-pink);
        transform: translateY(-50%);
    }

    .left {
        width: 39%;
    }

    .text-big-center {
        width: 30%;
    }

    .right {
        width: 39%;
    }

    .text-center {
        text-align: center;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .scroll-reveal-text span {
        color: hsl(0 0% 100% / 0.2);
        background-clip: text;
        background-repeat: no-repeat;
        background-size: 0% 100%;
        background-image: linear-gradient(90deg, white, white);
        animation: scroll-reveal 5s linear forwards;
        animation-timeline: view(y);
    }

    .scroll-reveal-text.dark span {
        color: hsl(0deg 0.18% 47.31% / 20%);
        background-image: linear-gradient(90deg, var(--neutral-gray), var(--neutral-gray));
    }

    .scroll-reveal-text p span {
        animation-range-start: cover 15vh;
        animation-range-end: cover 77vh;
    }

    /**
    * Gradientes
    **/
    .text-gradient {
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .text-gradient.bright-light {
        background-image: linear-gradient(100deg, var(--black-blue), var(--bright-blue) 34%, var(--bright-blue) 69%, var(--black-blue));
    }

    .text-gradient.energetic-pink {
        background-image: linear-gradient(100deg, var(--black-energetic-pink), var(--energetic-pink) 34%, var(--energetic-pink) 69%, var(--black-energetic-pink));
    }

    .text-gradient.soft-pink {
        background-image: linear-gradient(100deg, #f859b1, var(--soft-pink) 34%, var(--soft-pink) 69%, #f859b1);
    }

    @keyframes scroll-reveal {
        to {
            background-size: 100% 100%;
        }
    }

    @media (max-width: 768px) {
        .row-subheading {
            flex-direction: column;
            text-align: center;
        }

        .row-subheading .description p {
            text-align: center;
        }
    }

    /**
    * Animaciones 
    */
    .scroll-animate {
        transform: translateY(50px);
        opacity: 0;
        transition: all 1s ease-out;
    }

    .scroll-animate.visible {
        transform: translateY(0);
        opacity: 1;
    }

    /**
    * Redes sociales
    **/
    .social-floating {
        position: fixed;
        left: 0;                      
        top: 50%;
        transform: translate(-120%, -50%);
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 3px;  
        background-color: var(--deep-black);   
        border-top-right-radius: var(--border-radius);    
        border-bottom-right-radius: var(--border-radius);
        overflow: hidden;  
        opacity: 0;
        transition: transform 0.6s ease, opacity 0.6s ease;
    }

    .social-floating.show {
        transform: translate(0, -50%);
        opacity: 1;
    }

    /* Cada botón */
    .social-floating a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        text-decoration: none;
        color: #fff;
    }

    .social-floating a i {
        width: 20px;
        height: 20px;
        line-height: 20px;
        font-size: 18px;
        text-align: center;
    }

    /* hover: resaltar y hacer un pequeño desplazamiento a la derecha */
    .social-floating a:hover {
        background: rgba(255,255,255,0.12);
        box-shadow: 0 6px 14px rgba(0,0,0,0.28);
    }

    /* texto accesible oculto (screen readers) */
    .sr-only {
        position: absolute !important;
        width: 1px; height: 1px;
        padding: 0; margin: -1px; overflow: hidden;
        clip: rect(0,0,0,0); white-space: nowrap; border: 0;
    }

    .animated-title {
        overflow: hidden;
    }

    .animated-title span {
        background: linear-gradient(90deg, var(--bright-blue), #00a2b0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .animated-title.white span {
        background: #fff;
        -webkit-background-clip: text;
    }

    .description {
        position: relative;
        padding: 0.85rem;
        border-radius: var(--border-radius);
    }

    .description .container-description {
        position: relative;
        padding: 1rem;
        background: linear-gradient(
            135deg,
            rgba(5, 175, 242, 0.3),
            rgba(241, 119, 186, 0.3)
        );
        -webkit-backdrop-filter: blur(10px); /* Para compatibilidad con Safari */
        border-radius: var(--border-radius);
        overflow: hidden;
        transition: 1s;
    }

    .description .container-description p {
        position: relative;
        z-index: 3;
    }

    .description .container-description .ripple {
        position: absolute;
        width: 5px;
        height: 5px;
        transform: translate(-50%, -50%);
        background: radial-gradient(circle, rgba(5, 175, 242, 0.5) 0%, transparent 70%);
        animation: ripple 0.8s ease-out forwards;
    }

    .animated-title .word {
        display: inline-block;
        opacity: 0;
        transform: translateX(100%);
        transition: transform 1s ease, opacity 1s ease;
    }

    .animated-title.show .first {
        opacity: 1;
        transform: translateX(0);
    }

    .animated-title.show .second {
        opacity: 1;
        transform: translateX(0);
        transition-delay: 0.3s;
    }

    @keyframes ripple 
    {
        0% 
        {
            width: 0px;
            height: 0px;
            opacity: 1;
        }
        100%
        {
            width: 200px;
            height: 200px;
            opacity: 0;
        }
    }

    @media (max-width: 768px) {
        .social-floating {
            display: none;
        }
    }
</style>