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
        top: 50%;
        transform: translateY(-50%);
        z-index: 2;
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

    /**
    * Preguntas frecuentes
    */
    .containerAccordionFAQ {
        margin: 0 0.85rem;
        display: flex;
        flex-direction: column;
        gap: 0.85rem;
        padding: 2rem 0;
    }

    .containerAccordionFAQ .tab {
        position: relative;
        padding: 0 0.85rem 0.85rem;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.05);
        border-radius: var(--border-radius);
        overflow: hidden;
    }

    .containerAccordionFAQ .tab input {
        appearance: none;
    }

    .containerAccordionFAQ .tab label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .containerAccordionFAQ .tab label::after {
        content: '+';
        position: absolute;
        right: 20px;
        font-size: 2em;
        color: rgba(0, 0, 0, 0.1);
        transition: transform 1s;
    }

    .containerAccordionFAQ .tab:hover label::after {
        color: #333;
    }

    .containerAccordionFAQ .tab input:checked ~ label::after {
        transform: rotate(135deg);
    }

    .containerAccordionFAQ .tab label h2 {
        width: 40px;
        height: 40px;
        background: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 1.25em;
        border-radius: var(--border-radius);
        margin-right: 10px;
    }

    .containerAccordionFAQ .tab:nth-child(1) label h2 {
        background: linear-gradient(135deg, #70f570, #49c628);
    }

    .containerAccordionFAQ .tab:nth-child(2) label h2 {
        background: linear-gradient(135deg, #3c8ce7, #00eaff);
    }

    .containerAccordionFAQ .tab:nth-child(3) label h2 {
        background: linear-gradient(135deg, #ff96f9, #c32bac);
    }

    .containerAccordionFAQ .tab:nth-child(4) label h2 {
        background: linear-gradient(135deg, #fd6e6a, #ffc600);
    }

    .containerAccordionFAQ .tab label h3 {
        position: relative;
        font-weight: 500;
        color: #333;
        z-index: 10;
    }

    .containerAccordionFAQ .tab .contentFAQ {
        max-height: 0;
        transition: 1s;
        overflow: hidden;
    }

    .containerAccordionFAQ .tab input:checked ~ .contentFAQ {
        max-height: 100vh;
    }

    .containerAccordionFAQ .tab .contentFAQ p {
        position: relative;
        margin: 2rem 0;
        z-index: 10;
    }

    @media (max-width: 768px) {
        .container-presentation .containerPresentationText {
            margin-top: 100px;
        }

        .container-form .containerFormContent,
        .container-location .containerLocationContent {
            grid-template-columns: 1fr;
        }

        .containerMap {
            max-width: 100%;
        }

        .containerMap iframe {
            width: 100%;
        }

        .containerTitleForm,
        .containerTitle,
        .contactInfo {
            text-align: center;
        }
    }
</style>