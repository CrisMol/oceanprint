<style>
    #business h2 {
        opacity: 0;
        transition: 0.5s all;
    }

    #business h2.visible {
        opacity: 1;
    }

    .container-business .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem; 
        padding: 1rem 0;
        justify-content: center;
        align-items: center;
    }

    .container-business .row .column{
        justify-content: center;
    }

    .container-business .row .column .containerImageBusiness {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .container-business .row .column .containerDescriptionBusiness {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 4em;
        text-align: center;
        background-color: var(--deep-ocean-blue);
    }

    .container-business .row .column .containerDescriptionBusiness .titleCTA {
        padding: 20px 30px;
        color: #fff;
    }

    .container-business .row .column .containerDescriptionBusiness .buttonCTA {
        display: inline-block;
        padding: 10px 0;
        background-color: #fff;
        width: 100%;
        text-transform: uppercase;
    }

    .container-business .row .column .containerImageBusiness img {
        width: 100%;
        object-fit: cover;
        border-radius: var(--border-radius);
    }

    .container-business .row .column .containerServicesBusiness {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .container-business .row .column .containerServicesBusiness .card {
        width: 100%;
    }

    .container-business .row .column .containerServicesBusiness .containerImageService {
        position: relative;
        width: 100%;
        height: 200px;
        margin: auto;
        text-align: center;
    }

    .container-business .row .column .containerServicesBusiness .titleService {
        text-align: center;
    }

    .containerDescriptionBusiness {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.6s ease-out;
    }

    .containerDescriptionBusiness.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>