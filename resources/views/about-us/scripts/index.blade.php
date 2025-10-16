<script>
    document.addEventListener("DOMContentLoaded", function () {
        function animateCounter(element, start, end, duration) {
            let startTime = null;
            function updateCounter(currentTime) {
                if (!startTime) startTime = currentTime;
                const progress = Math.min((currentTime - startTime) / duration, 1);
                element.textContent = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }
            requestAnimationFrame(updateCounter);
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.querySelectorAll(".digit").forEach(numElement => {
                        const finalValue = parseInt(numElement.textContent.replace(/\D/g, ""), 10);
                        numElement.textContent = "0";
                        animateCounter(numElement, 0, finalValue, 2000);
                        numElement.dataset.animated = "true";
                    });
                }
            });
        }, { threshold: 0.5 }); // Se activa cuando el 50% del contenedor es visible

        const target = document.getElementById("container-numbers");
        if (target) observer.observe(target);
    });
</script>