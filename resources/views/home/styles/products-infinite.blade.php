<style>
    .products {
        --width: 300px;
        --height: 500px;
        --imageQuantity: 4;
        padding-inline: 10px; /* un poco de espacio en los lados */
    }

    @media (max-width: 767px) {
        .products {
            --width: auto;
            --height: 300px;
            --imageQuantity: 2;
        }

        .products__description {
            display: none;
        }

        .products__title {
            text-align: center;
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .products {
            --width: 32vw;
            --height: 400px;
            --imageQuantity: 3;
        }
    }

    @media (min-width: 1024px) and (max-width: 1248px) {
        .products {
            --width: 270px;
        }
    }

    @media (min-width: 1620px) {
        .products {
            --width: 400px;
        }
    }

    .products {
        padding-block: 12px;
        width: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        position: relative;
    }
    
    .products__highlights {
        display: flex;
        width: calc(
        var(--width) * var(--imageQuantity) * 2
        ); 
        height: var(--height);
        gap: calc(var(--width) / 8);
        animation: autoScroll 20s linear infinite;
    }
    
    .products__highlights:hover {
        animation-play-state: paused !important;
    }
    
    .products__item {
        width: var(--width);
        height: 100%;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        cursor: pointer;
        background-color: var(--random-color);
        border-radius: var(--border-radius);
        padding: 1rem;
    }
    
    .products__item img {
        width: 100%;
        height: 100%;
        transition: filter 0.5s ease-in-out;
    }
    
    @keyframes autoScroll {
        0% {
        transform: translateX(0);
        }
        100% {
        transform: translateX(calc(-1 * var(--width) * var(--imageQuantity)));
        }
    }
    
    .products:hover .products__item img {
        transform: translateY(0) rotate(0deg);
        transition: 0.5s;
    }
    
    .products .products__item:hover img {
        filter: grayscale(0);
        transform: translateY(-25px) rotate(-10deg);
    }

    .products__content {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 0.55rem;
        height: 100%;
        color: #fff;
    }

    .products__content .products__title h4 {
        position: relative;
        text-transform: uppercase;
        white-space: 2px;
        font-size: clamp(12px, 1vw, 16px);
        margin: 0;
        transition: 0.5s;
    }

    .products__content .products__description {
        color: rgb(255, 255, 255);
    }

    .products__content .products__description p {
        margin: 0;
        transition: 0.5s;
        color: #fff;
    }

    .products__content .products__price .price {
        font-weight: 900;
        font-size: 16px;
        transition: 0.5s;
    }
</style>