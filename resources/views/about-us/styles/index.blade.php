<style>
    .container-presentation {
        background: linear-gradient(to bottom, var(--bright-blue) 0%, var(--bright-blue) 40%, rgba(5, 175, 242, 0.5) 65%, rgba(255, 255, 255, 0.8) 75%, #FFFFFF 100%);

    }

    .container-presentation .containerPresentationText {
        margin-top: calc(130px - 5rem);
    }

    .container-presentation .containerPresentationText p {
        max-width: 800px;
        margin: auto;
    }

    .container-presentation .containerPresentationImage {
        position: relative;
        margin-top: 2em;
        width: 100%;
        height: 600px;
        border-radius: var(--border-radius);
        overflow: hidden;
    }

    .container-presentation .containerPresentationImage .image-presentation {
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
    }

    /**
      * Ventajas 
    */
    .container-advantages .containerAdvantagesColumns {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .container-advantages .containerImageAdvantages {
        position: relative;
        padding: 2em 0;
    }

    .container-advantages .containerImageAdvantages img {
        width: 100%;
        height: auto;
        object-fit: cover;
        aspect-ratio: 16/9;
        border-radius: var(--border-radius);
    }

    .containerTextAdvantages {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0 2em;
    }

    .containerTextAdvantages ul {
        padding: 1rem 0;
    }

    .containerTextAdvantages ul li {
        position: relative;
        padding: 0.35rem 0 0.35rem 30px; 
        line-height: 1.5;
        text-transform: uppercase;
        font-weight: bold;
        color: var(--bright-blue);
    }

    .containerTextAdvantages ul li::before {
        content: "✔"; 
        color: var(--bright-blue); 
        padding: 0.55em;
        width: 15px;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    /**
     * Números
    */
    .containerNumbersCards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        text-align: center;
        padding: min(5vw, 5rem);
    }

    .cardNumber {
        background: var(--bright-pastel-blue);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .cardNumber:hover {
        transform: translateY(-5px);
    }

    .number span {
        font-size: 3rem;
        font-weight: bold;
        color: var(--energetic-pink);
    }

    /* Responsividad */
    @media (max-width: 1024px) {
        .containerNumbersCards {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .containerNumbersCards {
            grid-template-columns: 1fr;
        }

        .container-presentation .containerPresentationText {
            margin-top: 100px;
        }

        .container-advantages .containerAdvantagesColumns {
            grid-template-columns: 1fr;
        }

        .containerTitleAdvantages,
        .containerTextAdvantages {
            text-align: center;
        }
    }

    /* Animación del contador */
    @keyframes countUp {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>