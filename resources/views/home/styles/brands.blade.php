<style>
    .container-brands {
        padding-top: 0;
    }

    .content.brands {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        justify-content: center;
        align-items: center;
    }

    .content.brands h2 {
        color: #fff;
    }

    .content.brands .grid-brands {
        margin: auto;
    }

    .content.brands .grid-brands .column-brand {
        text-align: center;
    }

    @media (max-width: 768px) {
        .content.brands {
            grid-template-columns: 1fr;
        }

        .content.brands .brands-description {
            text-align: center;
        }
    }
</style>