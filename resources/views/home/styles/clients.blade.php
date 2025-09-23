<style>
    .logo-slider {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        background: #fff; /* Fondo del slider */
    }
    .logo-slider .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto; /* Importante para que calcule el tamaño según el contenido */
    }

    .logo-slider .swiper-slide img {
        width: 175px;
        object-fit: contain;
    }

    .logo-slider .swiper-wrapper {
        transition-timing-function: linear !important;
    }
</style>