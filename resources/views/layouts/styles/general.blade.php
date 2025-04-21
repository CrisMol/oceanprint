<style>
    :root {
        --bright-blue: #05AFF2; /* Azul Brillante */
        --bright-pastel-blue: #def6ff; /* Azul Brillante */
        --bright-crem-blue: #6EC1E4;
        --black-blue: #0688bb; /* Azul Brillante Oscuro */
        --deep-black: #0D0D0D; /* Negro Profundo */
        --warm-black: #262626; /*Negro cálido*/
        --neutral-gray: #414141; /*Gris neutro*/
        --energetic-pink: #F20587; /* Rosa Energético */
        --black-energetic-pink: #a8055f; /* Rosa Energético Oscuro*/
        --calm-turquoise: #03A6A6; /* Turquesa Calmante */
        --vibrant-yellow: #F2CB05; /* Amarillo Vibrante */
        --soft-pink: #F177BA; /* Rosa Suave */
        --soft-crem-pink: #facde6;
        --fresh-lime-green: #32CD32;

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
    }

    .container {
        padding: min(5rem, 5vw);
        position: relative;
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
</style>