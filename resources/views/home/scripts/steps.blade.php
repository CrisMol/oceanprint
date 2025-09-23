<script>
    let cards = document.querySelectorAll(".card-process");

    let stackArea = document.querySelector(".stack-area");

    function rotateCards() {
        let angle = 0;
        const isMobile = window.innerWidth <= 768; // Ajusta el tamaño según tu diseño móvil
        cards.forEach((card, index) => {
            // Si la tarjeta está lejos (away), usa una transformación fija
            if (card.classList.contains("away")) {
                card.style.transform = `translateY(-120vh) rotate(-48deg)`;
            } else {
                // Ajustar el ángulo de rotación según si es móvil o no
                const rotationValue = isMobile ? angle / 3 : angle;  // Reduce la rotación en móviles

                card.style.transform = `rotate(${rotationValue}deg)`;
                angle = angle - 10;
                card.style.zIndex = cards.length - index;
            }

            // Asegurar que las transiciones sean suaves
            card.style.transition = "transform 0.3s ease, z-index 0.3s ease";
        });
    }

    rotateCards();

    const stepsSection = document.getElementById("steps");
    const clientsSection = document.getElementById("brands");

    // Función para verificar si un elemento está en vista
    const isInViewport = (element) => {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2;
    };

    window.addEventListener("scroll", () => {
        let distance = window.innerHeight * 0.5;

        let topVal = stackArea.getBoundingClientRect().top;

        let index = -1 * (topVal / distance + 1);

        index = Math.floor(index);

        for (i = 0; i < cards.length - 1; i++) {
            if (i <= index) {
                cards[i].classList.add("away");
            } else {
                cards[i].classList.remove("away");
            }
        }

        rotateCards();

        /**
         * Cambio de fondo de colores
        */
        const body = document.body;
        const tituloAlianza = document.getElementById('business');
        const h2 = tituloAlianza.querySelector('h2'); 


        if (isInViewport(stepsSection)) {
            body.classList.add("background-deep-ocean-blue");
            body.classList.remove("background-primary");
            h2.classList.remove('visible');
        } else if (isInViewport(clientsSection)) {
            body.classList.add("background-deep-ocean-blue");
            body.classList.remove("background-primary");
            h2.classList.remove('visible');
        } else {
            body.classList.remove("background-deep-ocean-blue");
            body.classList.add("background-primary");
            h2.classList.add('visible');
        }
    });
</script>
