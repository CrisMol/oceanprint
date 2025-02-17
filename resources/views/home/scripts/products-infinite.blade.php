<script>
    document.addEventListener("DOMContentLoaded", function () {
        const colors = [
            "#05AFF2",  // Azul Brillante
            "#F177BA",  // Rosa Suave
            "#0688bb",  // Azul Oscuro
            "#a8055f",  // Rosa Energético Oscuro
            "#03A6A6",  // Turquesa Calmante
            "#32CD32"   // Verde Lima Fresco
        ];

        const items = document.querySelectorAll(".products__item");

        items.forEach((item, index) => {
            const color = colors[index % colors.length]; // Recorre el array en bucle
            item.style.setProperty("--random-color", color);
        });
    });
</script>