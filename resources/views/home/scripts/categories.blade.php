<script>
    const swiperCategories = new Swiper('.swiper-categories', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: false,
        navigation: {
            nextEl: '.swiper-button-next-categories',
            prevEl: '.swiper-button-prev-categories',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
                allowTouchMove: false, // Puedes mantener esto
            },
        }
    });
</script>