<script>
    document.addEventListener("scroll", function () {
        const title = document.querySelector(".scroll-title");
        const scrollPosition = window.scrollY;
        title.style.transform = `translateX(${scrollPosition / 5}px)`;
    });

    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('contactForm');

        const submitButton = form.querySelector('button[type="submit"]');

        submitButton.addEventListener('click', function() {
            submitButton.disabled = true;
            submitButton.innerText = 'Enviando...';
            form.submit(); // enviar formulario
        });

        @if(session('success') || $errors->any())
            if(form) {
                const yOffset = -200; // espacio extra arriba en px
                const y = form.getBoundingClientRect().top + window.pageYOffset + yOffset;
                window.scrollTo({ top: y, behavior: 'smooth' });
            }
        @endif
    });
</script>