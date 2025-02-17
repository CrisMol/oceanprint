<style>
    #testimonials {
        background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(110, 193, 228, 1) 30%);
    }

    .content.testimonials {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        display: flex;
        gap: 1rem;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .content.testimonials img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-testimonial {
        position: absolute;
        width: 300px;
        padding: 15px;
        box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        transform: rotate(var(--rotate));
    }

    .card-testimonial.large {
        width: 400px;
    }

    .text-testimonial p {
        margin: 0;
        color: rgba(0,0,0,1);
    }

    .name-testimonial span {
        color: var(--neutral-gray);
    }

    .name-testimonial span {
        display: block;
        font-size: 0.8rem;
        font-weight: bold;
        margin-top: 8px;
    }

    .image-testimonial {
        position: relative;
        width: 50px;
        height: 50px;
    }

    .image-testimonial.woman {
        position: absolute;
        bottom: 0;
        width: 150px;
        height: 150px;
        border-radius: var(--border-radius);
        overflow: hidden;
        transform: rotate(19deg);
    }

    .image-testimonial img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-testimonial:nth-child(1) { top: 10%; left: 5%; --rotate: -5deg; }
    .card-testimonial:nth-child(2) { top: 10%; right: 5%; --rotate: 5deg; }
    .card-testimonial:nth-child(3) { bottom: 10%; left: 5%; --rotate: -3deg; }
    .card-testimonial:nth-child(4) { bottom: 10%; right: 5%; --rotate: 4deg; }
        
    @media (max-width: 600px) {
        .card-testimonial {
            position: relative;
            width: auto;
            max-width: 80%;
            margin: 10px auto;
            transform: none;
        }
    }
</style>