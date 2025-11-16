<style>
    main {
        /*background-color: var(--bright-pastel-blue);*/
    }

    header {
        /*background: var(--bright-crem-blue);*/
        background: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
    }

    header li a {
        color: var(--neutral-gray);
    }

    header .search-form input {
        color: var(--neutral-gray);
    }

    header .search-form input::placeholder {
        color: rgba(0, 0, 0, 0.55);
    }

    .container.bg-gray {
        background-color: var(--neutral-gray-background);
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
    }

    .product-images img {
        transition: transform 0.3s ease;
        cursor: zoom-in;
        width: 100%;
    }

    .product-images img.zoomed {
        transform: scale(1.5); /* Zoom 1.5x, ajusta según quieras */
        z-index: 999;
        position: relative;
    }

    .zoom-container {
        position: relative;
        display: inline-block;
    }

    #zoom-result {
        position: fixed; /* fijo en la pantalla */
        top: 50%; 
        transform: translateY(-50%);
        right: 0; /* siempre a la derecha */
        width: 50vw; /* ocupa la mitad de la pantalla */
        height: 90vh; /* toda la altura de la pantalla */
        border-left: 1px solid #ccc;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain; /* mantiene proporción */
        display: none;
        z-index: 1000;
        pointer-events: none; /* no interfiere con hover */
        background-color: #fff;
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

    .product-detail .container .product .product-content .product-info {
        max-width: 600px;
        margin: auto;
    }

    .product-detail .container .product .product-content .product-info .information {
        display: flex;
        flex-direction: column;
        gap: 1.85rem;
    }

    .product-detail .container .product .product-content .product-info h1 {
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        font-size: clamp(1.4rem, 3.5vw, 3.4rem);
        font-weight: 400;
        margin: 0;
    }

    .product-detail .container .product .product-content .product-info .information .product-tags {
        display: flex;
        flex-wrap: wrap;
    }

    .product-detail .container .product .product-content .product-info .information .product-tags .product-tag {
        padding: 0.35rem 0.58rem;
        border-radius: var(--border-radius);
        text-align: center;
        background-color: var(--deep-ocean-blue);
        color: #fff;
        margin: 10px;
        min-width: 100px;
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices,
    .product-detail .container .product .product-content .product-info .product-detail-single {
        margin: 18px 0;
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding: 0.85rem 0;
        gap: 0.55rem;
    }

    .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices span {
        text-align: center;
    }

    .product-detail .container .product .product-content .product-info .tiered-price,
    .product-detail .container .product .product-content .product-info .tiered-single-price {
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

    .product-detail .container .product .product-content .product-info .tiered-price.active,
    .product-detail .container .product .product-content .product-info .tiered-single-price.active,
    .product-detail .container .product .product-content .product-info .tiered-price:hover {
        opacity: 1;
        background: linear-gradient(135deg, rgba(5, 175, 242, 0.3), rgba(241, 119, 186, 0.3)); 
    }

    .product-detail .container .product .product-content .product-info .product-cart .cart-table {
        width: 100%; 
        border-collapse: collapse;
    }

    .product-detail .container .product .product-content .product-info .product-cart .cart-table tr td {
        padding: 0.28rem 0;
    }

    .product-detail .container .product .product-content .product-info .product-cart .cart-table .price-right {
        text-align: right;
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
        border: 1px solid var(--deep-ocean-blue);
        font-size: 1.5em;
        color: var(--deep-ocean-blue);
        overflow: hidden;
        z-index: 2;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-button:hover {
        border: none;
    }

    .product-detail .container .product .product-content .product-info .product-cart .product-button .button-animation {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--bright-blue);
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
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit {
        position: relative;
        width: 100%;
        height: 150px;
        padding: 0.15rem;
        background: linear-gradient(to bottom, var(--calm-turquoise), var(--deep-ocean-blue));
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: var(--border-radius);
        overflow: hidden;
        transform: translateY(50px);
        opacity: 0;
        transition: all 0.6s ease-out;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit.visible {
        transform: translateY(0);
        opacity: 1;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit.art {
        background: linear-gradient(to bottom, var(--soft-crem-pink), var(--energetic-pink));
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit.warranty {
        background: linear-gradient(to bottom, var(--bright-pastel-blue), var(--bright-crem-blue));
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit p {
        position: absolute;
        bottom: -100px;
        transition: all 0.3s;
        width: 100%;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 0.85em;
        padding: 5px 0;
        backdrop-filter: blur(15px);
        z-index: 2;
        color: #fff;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit.warranty p {
        color: #000;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit:hover p{
        bottom: 0;
    }

    .product-detail .container .product .product-content .product-info .product-benefits .benefit img {
        position: relative;
        max-width: 100%;
        height: 100%;
        aspect-ratio: 1 / 1;
    }

    /*
    * Productos intereses
    */
    .container.interests-products {
        padding: min(5rem, 5vw) 0 0 0;
    }

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

    .interests-products .interests-products-content .slider {
        position: relative;
        width: 100%;
        min-height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .interests-products .interests-products-content .slider .slide {
        position: absolute;
        width: 320px;
        aspect-ratio: 3/4;
        border-radius: var(--border-radius);
        transition: all 0.8s;
        user-select: none;
        scale: 0.8;
    }

    .interests-products .interests-products-content .slider .slide.active {
        box-shadow: 10px 10px 50px 0 var(--soft-crem-pink);
        scale: 1;
    }

    .interests-products .interests-products-content .slider .slide::after {
        content: '';
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(5, 175, 242, 0.3), rgba(241, 119, 186, 0.3));
        /*backdrop-filter: blur(3px);
        --webkit-backdrop-filter: blur(3px);*/
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: inherit;
        z-index: 2;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }

    .interests-products .interests-products-content .slider .slide.active::after {
        opacity: 1;
    }

    .interests-products .interests-products-content .slider .slide img {
        position: relative;
        border-radius: inherit;
    }

    .interests-products .interests-products-content .slider .slide.active img {
        scale: 0.8;
        z-index: 3;
    }

    .interests-products .interests-products-content .slider .slide span {
        padding: 0 10px;
        color: #000;
        font-size: 1.2em;
        z-index: 3;
        opacity: 1;
    }

    .interests-products .interests-products-content .slider .slide.active span {
        animation: pop-out 0.8s ease-in-out forwards;
    }

    @keyframes pop-out {
        0% {
            transform: translateY(0);
            opacity: 0;
        }
        100% {
            transform: translateY(-20px);
            opacity: 1;
        }
    }

    
    .interests-products .interests-products-content .slider .control-btn {
        position: absolute;
        top: 50%;
        width: 50px;
        aspect-ratio: 1/1;
        color: #fff; /* Color principal */
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        background-color: var(--deep-ocean-blue);
        border: 0;
        border-radius: 50%;
        cursor: pointer;
        z-index: 3;
        animation: change-color 2s ease-in infinite, change-size 1.5s linear infinite;
        will-change: transform;
    }

    @keyframes change-color {
        0%, 100% {
            color: #fff;
        }
        50% {
            color: #a8aabc;
        }
    }

    @keyframes change-size {
        0%, 100% {
            transform: translateY(-50%) scale(1);
        }
        50% {
            transform: translateY(-50%) scale(1.1);
        }
    }

    .interests-products .interests-products-content .slider .control-btn.prev {
        left: 5%;
        transform: rotate(0deg) translateY(-50%) scale(1);
    }

    .interests-products .interests-products-content .slider .control-btn.next {
        right: 5%;
        transform: rotate(0deg) translateY(-50%) scale(1);
    }

    .interests-products .interests-products-content .slider .control-btn.prev:not([disabled]):hover {
        transform: rotate(-15deg) translateY(-50%) scale(1.2);
    }

    .interests-products .interests-products-content .slider .control-btn.next:not([disabled]):hover {
        transform: rotate(15deg) translateY(-50%) scale(1.2);
    }

    .interests-products .interests-products-content .slider .control-btn.prev:is([disabled]),
    .interests-products .interests-products-content .slider .control-btn.next:is([disabled]) {
        animation: none;
    }

    /**
    * Diferencias
    */
    .container-oval .icon-imprent-ecological {
        position: relative;
        margin: auto;
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
        margin: auto;
        padding-bottom: 3rem;
        max-width: 700px;
    }

    .container-oval .content-title h3 {
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(100deg, #05AFF2, #F177BA);
        -webkit-background-clip: text;
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

    /**
    * Tarjetas
    */
    .container-oval .containerCards {
        display: flex;
        justify-content: center;
        gap: 50px;
    }

    .container-oval .containerCards .card {
        position: relative;
        padding: 2em;
        width: 300px;
        height: 400px;
        background: linear-gradient(
            135deg,
            rgba(5, 175, 242, 0.3),
            rgba(241, 119, 186, 0.3)
        );
        -webkit-backdrop-filter: blur(10px); /* Para compatibilidad con Safari */
        border-radius: var(--border-radius);
        overflow: hidden;
        cursor: pointer;
        transition: 1s;
    }

    .container-oval .containerCards .card .content {
        position: relative;
        height: 100%;
        z-index: 2;
    }

    .container-oval .containerCards .card .content {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 10px;
        color: var(--neutral-gray);
        text-align: center;
    }



    .container-oval .containerCards .card .ripple {
        position: absolute;
        width: 5px;
        height: 5px;
        transform: translate(-50%, -50%);
        background: radial-gradient(circle, rgba(5, 175, 242, 0.5) 0%, transparent 70%);
        animation: ripple 0.8s ease-out forwards;
    }

    .flash-message {
        background-color: #d4edda;
        color: #155724;
        padding: 12px 20px;
        border-radius: 6px;
        margin: 15px 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        animation: fadeIn 0.5s ease;
        transition: opacity 0.5s ease;
    }

    .flash-message.error {
        background-color: #f8d7da; 
        color: #721c24;           
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes ripple 
    {
        0% 
        {
            width: 0px;
            height: 0px;
            opacity: 1;
        }
        100%
        {
            width: 400px;
            height: 400px;
            opacity: 0;
        }
    }

    /**
    * Information
    */
    .information-content {
        position: relative;
        margin: auto;
        max-width: 900px;
        text-align: center;
    }

    /**
    * Beneficios
    */
    .container-benefits {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: start;
        gap: 2rem;
    }

    .col-left {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .benefits-title {
        margin-bottom: 1rem;
    }

    .benefits-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .benefit-item {
        margin-bottom: 0.5rem;
    }

    .benefit-tab {
        display: block;
        width: 100%;
        text-align: left;
        padding: 1rem;
        border: none;
        color: #444;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .benefit-tab:hover {
        background: #f3f3f3;
    }

    .benefit-tab.is-active {
        color: var(--energetic-pink);
    }

    /* ====== Texto expandible (panel) ====== */
    .benefit-panel {
        padding: 0.75rem 1rem;
    }

    .benefit-panel[hidden] {
        display: none;
    }

    .col-right {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .benefit-figure {
        position: relative;
        width: 100%;
        max-width: 500px;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .benefit-image {
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
        opacity: 0;
        visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    .benefit-image.is-active {
        opacity: 1;
        visibility: visible;
        position: relative;
    }

    /**
    * Separador
    */
    .separator-bg {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        overflow: hidden;
        background-image: url("{{ asset('images/tienda/equipo-de-trabajo-1920.webp') }}");
        background-size: cover;          
        background-position: center;     
        background-repeat: no-repeat;
    }

    .separator-bg:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.68);
    }

    .separator-bg div {
        position: relative;
        width: 50%;
        overflow: hidden;
    }

    .separator-bg div:nth-child(1) {
        position: relative;
        width: 50%;
        overflow: hidden;
    }

    .separator-bg div:nth-child(1) h2 {
        left: 100%;
    }

    .separator-bg div h2 {
        position: absolute;
        white-space: nowrap;
        line-height: 100vh;
        animation: animateText 30s linear infinite;
        color: #fff;
        z-index: 3;
        font-size: 6em;
        font-weight: 400;
        background: linear-gradient(135deg, rgba(5, 175, 242, 1), rgba(241, 119, 186, 1));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text; /* para navegadores modernos */
    }

    @keyframes animateText {
        0%
        {
            transform: translateX(0);
        }
        100%
        {
            transform: translateX(-100%);
        }
    }

    .mirror-h {
        transform: scaleX(-1);
    }

    .mirror-v {
        transform: rotate(20deg);
    }

    /* Responsivo */
    @media (max-width: 980px) {
        .product-detail .container .product .product-content {
            margin-top: 115px;
            grid-template-columns: 1fr;
        }

        .product-detail .container .product .product-content .product-info .information {
            align-items: center;
        }

        .product-detail .container .product .product-content .product-info h1,
        .product-detail .container .product .product-content .product-info .product-description {
            text-align: center;
        }

        .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices {
            justify-content: center;
        }

        .product-detail .container .product .product-content .product-info .product-benefits .benefit {
            height: 100px;
        }

        .separator-bg div h2 {
            font-size: 4em;
        }

        .container-benefits {
            grid-template-columns: 1fr;
        }

        .container-benefits .benefits-title {
            text-align: center;
        }

        .slide h6 {
            font-size: 1.5em;
        }

        .control-btn.prev {
            left: 15%;
        }

        .control-btn.next {
            right: 15%;
        }

        .menu-toggle span { 
            background: #000;
        }

        .menu-toggle.active span {
            background: white;
        }
    }

    @media (max-width: 700px) {
        .slide {
            width: 260px;
        }

        .slide h6 {
            font-size: 1.25em;
        }

        .control-btn {
            width: 40px;
            font-size: 1.8em;
        }

        #zoom-result {
            display: none !important;
        }

        .information-content {
            text-align: justify;
        }

        .product-detail .container .product .product-content .product-info .product-benefits .benefit p{
            bottom: 0;
        }

        .product-detail .container .product .product-content .product-info .product-tiered-prices .tiered-prices {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
    }

    @media (max-width: 560px) {
        .slide {
            width: 220px;
        }

        .slide h6 {
            font-size: 1.1em;
        }

        .control-btn {
            font-size: 1.5em;
        }

        .control-btn.prev {
            left: 5%;
        }

        .control-btn.next {
            right: 5%;
        }
    }
</style>