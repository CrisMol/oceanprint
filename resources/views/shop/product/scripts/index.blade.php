<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Código para actualizar la selección de precios del producto
        const tieredPrices = document.querySelectorAll(".tiered-price");
        
        const quantityInput = document.querySelector("input[name='quantity']");
        const nameInput = document.querySelector("input[name='name']");
        const priceInput = document.querySelector("input[name='price']");
        const priceTotalSpan = document.getElementById("priceTotal");
        const priceUnitSpan = document.getElementById("unitPrice");
        const priceTotalTaxesSpan = document.getElementById("priceTotalTaxes");

        // Función para manejar el clic en un elemento tiered-price
        function handleTieredPriceClick(event) {
            const selectedElement = event.currentTarget;

            removeActiveClass();

            selectedElement.classList.add("active");

            const selectedQuantity = selectedElement.getAttribute("data-quantity");
            const selectedProductName = selectedElement.getAttribute("data-product-name");
            const selectedVariationName = selectedElement.getAttribute("data-variation-name");
            const selectedPrice = selectedElement.getAttribute("data-price");

            updateUnitPrice(selectedPrice);
            const priceTotal = updatePriceTotal(selectedPrice, selectedQuantity);
            const priceTotalTaxes = updatePriceTotalWithTaxes(priceTotal);

            const selectedVariation = {
                "quantity": selectedQuantity,
                "productName": selectedProductName,
                "variationName": selectedVariationName,
                "price": priceTotalTaxes
            };

            updateVariationInputs(selectedVariation);
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

        function updatePriceTotal(price, selectedQuantity) {
            const parsedPrice = parseFloat(price);
            const parsedQuantity = parseInt(selectedQuantity, 10);

            if (isNaN(parsedPrice) || isNaN(parsedQuantity)) {
                console.error("Precio o cantidad no válidos");
                if (priceTotalSpan) {
                    priceTotalSpan.textContent = "$0.00";
                }
                return;
            }

            if (parsedPrice < 0 || parsedQuantity < 0) {
                console.warn("Precio o cantidad negativa detectada");
                if (priceTotalSpan) {
                    priceTotalSpan.textContent = "$0.00";
                }
                return;
            }

            const total = (parsedPrice * parsedQuantity).toFixed(2);

            if (priceTotalSpan) {
                priceTotalSpan.textContent = `$${total}`;
            }

            return total;
        }

        function updateUnitPrice(price) {
            if (priceUnitSpan) {
                priceUnitSpan.textContent = `$${price}`;
            }
        }

        function updatePriceTotalWithTaxes(subtotal) {
            const parsedSubtotal = parseFloat(subtotal);

            if (isNaN(parsedSubtotal) || parsedSubtotal < 0) {
                console.error("Subtotal no válido");
                if (priceTotalTaxesSpan) priceTotalTaxesSpan.textContent = "$0.00";
                return;
            }

            // Calcular total con IVA 15%
            const totalWithTaxes = parsedSubtotal * 1.15;

            if (priceTotalTaxesSpan) {
                priceTotalTaxesSpan.innerHTML = `<b>$${totalWithTaxes.toFixed(2)}</b>`;
            }

            return totalWithTaxes;
        }


        // Agregar evento de clic a cada elemento .tiered-price
        tieredPrices.forEach(el => {
            el.addEventListener("click", handleTieredPriceClick);
        });

        // Tarjetas
        let cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                let rect = card.getBoundingClientRect();
                let mouseX = e.clientX - rect.left;
                let mouseY = e.clientY - rect.top;

                let Ripple = document.createElement('div');
                Ripple.classList.add('ripple');
                Ripple.style.left = `${mouseX}px`;
                Ripple.style.top = `${mouseY}px`;
                card.appendChild(Ripple);

                Ripple.addEventListener('animationend', () => {
                    Ripple.remove();
                })
            })
        })

        // Slide
        const slides  = document.querySelectorAll(".slide");
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");
        let activeIndex = Math.floor(slides.length / 2);

        function updateSlideTransforms() {
            slides.forEach((slide, index) => {
                const diff = index - activeIndex;
                slide.classList.remove("active");

                if (diff < 0) {
                    slide.style.transform = `translateX(${diff * 120}%)`; // 100% + 20% espacio
                    slide.style.zIndex = diff;
                } else if (diff > 0) {
                    slide.style.transform = `translateX(${diff * 120}%)`; // 100% + 20% espacio
                    slide.style.zIndex = -diff;
                } else {
                    slide.style.transform = "rotate(0deg) translateY(0) translateX(0)";
                    slide.style.zIndex = 0;
                    slide.classList.add("active");
                }
            });

            prevButton.disabled = activeIndex === 0;
            nextButton.disabled = activeIndex === slides.length - 1;
            prevButton.style.opacity = prevButton.disabled ? "0.1" : "1";
            nextButton.style.opacity = nextButton.disabled ? "0.1" : "1";
        }

        function prevSlide() {
            activeIndex = (activeIndex -1 +slides.length) % slides.length;
            updateSlideTransforms();
        }

        function nextSlide() {
            activeIndex = (activeIndex + 1) % slides.length;
            updateSlideTransforms();
        }

        prevButton.addEventListener("click", prevSlide);
        nextButton.addEventListener("click", nextSlide);

        updateSlideTransforms();

        /**
         * Beneficios
        */
        const tabs = document.querySelectorAll(".benefit-tab");
        const panels = document.querySelectorAll(".benefit-panel");
        const images = document.querySelectorAll(".benefit-image");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                const target = tab.getAttribute("data-benefit-id");
                console.log(target)

                // 1. Quitar "activo" en todos
                tabs.forEach(t => t.classList.remove("is-active"));
                panels.forEach(p => p.hidden = true);
                images.forEach(img => img.classList.remove("is-active"));

                // 2. Activar el clicado
                tab.classList.add("is-active");
                document.getElementById(`${target}`).hidden = false;
                document.querySelector(`.benefit-image[data-benefit-id="${target}"]`).classList.add("is-active");
            });
        });

        /*
        * Animación de los beneficios
        **/
        const benefits = document.querySelectorAll('.product-benefits .benefit');
        const triggerSection = document.querySelector('.product-benefits'); // sección que dispara animación

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    benefits.forEach((benefit, index) => {
                        setTimeout(() => {
                            benefit.classList.add('visible');
                        }, index * 400); // retraso entre tarjetas
                    });
                    observer.unobserve(entry.target); // solo animar una vez
                }
            });
        }, { threshold: 0.2 });

        if(triggerSection) observer.observe(triggerSection);

        /**
         * Zoom de imágenes
        */
        const zoomResult = document.getElementById('zoom-result');
        const imagesGallery = document.querySelectorAll('.zoomable');

        imagesGallery.forEach(img => {
            img.addEventListener('mouseenter', () => {
                zoomResult.style.backgroundImage = `url('${img.src}')`;
                zoomResult.style.display = 'block';
            });

            img.addEventListener('mousemove', (e) => {
                const rect = img.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const xPercent = x / rect.width * 100;
                const yPercent = y / rect.height * 100;

                // Ajusta la posición del fondo según el cursor
                zoomResult.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
                zoomResult.style.backgroundSize = `${img.naturalWidth * 2}px ${img.naturalHeight * 2}px`;
            });

            img.addEventListener('mouseleave', () => {
                zoomResult.style.display = 'none';
            });

            // Móvil: abrir imagen grande al tocar
            img.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    window.open(img.src, '_blank');
                }
            });
        });
    });
</script>