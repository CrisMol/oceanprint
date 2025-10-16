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
            speed: 1000,      // Duración de transición en 1 segundo
            grabCursor: true,
            autoplay: {
                delay: 1000,  // Tiempo entre cada cambio (2 segundos)
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next-products',
                prevEl: '.swiper-button-prev-products',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
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