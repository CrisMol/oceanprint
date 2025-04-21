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

    /*
    * Servicios más solicitados
    */
    .containerMostRequested {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        align-items: center;
    }

    .mostRequestedServices ul li {
        position: relative;
        padding: 1rem 0;
        font-size: 1.25rem;
        cursor: pointer;
        opacity: 0.56;
        transition: 0.3s all;
    }

    .mostRequestedServices ul li:before {
        content: '';
        position: absolute;
        bottom: 3px;
        background: var(--neutral-gray);
        height: 1px;
        width: 0;
        transition: 0.4s all;
    }

    .mostRequestedServices ul li:hover {
        opacity: 0.89;
    }

    .mostRequestedServices ul li:hover:before {
        width: 50%;
    }

    .mostRequestedServices ul li.active {
        opacity: 1;
    }

    .mostRequestedServices ul li.active:before {
        width: 50%;
    }

    .containerImage {
        position: relative;
        width: 100%;
    }

    .imageMostRequestedServices {
        height: 500px;
        width: 100%;
        object-fit: cover;
        border-radius: var(--border-radius);
    }

    .containerDescription p {
        font-size: 1.25rem;
    }

    .containerButton {
        margin-top: 2rem;
        width: 100%;
        height: 100%;
    }

    .buttonShop {
        position: relative;
        display: inline-block;
        background-color: transparent;
        padding: 1em 2em;
        border: 1px solid var(--soft-pink);
        cursor: pointer;
        transition: 0.5s all;
        overflow: hidden;
    }

    .spanButtonColor {
        position: absolute;
        border-radius: 50%;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--soft-pink);
        width: 0;
        height: 0;
        transition: 0.5s all; 
    }

    .buttonShop:hover .spanButtonColor {
        width: 150%;
        height: 150%;
    }

    .buttonShop:hover .text {
        position: relative;
        z-index: 2;
        color: #fff;
    }

    /*
    * Servicios
    */
    .containerService {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        align-items: center;
    }

    .containerService .column {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .imageOffset {
        width: 100%;
        max-width: 500px;
        height: auto;
        border-radius: var(--border-radius);
        object-fit: cover;
    }

    .container-services {
        margin-top: 150px;
        background-color: var(--soft-crem-pink);
        margin-bottom: 3rem;
    }

    .containerService:not(.first) {
        padding-top: 3rem;
    }

    .wave {
        position: absolute;
        width: 100%;
        top: -20vw;
        left: 0;
    }

    .waveBottom {
        position: absolute;
        width: 100%;
        bottom: -20vw;
        left: 0;
    }

    .containerPacks .title {
        text-align: center;
        margin-top: 10vw;
    }

    .container-packs .containerCards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin: 3rem 0;
    }

    .container-packs .containerCards .card {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 10px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        border-radius: var(--border-radius);
        padding-bottom: 20px;
    }

    .container-packs .containerCards .card i {
        position: absolute;
        top: 20px;
        left: -15px;
        width: 50%;
        height: 50px;
        background-color: var(--soft-crem-pink);
        border-radius: var(--border-radius);
        border-bottom-left-radius: 0;
        z-index: 3;
    }

    .container-packs .containerCards .card i::before {
        content: '';
        position: absolute;
        top: 30px;
        width: 15px;
        height: 30px;
        background-color: var(--soft-crem-pink);
        border-top-left-radius: var(--border-radius);
        border-bottom-left-radius: var(--border-radius);
        z-index: 2;
    }

    .container-packs .containerCards .card i::after {
        content: '';
        position: absolute;
        top: 30px;
        width: 15px;
        height: 15px;
        background-color: var(--soft-crem-pink);
    }

    .container-packs .containerCards .card i span {
        position: absolute;
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
        font-size: clamp(1rem, 2.5vw, 1.5rem);
    }

    .container-packs .containerCards .card .image {
        position: relative;
        width: 100%;
        height: 400px;
        cursor: pointer;
        transition: 0.3s all;
        overflow: hidden;
    }

    .container-packs .containerCards .card .image::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.65);
        z-index: 2;
        border-top-left-radius: var(--border-radius);
        border-top-right-radius: var(--border-radius);
    }

    .container-packs .containerCards .card .image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: var(--border-radius);
        border-top-right-radius: var(--border-radius);
    }

    .container-packs .containerCards .card .details ul li {
        position: relative;
        padding: 0.589rem 0;
        padding-left: 25px;
    }

    .container-packs .containerCards .card .details ul li::before {
        content: "✔";
        color: var(--black-blue);
        position: absolute;
        left: 0;
        top: 0.50rem;
    }

    /* Responsive para pantallas pequeñas */
    @media (max-width: 768px) {
        .containerMostRequested {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .imageMostRequestedServices {
            height: auto;
            max-width: 100%;
        }
    }
</style>