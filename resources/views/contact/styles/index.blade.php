<style>
    .container-presentation {
        position: relative;
        height: 580px;
        background: linear-gradient(to bottom, var(--bright-blue) 0%, var(--bright-blue) 40%, rgba(5, 175, 242, 0.5) 65%, rgba(255, 255, 255, 0.8) 75%, #FFFFFF 100%);

    }

    .container-presentation::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.689);
    }

    .container-presentation img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container-presentation .containerPresentationText {
        position: relative;
        z-index: 2;
        margin-top: calc(130px - 5rem);
    }

    .container-presentation .containerPresentationText p {
        color: #fff;
    }

    .container-presentation .containerPresentationText .titleOption {
        font-weight: bold;
        font-size: 1.5rem;
    }

    /**
    * Iconos
    */
    .container-presentation .containerContactCards {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1.25rem;
        padding: 2rem;
    }

    .container-presentation .containerContactCards .containerContactCard {
        color: #fff;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .container-presentation .containerContactCards .containerContactCard:hover {
        transform: scale(1.1);
    }

    .container-presentation .containerContactCards .containerContactCard svg {
        width: 27px;
        height: 27px;
        fill: #007bff;
    }

    .container-presentation .containerContactCards .containerContactCard a {
        position: absolute;
        bottom: -30px;
        color: white;
        padding: 3px 8px;
        border-radius: 5px;
        font-size: 1.15rem;
        white-space: nowrap;
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .container-presentation .containerContactCards .containerContactCard:hover a {
        opacity: 1;
        transform: translateY(0);
    }

    /**
    * Formulario
    **/
    .container-form .containerFormContent {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .container-form .containerForm {
        padding: 0 min(5vw, 3rem);
        width: 100%;
    }

    .container-form .containerForm form {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .container-form .containerForm input,
    .container-form .containerForm textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.35);
        border-radius: 5px;
        font-size: 1rem;
    }

    .container-form .containerForm input::placeholder,
    .container-form .containerForm textarea::placeholder {
        color: #aaa;
    }

    .container-form .containerForm button {
        width: 100%;
        padding: 10px;
        background-color: var(--soft-pink);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .container-form .containerForm button:hover {
        background-color: var(--energetic-pink);
    }

    /**
     * Ubicacion
    **/
    .container-location .containerLocationContent {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        background: white;
        padding: 1rem 0;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .info-item .containerSvg {
        position: relative;
        width: 28px;
        height: 28px;
        background-color: var(--bright-crem-blue);
        border-radius: 50%;
        padding: 0.95rem;
    }

    .info-item svg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 24px;
        height: 24px;
        fill: white;
    }

    .info-text {
        font-size: 1rem;
    }

    /**
    * Texto scroll
    **/
    .containerScrollTitle {
        overflow: hidden;
    }

    .containerScrollTitle h5 {
        text-transform: uppercase;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(100deg, #eb9191, #5a5ae1 34%, #e66464 69%, #c8eb87);
        -webkit-background-clip: text;
    }
</style>