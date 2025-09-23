@extends('layouts.admin')

@section('content')
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Agregar producto</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{ route('admin.index') }}">
                        <div class="text-tiny">Panel</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{ route('admin.products') }}">
                        <div class="text-tiny">Productos</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Editar producto</div>
                </li>
            </ul>
        </div>
        <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data" action="{{ route('admin.product.update', ['id' => $product->id]) }}">
            @csrf
            @method('PUT')
            <input type="hidden" id="id" name="id" value="{{ $product->id }}">
            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Nombre de producto <span class="tf-color-1">*</span>
                    </div>
                    <input class="mb-10" type="text" placeholder="Ingresa el nombre del producto"
                        name="name" tabindex="0" value="{{ $product->name }}" aria-required="true" required="">
                    <div class="text-tiny">No exceda los 100 caracteres al ingresar el nombre del producto.</div>
                </fieldset>
                @error('name')
                    <span class="alert alert-danger text-center">
                            {{ $message }}
                    </span>
                @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Ingresa el slug del producto"
                        name="slug" tabindex="0" value="{{ $product->slug }}" aria-required="true" required="">
                        <div class="text-tiny">No exceda los 100 caracteres al ingresar el nombre del producto.</div>
                </fieldset>
                @error('slug')
                    <span class="alert alert-danger text-center">
                            {{ $message }}
                    </span>
                @enderror

                <div class="gap22 cols">
                    <fieldset class="category">
                        <div class="body-title mb-10">Categoria <span class="tf-color-1">*</span>
                        </div>
                        <div class="select">
                            <select class="" name="category_id">
                                <option>Escoger categoría</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? "selected" : "" }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>
                    @error('category_id')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror

                    <fieldset class="brand">
                        <div class="body-title mb-10">Brand <span class="tf-color-1">*</span>
                        </div>
                        <div class="select">
                            <select class="" name="brand_id">
                                <option>Escoger Marca</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? "selected" : "" }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>
                    @error('brand_id')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                </div>

                <fieldset class="tags">z
                    <div class="body-title mb-10">Etiquetas</div>
                    <select id="tags" name="tags[]" class="form-control select2 w-100" multiple="multiple">
                        @foreach ($tags as $tag) <!-- Muestra todas las etiquetas disponibles -->
                            <option value="{{ $tag->id }}" 
                                @if($product->tags->contains($tag->id)) selected @endif>
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>
                </fieldset>

                <fieldset class="shortdescription">
                    <div class="body-title mb-10">Descripción corta <span class="tf-color-1">*</span></div>
                    <textarea class="mb-10 ht-150" name="short_description"
                        placeholder="Descripción corta" tabindex="0" aria-required="true"
                        required="">{{ $product->short_description }}</textarea>
                        <div class="text-tiny">No exceda los 100 caracteres al ingresar el nombre del producto.</div>
                </fieldset>
                @error('short_description')
                    <span class="alert alert-danger text-center">
                            {{ $message }}
                    </span>
                @enderror

                <fieldset class="description">
                    <div class="body-title mb-10">Descripción <span class="tf-color-1">*</span>
                    </div>
                    <textarea class="mb-10" name="description" placeholder="Descripción"
                        tabindex="0" aria-required="true" required="">{{ $product->description }}</textarea>
                    <div class="text-tiny">No exceda los 100 caracteres al ingresar el nombre del producto.</div>
                </fieldset>
                @error('description')
                    <span class="alert alert-danger text-center">
                            {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="wg-box">
                <fieldset>
                    <div class="body-title">Subir imágenes <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        @if ($product->image)
                            <div class="item" id="imgpreview">
                                <img src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                    class="effect8" alt="">
                            </div>
                        @endif
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Suelta tus imágenes aquí o selecciona <span
                                    class="tf-color">haz clic para explorar</span></span>
                                <input type="file" id="myFile" name="image" accept="image/*">
                            </label>
                        </div>
                    </div>
                </fieldset>
                @error('image')
                    <span class="alert alert-danger text-center">
                            {{ $message }}
                    </span>
                @enderror

                <fieldset>
                    <div class="body-title mb-10">Subir galería de imágenes</div>
                    <div class="upload-image mb-16">
                        @if ($product->images)
                            <div class="item gitems">
                                @foreach (explode(',', $product->images) as $img)
                                    <img src="{{ asset('uploads/products') }}/{{ trim($img) }}" alt="">
                                @endforeach
                            </div>
                        @endif
                        <div id="galUpload" class="item up-load">
                            <label class="uploadfile" for="gFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="text-tiny">Suelta tus imágenes aquí o selecciona <span
                                        class="tf-color">haz clic para explorar</span></span>
                                <input type="file" id="gFile" name="images[]" accept="image/*"
                                    multiple="">
                            </label>
                        </div>
                    </div>
                </fieldset>
                @error('images')
                    <span class="alert alert-danger text-center">
                            {{ $message }}
                    </span>
                @enderror

                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Tipo de producto <span class="tf-color-1">*</span></div>
                        <div class="select">
                            <select name="type_product">
                                <option value="simple" 
                                    {{ (isset($product) && $product->tieredPrices->isNotEmpty()) ? '' : 'selected' }}>
                                    Producto Simple
                                </option>
                                <option value="variacion" 
                                    {{ (isset($product) && $product->tieredPrices->isNotEmpty()) ? 'selected' : '' }}>
                                    Producto Variable
                                </option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                
                @error('type_product')
                    <span class="alert alert-danger text-center">
                        {{ $message }}
                    </span>
                @enderror                

                <div class="cols gap22" id="containerPricesSimple">
                    <fieldset class="name" data-type-product="simple">
                        <div class="body-title mb-10">Precio regular <span
                                class="tf-color-1">*</span></div>
                        <input class="mb-10 form-control" type="text" placeholder="Ingresa precio regular"
                            name="regular_price" tabindex="0" value="{{ $product->regular_price }}" aria-required="true"
                            required>
                    </fieldset>
                    @error('regular_price')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                    <fieldset class="name" data-type-product="simple">
                        <div class="body-title mb-10">Precio de venta <span
                                class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Ingresa precio de venta"
                            name="sale_price" tabindex="0" value="{{ $product->sale_price }}" aria-required="true"
                            required="">
                    </fieldset>
                    @error('sale_price')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="row" id="rowAddMorePrice">
                    <div class="col-12">
                        <!-- Botón para agregar más filas -->
                        <div class="mt-2">
                            <button type="button" class="btn btn-success" id="addPriceRow">Agregar Precio</button>
                        </div>
                    </div>
                </div>

                <div class="" id="pricingContainer">
                    @if($product->tieredPrices->isNotEmpty())
                        @foreach($product->tieredPrices as $key => $tieredPrice)
                            <div class="pricing-row d-flex gap-2 align-items-center mb-2 w-100">
                                <input type="hidden" name="variation_product_id[]" value="{{ $tieredPrice->id }}">
                                <!-- Variaciones -->
                                <fieldset class="name w-20" data-type-product="variacion">
                                    <div class="body-title mb-10">Variaciones <span class="tf-color-1">*</span></div>
                                    <select name="variation_id[]" class="selectpicker variation-select mb-10" data-width="100%" data-none-selected-text="Seleccionar variación" data-live-search="true">
                                    <option value="">Seleccionar variación</option>
                                    @foreach($variationsProduct as $variation)
                                        <option value="{{ $variation->id }}" 
                                            @selected(isset($tieredPrice) && $tieredPrice['variation_id'] == $variation->id)>
                                            {{ $variation->name }}
                                        </option>
                                    @endforeach
                                </select>
                                </fieldset>
                
                                <!-- Cantidades -->
                                <fieldset class="name w-20" data-type-product="cantidad">
                                    <div class="body-title mb-10">Cantidades <span class="tf-color-1">*</span></div>
                                    <select name="quantity_id[]" class="selectpicker quantity-select mb-10" data-width="100%" data-none-selected-text="Seleccionar cantidad" data-live-search="true">
                                    <option value="">Seleccionar cantidad</option>
                                    @foreach($quantitiesProduct as $quantity)
                                        <option value="{{ $quantity->id }}" 
                                            @selected(isset($tieredPrice) && $tieredPrice['quantity_id'] == $quantity->id)>
                                            {{ $quantity->quantity }}
                                        </option>
                                    @endforeach
                                </select>
                                </fieldset>
                
                                <!-- Precio Regular -->
                                <fieldset class="name w-20">
                                    <div class="body-title mb-10">Precio Regular <span class="tf-color-1">*</span></div>
                                    <input type="number" step="0.01" class="mb-10 form-control" placeholder="Precio Regular"
                                           name="regular_price_variation[]"
                                           value="{{ $tieredPrice->regular_price }}">
                                </fieldset>
                
                                <!-- Precio de Venta -->
                                <fieldset class="name w-20">
                                    <div class="body-title mb-10">Precio de Venta</div>
                                    <input type="number" step="0.01" class="mb-10 form-control" placeholder="Precio de Venta"
                                           name="sale_price_variation[]"
                                           value="{{ $tieredPrice->sale_price }}">
                                </fieldset>

                                <!-- Es Popular -->
                                <fieldset class="name d-flex gap-3 justify-content-center" style="align-self: flex-start;">
                                    <!-- Campo oculto para cuando el checkbox no está marcado -->
                                    <input type="hidden" name="is_popular[{{ $key }}]" value="0">
                                    
                                    <input class="mb-10" type="checkbox" name="is_popular[{{ $key }}]" value="1" 
                                        {{ $tieredPrice->is_popular == 1 ? 'checked' : '' }}>
                                    <div class="body-title mb-10">Popular</div>
                                </fieldset>                                                            

                                <button type="button" class="btn btn-danger remove-row w-20 d-flex justify-content-center" style="align-self: flex-start;">X</button>
                            </div>
                        @endforeach
                    @else
                        <div class="pricing-row d-flex gap-2 align-items-center mb-2 w-100">
                            <!-- Variaciones -->
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
                
                            <!-- Cantidades -->
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
                
                            <!-- Precio Regular -->
                            <fieldset class="name w-20">
                                <div class="body-title mb-10">Precio Regular <span class="tf-color-1">*</span></div>
                                <input type="number" step="0.01" class="mb-10 form-control" placeholder="Precio Regular"
                                       name="regular_price_variation[]" value="{{ $product->regular_price }}">
                            </fieldset>
                
                            <!-- Precio de Venta -->
                            <fieldset class="name w-20">
                                <div class="body-title mb-10">Precio de Venta</div>
                                <input type="number" step="0.01" class="mb-10 form-control" placeholder="Precio de Venta"
                                       name="sale_price_variation[]" value="{{ $product->sale_price }}">
                            </fieldset>
                            <!-- Es Popular -->
                            <fieldset class="name d-flex gap-3 justify-content-center" style="align-self: flex-start;">
                                <input class="mb-10" type="checkbox" name="is_popular[]">
                                <div class="body-title mb-10">Popular</div>
                            </fieldset>
                            <button type="button" class="btn btn-danger remove-row d-flex justify-content-center" style="align-self: flex-start; opacity: 0;">X</button>
                        </div>
                    @endif
                </div>                

                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">SKU <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Ingresa SKU" name="SKU"
                            tabindex="0" value="{{ $product->SKU }}" aria-required="true" required="">
                    </fieldset>
                    @error('SKU')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                    <fieldset class="name">
                        <div class="body-title mb-10">Cantidad <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Ingresa cantidad"
                            name="quantity" tabindex="0" value="{{ $product->quantity }}" aria-required="true"
                            required="">
                    </fieldset>
                    @error('quantity')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Stock</div>
                        <div class="select mb-10">
                            <select class="" name="stock_status">
                                <option value="instock" {{ "instock" == $product->stock_status ? "selected" : "" }}>En stock</option>
                                <option value="outofstock" {{ "outofstock" == $product->stock_status ? "selected" : "" }}>Fuera de stock</option>
                            </select>
                        </div>
                    </fieldset>
                    @error('stock_status')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                    <fieldset class="name">
                        <div class="body-title mb-10">Destacado</div>
                        <div class="select mb-10">
                            <select class="" name="featured">
                                <option value="0" {{ "0" == $product->featured ? "selected" : "" }}>No</option>
                                <option value="1" {{ "1" == $product->featured ? "selected" : "" }}>Si</option>
                            </select>
                        </div>
                    </fieldset>
                    @error('featured')
                        <span class="alert alert-danger text-center">
                                {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="cols gap10">
                    <button class="tf-button w-full" type="submit">Actualizar producto</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $(function(){
            $('#tags').select2({
                tags: true, // Permite crear nuevas etiquetas
                tokenSeparators: [','],
                placeholder: "Escribe una etiqueta...",
                ajax: {
                    url: "{{ route('tags.search') }}", // Ruta para buscar etiquetas existentes
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term // El texto que el usuario está escribiendo
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    }
                }
            });

            $('#myFile').on('change',function(e) {
               const photoInp =  $('#myFile');
               const [file] = this.files;
               if (file) {
                   $('#imgpreview img').attr('src', URL.createObjectURL(file));
                   $('#imgpreview').show();
               }
            });

            $('#gFile').on('change',function(e) {
               const photoInp =  $('#gFile');
               const gphotos= this.files;
               $.each(gphotos,function(key,val){
                  $('#galUpload').prepend(`<div class="item gitems"><img src="${ URL.createObjectURL(val) }" /></div>`);
               })
            });

            $("input[name='name']").on('change', function(e) {
                $("input[name='slug']").val(StringToSlug($(this).val()));
            });
        });

        function StringToSlug(Text) {
            return Text.toLowerCase()
            .replace(/[^\w ]+/g,"")
            .replace(/ +/g,"-");
        }
    </script>
    @include('admin.scripts.product-js')
@endpush