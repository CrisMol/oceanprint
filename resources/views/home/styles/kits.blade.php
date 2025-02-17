<style>
    .content.kits {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.85rem;
        padding: 5rem 0;
    } 

    #kits h2 {
        opacity: 0;
        transition: 0.5s all;
    }

    #kits h2.visible {
        opacity: 1;
    }

    .content.kits .card-kit {
        position: relative;
        height: 450px;
        border-radius: var(--border-radius);
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 2rem;
        padding: 1.85rem;
        background-color: var(--bright-pastel-blue);
    }

    .content.kits .card-kit .kit-image {
        position: relative;
        margin-top: -100px;
    }

    .content.kits .card-kit .kit-image img {
        width: 200px;
        height: 250px;
    }

    .content.kits .card-kit .kit-description {
        position: relative;
        margin-top: -100px;
        text-align: center;
    }

    /* Tablets (≤1024px) */
    @media (max-width: 1024px) {
        .content.kits {
            grid-template-columns: repeat(2, 1fr); /* 2 columnas */
            gap: 1.5rem;
            padding: 4rem 0;
        }
    }

    /* Móviles (≤768px) */
    @media (max-width: 768px) {
        .content.kits {
            grid-template-columns: 1fr; /* 1 columna */
            gap: 1.2rem;
            padding: 3rem 0;
        }

        .content.kits .card-kit {
            height: auto;
        }

        .content.kits .card-kit .kit-image {
            margin-top: 0;
        }

        .content.kits .card-kit .kit-description {
            margin-top: 0;
        }
    }
</style>