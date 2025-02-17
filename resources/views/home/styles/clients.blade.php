<style>
    .logo-slider {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }

    .logo-slider:hover .logos-slide {
        animation-play-state: paused;
    }

    .logos-slide {
        display: inline-block;
        animation: 20s slide infinite linear;
    }

    .logos-slide .slide {
        display: inline-block;
    }

    .logos-slide img {
        max-width: 150px;
        margin: 0 30px;
    }

    .logo-slider .titleLogos {
        text-align: center;
        padding-bottom: 3rem;
    }

    @keyframes slide {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }

    @media (max-width: 768px) {
        .logo-slider {
            padding: 2rem;
        }
    }
</style>