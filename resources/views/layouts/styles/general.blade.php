<style>
    :root {
    --bright-blue: #05AFF2; /* Azul Brillante */
    --bright-pastel-blue: #def6ff; /* Azul Brillante */
    --black-blue: #0688bb; /* Azul Brillante */
    --deep-black: #0D0D0D; /* Negro Profundo */
    --warm-black: #262626; /*Negro cálido*/
    --neutral-gray: #838383; /*Gris neutro*/
    --energetic-pink: #F20587; /* Rosa Energético */
    --calm-turquoise: #03A6A6; /* Turquesa Calmante */
    --vibrant-yellow: #F2CB05; /* Amarillo Vibrante */
    --soft-pink: #F177BA; /* Rosa Suave */
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ul, ol {
        list-style: none;
        color: var(--neutral-gray);
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .container {
        padding: 5rem;
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
</style>