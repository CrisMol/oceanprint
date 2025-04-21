@php
    $colors = ['#6EC1E4'];
    $randomColor = $colors[array_rand($colors)];
@endphp

<style>
    main {
        /*background-color: var(--bright-pastel-blue);*/
    }

    header {
        /*background: var(--bright-crem-blue);*/
        background: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
    }

    body footer {
        background-color: {{ $randomColor }};
    }

    header li a {
        color: var(--neutral-gray);
    }

    .product-detail .container .product .product-content {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin-top: calc(130px - 5rem);
    }

    .product-detail .container .product .product-content .product-images .gallery {
        position: sticky;
        top: 0;
        display: grid;
        gap: 1.25rem;
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .product-detail .container .product .product-content .product-images .image-featured {
        animation: movetoUpDown 5s ease-in-out infinite;
    }

    @keyframes movetoUpDown {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(10px);
        }
        100% {
            transform: translateY(0);
        }
    }

    .product-detail .container .product .product-content .product-info .information {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding-bottom: 1.5rem;
    }

    .product-detail .container .product .product-content .product-info .information .product-tags {
        display: flex;
        gap: 1rem;
    }

    .product-detail .container .product .product-content .product-info .information .product-tags .product-tag {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.35rem;
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices {
        display: flex;
        padding: 0.85rem 0;
        gap: 0.55rem;
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices .tiered-price {
        position: relative;
        display: flex;
        gap: 2px;
        flex-direction: column;
        align-items: center;
        padding: 0.55rem;
        border: 1px solid rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        cursor: pointer;
        opacity: 0.55;
        transition: 0.3s;
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices .tiered-price.active,
    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices .tiered-price:hover {
        opacity: 1;
        background-color: var(--soft-pink);
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices .tiered-price .tiered-popular-text {
        position: absolute;
        top: -10px;
        border-radius: 10px;
        font-size: 0.85em;
        background-color: var(--energetic-pink);
        color: #fff;
        padding: 1px 8px;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-total {
        display: flex;
        justify-content: space-between;
        text-transform: uppercase;
        font-size: 1.5em;
        padding: 10px 0;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-button {
        position: relative;
        width: 100%;
        margin: 20px 0;
        padding: 15px 0;
        border-radius: var(--border-radius);
        background-color: #fff;
        cursor: pointer;
        text-transform: uppercase;
        border: 1px solid var(--soft-pink);
        font-size: 1.5em;
        color: var(--black-energetic-pink);
        overflow: hidden;
        z-index: 2;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-button .button-animation {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--soft-pink);
        height: 0;
        transition: 0.3s;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-button:hover .button-animation {
        height: 100%;
        z-index: 1;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-button:hover .button-text {
        color: #fff;
        position: relative;
        z-index: 2;
    }

    .product-detail .container .product .product-content .product-info .product-benefits {
        position: relative;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit {
        position: relative;
        display: flex;
        gap: 0.58rem;
        align-items: center;
        margin: 0.25rem 1.5rem;
        transition: 0.3s;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit .benefit-icon svg {
        fill: var(--black-energetic-pink);
    }

    /*
    * Productos intereses
    */
    .interests-products .interests-products-content {
        display: grid;
        grid-template-columns: 1fr;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        text-align: center;
    }

    .interests-products .interests-products-content p {
        max-width: 500px;
        margin: 1rem auto;
    }

    .interests-products .interests-products-content .interests-content .interests-products-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 0.85rem;
    }

    .interests-products .interests-products-content .interests-content .interests-products-grid .interest-product {
        position: relative;
        background-color: #fff;
        padding: 1rem;
        border-radius: var(--border-radius);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        box-shadow: -3px -3px 7px #ffffff,
                    3px 3px 5px #ceced1;
    }

    .interests-products .interests-products-content .interests-content .interests-products-grid .interest-product .interest-image {
        position: relative;
        transition: 0.3s;
    }

    .interests-products .interests-products-content .interests-content .interests-products-grid .interest-product:hover .interest-image {
        transform: translateY(-15px);
    }

    .interests-products .interests-products-content .interests-content .interests-products-grid .interest-product .interest-name {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out, opacity 0.4s ease-in-out;
        opacity: 0;
        text-align: center;
    }

    .interests-products .interests-products-content .interests-content .interests-products-grid .interest-product:hover .interest-name {
        max-height: 150px;
        opacity: 1;
    }

    /**
    * Diferencias
    */
    .container-oval {
        background-color: {{ $randomColor }};
        margin-top: 3.5rem;
        padding-top: 3rem;
        position: relative;
    }

    .container-oval::before {
        content: "";
        position: absolute;
        top: -30px;
        left: 0;
        width: 100%;
        height: 60px;
        background-color: {{ $randomColor }};
        border-radius: 80%;
    }

    .container-oval .blob {
        display: none;
        position: absolute;
        top: -150px;
        left: -100px;
        width: 600px;
        height: 100%;
    }

    .container-oval .icon-imprent-ecological {
        position: absolute;
        top: -150px;
        left: min(5rem, 5vw);
        width: 200px;
        height: 200px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.58rem;
        transition: transform 0.1s linear;
    }

    .container-oval .content-title {
        text-align: center;
        padding-bottom: 3rem;
    }

    .product-differences {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }

    .product-differences .product-difference-image {
        position: relative;
        text-align: center;
    }

    .product-differences .product-difference-image .image-difference {
        position: relative;
        max-width: 400px;
        height: auto;
        object-fit: cover;
        cursor: pointer;
    }

    .product-differences .product-difference-grid {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        justify-content: space-between;
    }

    .product-differences .product-difference-grid .benefit {
        display: flex;
        min-height: 100px;
        align-items: center;
        gap: 1rem;
        /*background-color: var(--soft-pink);*/
        background-color: #E46EC1; 
        border-radius: var(--border-radius);
        padding: 0.58rem;
        color: #fff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        transition: 0.3s;
        cursor: default;
    }

    .product-differences .product-difference-grid .benefit:hover {
        transform: translateY(-10px);
    }

    .product-differences .product-difference-grid .benefit .content-image-benefit {
        min-width: 75px;
        display: flex;
        justify-content: center;
    }

    .product-differences .product-difference-grid .benefit .content-image-benefit svg {
        fill: var(--vibrant-yellow);
        filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.2));
    }

    /**
    * Ventajas
    */
    .content-advantages {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        position: relative;
        max-width: 900px;
        margin: 1rem auto;
    }

    /* Contenedor de cada ventaja */
    .advantage {
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 1rem;
    }

    .advantage.start {
        align-items: start;
    }

    .advantage.middle {
        text-align: center;
    }

    .advantage.end {
        text-align: end;
        align-items: end;
    }

    /* Círculo del check */
    .check-container {
        position: relative;
        width: 50px;
        height: 50px;
    }

    .check-circle {
        width: 50px;
        height: 50px;
        background-color: var(--calm-turquoise);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
        font-weight: bold;
        position: relative;
        z-index: 2;
    }

    .check-container.start {
        align-self: flex-start;
    }

    .check-container.end {
        align-self: flex-end;
    }

    /* Línea de progreso debajo de los checkmarks */
    .progress-bar {
        position: absolute;
        top: 30px;
        left: 0;
        width: 0;
        height: 5px;
        background-color: var(--calm-turquoise);
        transition: width 0.5s ease-in-out;
        z-index: 1;
    }

    /* Responsivo */
    @media (max-width: 1024px) { /* Tablets */
        
    }

    @media (max-width: 768px) { /* Móviles */
        
    }
</style>