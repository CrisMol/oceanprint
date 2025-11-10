<script>
    document.addEventListener("scroll", function () {
        const title = document.querySelector(".scroll-title");
        const container = document.getElementById("location");

        const scrollPosition = window.scrollY;
        const containerTop = container.offsetTop;
        const containerHeight = container.offsetHeight;

        if (scrollPosition >= containerTop && scrollPosition <= containerTop + containerHeight) {
            const relativeScroll = scrollPosition - containerTop;
            title.style.transform = `translateX(${relativeScroll / 5}px)`;
        } else {
            title.style.transform = 'translateX(0)';
        }
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

        document.getElementById('btn-directions').addEventListener('click', function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    const origin = position.coords.latitude + ',' + position.coords.longitude;
                    const destination = "-0.2093269970778693, -78.50605679044062"; // Coordenadas del local lat,lng
                    const url = `https://www.google.com/maps/search/OCEAN%20PRINT/@-0.2096,-78.506,17z?hl=es`;
                    window.open(url, '_blank');
                }, function () {
                    alert('No se pudo obtener tu ubicación actual.');
                });
            } else {
                alert('Tu navegador no soporta geolocalización.');
            }
        });
    });
</script>