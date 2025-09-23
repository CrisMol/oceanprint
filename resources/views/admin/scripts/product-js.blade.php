<script>
    // Funciones para productos
    $(function(){
            $('.selectpicker').selectpicker({
                noneResultsText: "Agregar {0}"
            });

            $(document).on('click', '.variation-select ~ .dropdown-menu li.no-results', function () {
                let newVariation = $(this).text().split('"')[1];
                showModalCreateVariationProduct(newVariation);
            });

            function showModalCreateVariationProduct(variation) {
                $('#nameVariationProduct').val(variation);
                $('#createVariationProductModal').modal('show');
            }

            $(document).on('click', '.quantity-select ~ .dropdown-menu li.no-results', function () {
                let newQuantity = $(this).text().split('"')[1];
                showModalCreateQuantityVariationProduct(newQuantity);
            });

            function showModalCreateQuantityVariationProduct(quantity) {
                $('#quantityProductVariation').val(quantity);
                $('#createQuantityProductModal').modal('show');
            }

            $("#addPriceRow").click(function () {
                let rowCount = $(".pricing-row").length;

                let newRow = `
                <div class="pricing-row d-flex gap-2 align-items-center mb-2 w-100">
                    <fieldset class="name w-20" data-type-product="variacion">
                        <div class="body-title mb-10">Variaciones <span class="tf-color-1">*</span></div>
                        <select name="variation_id[]" class="selectpicker variation-select mb-10"
                                data-width="100%" data-none-selected-text="Seleccionar variación"
                                data-live-search="true">
                            <option value="">Seleccionar variación</option>
                            @foreach($variationsProduct as $variation)
                                <option value="{{ $variation->id }}">{{ $variation->name }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name w-20" data-type-product="cantidad">
                        <div class="body-title mb-10">Cantidades <span class="tf-color-1">*</span></div>
                        <select name="quantity_id[]" class="selectpicker quantity-select mb-10"
                                data-width="100%" data-none-selected-text="Seleccionar cantidad"
                                data-live-search="true">
                            <option value="">Seleccionar cantidad</option>
                            @foreach($quantitiesProduct as $quantity)
                                <option value="{{ $quantity->id }}">{{ $quantity->quantity }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="name w-20">
                        <div class="body-title mb-10">Precio Regular <span class="tf-color-1">*</span></div>
                        <input type="number" step="0.01" class="mb-10 form-control" placeholder="Precio Regular"
                            name="regular_price_variation[]">
                    </fieldset>

                    <fieldset class="name w-20">
                        <div class="body-title mb-10">Precio de Venta</div>
                        <input type="number" step="0.01" class="mb-10 form-control" placeholder="Precio de Venta"
                            name="sale_price_variation[]">
                    </fieldset>

                    <!-- Es Popular -->
                    <fieldset class="name d-flex gap-3 justify-content-center" style="align-self: flex-start;">
                        <input type="hidden" name="is_popular[${rowCount}]" value="0">
                        <input class="mb-10" type="checkbox" name="is_popular[${rowCount}]" value="1">
                        <div class="body-title mb-10">Popular</div>
                    </fieldset>

                    <button type="button" class="btn btn-danger remove-row d-flex justify-content-center" style="align-self: flex-start;">X</button>
                </div>`;

                $("#pricingContainer").append(newRow);
                $(".selectpicker").selectpicker('refresh'); // Refrescar selectpicker para que los nuevos select tengan estilos
            });

            $('select[name="type_product"]').on('change', function () {
                let selectedType = $(this).val();

                if (selectedType === 'simple') {
                    // Ocultar contenedores para variaciones y mostrar los de precios simples
                    $('#rowAddMorePrice, #pricingContainer').hide();
                    $('#containerPricesSimple').show();

                    // Poner los valores en 0 para evitar errores de validación
                    //$('input[name="regular_price"], input[name="sale_price"]').val(0);
                } else if (selectedType === 'variacion') {
                    // Ocultar los precios simples y mostrar los de variaciones
                    $('#containerPricesSimple').hide();
                    $('#rowAddMorePrice, #pricingContainer').show();

                    // Resetear los valores de los campos ocultos para que no se envíen como 0 si luego cambian de nuevo
                    //$('input[name="regular_price"], input[name="sale_price"]').val(0);
                }
            });

            // Disparar el cambio al cargar la página para que muestre el estado correcto
            $('select[name="type_product"]').trigger('change');
        });

        function createVariationProduct() {
            let form = document.getElementById('createVariationProductForm');
            const button = $('#buttonCreateVariationProduct');

            // Verifica si el formulario es válido
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            let variationName = $('#nameVariationProduct').val();

            button.prop("disabled", true).text("Creando...");

            $.ajax({
                url: '{{ route('admin.product.variation.store') }}', 
                method: 'POST',
                data: { name_variation: variationName },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Token de seguridad en Laravel
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Éxito!',
                            text: response.message,
                            confirmButtonText: 'Aceptar'
                        }).then(() => {
                            addNewVariationProductSelect(response.variation.id, response.variation.name);
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Hubo un error al agregar la variación.',
                            confirmButtonText: 'Intentar de nuevo'
                        });
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = Object.values(errors).flat().join("\n");
                        alert(`Error de validación:\n${errorMessages}`);
                    } else {
                        alert(`Error inesperado: ${xhr.statusText}`);
                    }
                },
                complete: function() {
                    // Habilitar el botón y restaurar el texto
                    button.prop("disabled", false).text("Crear");
                }
            });
        }

        function addNewVariationProductSelect(id, name) {
            // Buscar todos los select con clase 
            $('select[name="variation_id[]"]').each(function () {
                let select = $(this);

                select.append('<option value="' + id + '" data-nuevo="true">' + name + '</option>');

                // Refrescar selectpicker para actualizar la lista de opciones
                select.selectpicker('refresh');
            });
        }

        function createQuantityVariationProduct() {
            let form = document.getElementById('createQuantityVariationProductForm');
            const button = $('#buttonCreateQuantityVariationProduct');

            // Verifica si el formulario es válido
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            let quantity = $('#quantityProductVariation').val();

            button.prop("disabled", true).text("Creando...");

            $.ajax({
                url: '{{ route('admin.product.quantity.variation.store') }}', 
                method: 'POST',
                data: { quantity_product_variation: quantity },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Token de seguridad en Laravel
                },
                success: function(response) {
                    if (response.success) {
                        console.log(response)
                        alert(`${response.message}`);
                        addNewQuantityVariationProductSelect(response.quantity.id, response.quantity.quantity);
                    } else {
                        alert("Hubo un error al agregar la variación.");
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = Object.values(errors).flat().join("\n");
                        alert(`Error de validación:\n${errorMessages}`);
                    } else {
                        alert(`Error inesperado: ${xhr.statusText}`);
                    }
                },
                complete: function() {
                    // Habilitar el botón y restaurar el texto
                    button.prop("disabled", false).text("Crear");
                }
            });
        }

        function addNewQuantityVariationProductSelect(id, quantity) {
            // Buscar todos los select con clase 
            $('select[name="quantity_id[]"]').each(function () {
                let select = $(this);

                select.append('<option value="' + id + '" data-nuevo="true">' + quantity + '</option>');

                // Refrescar selectpicker para actualizar la lista de opciones
                select.selectpicker('refresh');
            });
        }

        // Eliminar fila de precios
        $(document).on("click", ".remove-row", function () {
            $(this).closest(".pricing-row").remove();
        });
</script>