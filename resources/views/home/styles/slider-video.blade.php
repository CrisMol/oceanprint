<style>
    .container-slider-video {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .container-slider-video video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: relative;
        z-index: 1; 
    }

    .container-slider-video::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.45);
        z-index: 2;
        pointer-events: none; 
    }

    .container-slider-video .content {
        position: absolute;
        padding: 0 3rem;
        width: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
    }

    .container-slider-video .content .title-container {
        position: relative;
        color: #fff;
        display: inline-block;
    }

    .container-slider-video .content .title-container .title-ocean-1 {
        position: absolute;
        left: 0;
        color: transparent;
        -webkit-text-stroke: 1px #fff;
    }

    .container-slider-video .content button {
        margin: 2em auto;
        display: block;
    }

    .container-slider-video .content .title-container .title-ocean-2 {
        color: #05AFF2;
        animation: animate 5s ease-in-out infinite;
    }

    @keyframes animate {
        0%, 100% {
            clip-path: polygon(
                0% 20%, 
                10% 35%, 
                25% 55%, 
                40% 35%, 
                55% 65%, 
                70% 30%, 
                85% 60%, 
                100% 25%, 
                100% 100%, 
                0% 100%
            );
        }
        50% {
            clip-path: polygon(
                0% 70%, 
                10% 45%, 
                25% 30%, 
                40% 55%, 
                55% 25%, 
                70% 60%, 
                85% 40%, 
                100% 65%, 
                100% 100%, 
                0% 100%
            );
        }
    }

    @media (max-width: 600px) {
        .container-slider-video .content {
            top: 55%;
        }
    }
</style>