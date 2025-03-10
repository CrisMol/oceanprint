<script>
    document.addEventListener("DOMContentLoaded", function () {
        const images = document.querySelectorAll(".productCard .image img");

        // Evento cuando el mouse entra en la imagen
        images.forEach((image) => {
            image.closest('.productCard').addEventListener("mouseenter", function () {
                // Después de 1 segundo de que el mouse esté sobre la imagen
                setTimeout(() => {
                    // Evento de movimiento del mouse dentro del productCard
                    image.closest('.productCard').addEventListener("mousemove", function (e) {
                        const offsetX = e.clientX - this.offsetLeft; // Obtener posición relativa X
                        const offsetY = e.clientY - this.offsetTop;  // Obtener posición relativa Y
                        const speed = 10;  // Controlar la velocidad del movimiento

                        // Calcular el desplazamiento según el movimiento del mouse
                        const moveX = (offsetX - this.offsetWidth / 2) / speed;
                        const moveY = (offsetY - this.offsetHeight / 2) / speed;

                        // Aplica el movimiento
                        image.style.transform = `translateX(${moveX}px) rotate(-8deg)`;
                    });
                }, 1000); // 1000 ms (1 segundo)
            });

            // Evento cuando el mouse sale del contenedor productCard
            image.closest('.productCard').addEventListener("mouseleave", function () {
                // Restaurar la imagen a su posición original
                image.style.transform = 'translateX(0) translateY(0) rotate(0deg)';
            });
        });
    });
</script>