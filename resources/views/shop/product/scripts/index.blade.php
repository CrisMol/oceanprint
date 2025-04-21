<script>
    document.addEventListener("DOMContentLoaded", function () {
        const icon = document.querySelector(".icon-imprent-ecological");
        let rotation = 0;
        let lastScrollTop = window.scrollY;

        window.addEventListener("scroll", function () {
            let currentScroll = window.scrollY;
            
            if (currentScroll > lastScrollTop) {
                // Scroll hacia abajo → Gira en sentido horario
                rotation += 1;
            } else {
                // Scroll hacia arriba → Gira en sentido antihorario
                rotation -= 1;
            }

            icon.style.transform = `rotate(${rotation}deg)`;
            lastScrollTop = currentScroll; // Actualiza la posición del scroll
        });

        const progressBar = document.querySelector(".progress-bar");
        const section = document.querySelector(".content-advantages");

        function updateProgress() {
            const sectionTop = section.getBoundingClientRect().top;
            const sectionHeight = section.offsetHeight;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight && sectionTop + sectionHeight > 0) {
                let progress = ((windowHeight - sectionTop) / windowHeight) * 100;
                if (progress > 100) progress = 100;
                progressBar.style.width = `${progress}%`;
            }
        }

        window.addEventListener("scroll", updateProgress);
        updateProgress();

        // Código para actualizar la selección de precios del producto
        const tieredPrices = document.querySelectorAll(".tiered-price");
        
        const quantityInput = document.querySelector("input[name='quantity']");
        const nameInput = document.querySelector("input[name='name']");
        const priceInput = document.querySelector("input[name='price']");
        const priceTotalSpan = document.getElementById("priceTotal");

        // Función para manejar el clic en un elemento tiered-price
        function handleTieredPriceClick(event) {
            const selectedElement = event.currentTarget;

            removeActiveClass();

            selectedElement.classList.add("active");

            const selectedQuantity = selectedElement.getAttribute("data-quantity");
            const selectedProductName = selectedElement.getAttribute("data-product-name");
            const selectedVariationName = selectedElement.getAttribute("data-variation-name");
            const selectedPrice = selectedElement.getAttribute("data-price");

            const selectedVariation = {
                "quantity": selectedQuantity,
                "productName": selectedProductName,
                "variationName": selectedVariationName,
                "price": selectedPrice
            };

            updateVariationInputs(selectedVariation);
            updatePriceTotal(selectedPrice);
        }

        // Función para quitar la clase 'active' de todos los elementos
        function removeActiveClass() {
            tieredPrices.forEach(el => el.classList.remove("active"));
        }

        // Función para actualizar el valor del input oculto
        function updateVariationInputs(selectedVariation) {
            if (quantityInput) {
                quantityInput.value = selectedVariation.quantity;
            }

            if (nameInput) {
                const nameVariation = `${selectedVariation.productName}-${selectedVariation.variationName}`;
                nameInput.value = nameVariation;
            }

            if (priceInput) {
                priceInput.value = selectedVariation.price;
            }
        }

        function updatePriceTotal(price) {
            if (priceTotalSpan) {
                priceTotalSpan.textContent = `$${price}`;
            }
        }

        // Agregar evento de clic a cada elemento .tiered-price
        tieredPrices.forEach(el => {
            el.addEventListener("click", handleTieredPriceClick);
        });
    });
</script>