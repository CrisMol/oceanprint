<style>
    .row-subheading {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .row-subheading .description {
        max-width: 600px;
        text-align: end;
    }

    .content.categories {
        padding: 5rem 0;
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .content.categories .glass {
        position: relative;
        max-width: 500px;
        height: 300px;
        background: linear-gradient(
            135deg,
            rgba(5, 175, 242, 0.3),
            rgba(241, 119, 186, 0.1)
        );
        box-shadow: 0 5px 5px rgba(255, 182, 193, 0.35);
        backdrop-filter: blur(10px);
        display: flex;
        justify-content: center;
        align-content: center;
        transition: 0.5s;
        border-radius: 10px;
        margin: 0 5px;
        /*transform: rotate(calc(var(--r) * 1deg));*/
        overflow: hidden;
    }

    .content.categories:hover .glass {
        transform: rotate(0deg);
    }

    .content.categories .glass .circle {
        position: absolute;
        top: -50%;
        scale: 0;
        width: 800px;
        height: 800px;
        background: #fff;
        border: 50px solid rgba(255, 140, 162, 0.35);
        transition: all 0.6s ease-in-out;
        border-radius: 50%;
        z-index: -1;
    }

    .content.categories .glass:hover .circle {
        scale: 1;
    }

    .content.categories .glass::before {
        content: attr(data-text);
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 40px;
        background: rgba(255,255,255,0.05);
        display: flex;
        justify-content: center;
        text-align: center;
        color: var(--black-energetic-pink);
        transition: 0.5s;
    }

    .content.categories .glass:hover::before {
        height: 100%;
        top: 20px;
        font-size: clamp(1.3rem, 1.5vw, 1.85rem);
        text-transform: uppercase;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(100deg, #eb9191, #5a5ae1 34%, #e66464 69%, #c8eb87);
        -webkit-background-clip: text;
        background-clip: text;
        text-align: center;
    }

    .content.categories .contentGlass {
        position: relative;
        padding: 2rem;
        width: 100%;
        height: 100%;
        overflow: hidden;
        transition: 0.3s;
    }

    .content.categories:hover .contentGlass {
        padding: 1rem;
    }

    .content.categories .container-image {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: 0.5s;
        text-align: center;
    }

    .content.categories .contentGlass .container-image img {
        height: auto;
        aspect-radio: 1/1;
        filter: invert(23%) sepia(91%) saturate(7121%) hue-rotate(316deg) brightness(90%) contrast(105%);
        opacity: 1;
        transition: 0.5s;
    }

    .content.categories .glass:hover .container-image img {
        width: 100px;
        opacity: 0;
        filter: invert(50%) sepia(30%) saturate(4500%) hue-rotate(210deg) brightness(90%) contrast(105%);
    }

    .content.categories .contentGlass .container-text {
        position: relative;
        opacity: 0;
        transition: 0.5s;
        text-align: center;
    }

    .content.categories .contentGlass .container-text ul li {
        padding: 0.18rem 0;
    }

    .content.categories .glass:hover .container-text {
        opacity: 1;
        top: -10px;
    }

    .content.categories .glass .container-button {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -100px;
        transition: 0.5s;
    }

    .content.categories .glass:hover .container-button {
        bottom: 20px;
    }

    @media (max-width: 1280px) {
        .content.categories {
            grid-template-columns: repeat(3, 1fr); 
            grid-auto-rows: auto;
        }
    }

    @media (max-width: 768px) {
        .content.categories {
            grid-template-columns: repeat(1, 1fr);
            padding: 2rem 0;
        }

        .content.categories .glass {
            transform: rotate(0deg);
            max-width: 300px;
            min-width: 300px;
            margin: auto;
        }
    }
</style>