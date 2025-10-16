<script>
    /*document.getElementById("testimonials").addEventListener("mousemove", function(e) {
        this.querySelectorAll(".layer").forEach(layer => {
            const speed = layer.getAttribute("data-speed");
            const rotate = layer.getAttribute("data-rotate");
            const x = (this.offsetWidth - e.clientX * speed) / 100;
            const y = (this.offsetHeight - e.clientY * speed) / 100;
            layer.style.transform = `translateX(${x}px) translateY(${y}px) rotate(${rotate}deg)`;
        });
    });*/
    const swiperTestimonials = new Swiper('.testimonial-swiper', {
        slidesPerView: 3.3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000, 
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.2,
                spaceBetween: 25,
            },
        }
    });
</script>