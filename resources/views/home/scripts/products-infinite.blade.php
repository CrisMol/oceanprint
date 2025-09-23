<script>
    document.addEventListener("DOMContentLoaded", function () {
        const colors = [
            "#05AFF2",  // Azul Brillante
            "#002745",  // Azul Oscuro
            "#ff0071",  // Rosa Energético Oscuro
            "#00a2b0",  // Turquesa Calmante
        ];

        const items = document.querySelectorAll(".products__item");

        items.forEach((item, index) => {
            const color = colors[index % colors.length]; // Recorre el array en bucle
            item.style.setProperty("--random-color", color);
        });

        new Swiper('.swiper-products', {
            slidesPerView: 'auto',
            spaceBetween: 120,
            loop: true,
            speed: 4000,
            grabCursor: true,
            autoplay: {
                delay: 1,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                }
            }
        });
    });
</script>