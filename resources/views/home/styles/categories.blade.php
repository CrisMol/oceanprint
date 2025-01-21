<style>
    .content.categories {
        padding: 5rem 0;
        position: relative;
        display: flex;
        justify-content: center;
        align-content: center;
    }

    .content.categories .glass {
        position: relative;
        width: 250px;
        height: 300px;
        background: radial-gradient(
            circle, 
            rgba(255, 182, 193, 0.35) 0%, 
            rgba(255, 160, 176, 0.35) 50%, 
            rgba(255, 140, 162, 0.35) 100%
        );
        box-shadow: 0 5px 5px rgba(255, 182, 193, 0.35);
        backdrop-filter: blur(10px);
        display: flex;
        justify-content: center;
        align-content: center;
        transition: 0.5s;
        border-radius: 10px;
        margin: 0 5px;
        transform: rotate(calc(var(--r) * 1deg));
        overflow: hidden;
    }

    .content.categories .glass:hover {
        width: 450px;
        height: 350px;
    }

    .content.categories:hover .glass {
        transform: rotate(0deg);
        margin: 0 10px;
    }

    .content.categories .glass .circle {
        position: absolute;
        top: -50%;
        scale: 0;
        width: 800px;
        height: 800px;
        background: #fff;
        /*background: radial-gradient(
            circle, 
            rgba(5, 175, 242, 0.35) 0%, 
            rgba(5, 160, 242, 0.35) 50%, 
            rgba(5, 140, 242, 0.35) 100%
        );*/
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
        align-content: center;
        color: var(--soft-pink);
        transition: 0.5s;
    }

    .content.categories .glass:hover::before {
        top: 20px;
        font-size: 1.85rem;
        text-transform: uppercase;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(100deg, #eb9191, #5a5ae1 34%, #e66464 69%, #c8eb87);
        -webkit-background-clip: text;
        background-clip: text;
    }

    .content.categories .contentGlass {
        position: relative;
        padding: 2rem;
        width: 100%;
        height: 100%;
        overflow: hidden;
        transition: 0.3s;
    }

    .content.categories .container-image {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: 0.5s;
    }

    .content.categories .glass:hover .container-image {
        left: 100px;
    }

    .content.categories .contentGlass .container-image img {
        transition: 0.5s;
        filter: invert(60%) sepia(40%) saturate(5000%) hue-rotate(310deg) brightness(94%) contrast(95%);
    }

    .content.categories .glass:hover .container-image img {
        filter: invert(50%) sepia(30%) saturate(4500%) hue-rotate(210deg) brightness(90%) contrast(105%);
    }

    .content.categories .contentGlass .container-text {
        position: absolute;
        right: 20px;
        bottom: -100%;
        transition: 0.5s;
        text-align: end;
    }

    .content.categories .contentGlass .container-text ul li {
        padding: 0.335rem 0;
    }

    .content.categories .glass:hover .container-text {
        bottom: 105px;
    }
</style>