<script>
    document.addEventListener('DOMContentLoaded', function () {
        const observers = document.querySelectorAll('.containerImageBusiness');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const description = entry.target.querySelector('.containerDescriptionBusiness');
                if (entry.isIntersecting) {
                    description.classList.add('visible');
                } else {
                    description.classList.remove('visible');
                }
            });
        }, {
            threshold: 0.4 // ajusta esto para más o menos sensibilidad
        });

        observers.forEach(container => observer.observe(container));
    });
</script>
