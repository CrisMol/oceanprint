<script>
    document.addEventListener("DOMContentLoaded", () => {
        const images = document.querySelectorAll(".content-images img");
        let currentIndex = 0;

        // Función para cambiar imágenes
        function changeImage() {
            // Oculta la imagen actual
            images[currentIndex].classList.remove("active");

            // Calcula el índice de la siguiente imagen
            currentIndex = (currentIndex + 1) % images.length;

            // Muestra la siguiente imagen
            images[currentIndex].classList.add("active");
        }

        // Inicia el cambio de imágenes cada 3 segundos
        setInterval(changeImage, 3000);

        // Activa la primera imagen al cargar
        images[currentIndex].classList.add("active");
    });
</script>