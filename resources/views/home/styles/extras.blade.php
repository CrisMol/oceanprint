<style>
    .extras-content {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
        max-width: 1200px;
        min-height: 600px;
        margin: 4rem auto 0 auto;
    }

    .column {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 15px;
        height: 100%;
    }

    .carousel-image {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
    }

    .carousel-image-content {
        position: relative;
        height: 100%;
    }

    .content-images {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .content-images img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0; 
        transition: opacity 1s ease-in-out; 
    }

    .content-images::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            to left,
            rgba(0, 0, 0, 0.6), 
            rgba(0, 0, 0, 0.1) 
        );
        pointer-events: none; 
        z-index: 1; 
    }

    .content-images img.active {
        opacity: 1; 
    }

    .contents-description {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        color: #fff;
        z-index: 3;
        padding: 0.85rem;
    }

    .contents-description h3 {
        text-transform: uppercase;
        text-orientation: upright;
        text-align: start;
        writing-mode: vertical-lr;
        margin: 0px auto;
        font-size: clamp(1.6rem, 1.85rem + 0.5vw, 2rem);
    }
    
    .content-column {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
    }

    .content-description {
        width: 100%;
        height: 100%;
        padding: 0.85rem;
        border-radius: var(--border-radius);
    }

    .content-description.blue {
        background-color: var(--black-blue);
    }

    .content-description.soft-pink {
        background-color: var(--black-energetic-pink);
    }

    .content-description.calm-turquoise {
        background-color: var(--calm-turquoise);
    }

    .content-description h4 {
        margin: 10px 0;
        font-size: 18px;
        font-weight: 100;
        color: #fff;
    }

    .content-description p {
        font-size: 14px;
        color: #555;
        line-height: 1.5;
    }

    .content-image {
        position: relative;
    }

    .content-image img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
    }

    @media (max-width: 1024px) {
        .extras-content {
            grid-template-columns: repeat(2, minmax(0, 1fr)); 
        }
    }

    @media (max-width: 768px) {
        .extras-content {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            height: auto;
            margin: 0 auto 0 auto;
        }
    }
</style>
