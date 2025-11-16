@extends('layouts.app')

@push('styles')
    @include('shop.product.styles.index')
@endpush

@section('content')
    <div id="zoom-result"></div>
    <main class="product-detail">
        <section class="container" id="detail" data-menu-navigation="{{ $product->name }}">
            <article class="product">
                <div class="product-content">
                    <!-- Galería de imágenes en grid -->
                    @php
                        // Contamos cuántas imágenes adicionales tiene
                        $galleryCount = !empty($product->images)
                            ? count(explode(',', $product->images)) + 1 // +1 por la principal
                            : 1;
                    @endphp
                    <section class="product-images">
                        <div class="gallery" style="grid-template-columns: repeat(2, minmax(0, 1fr));">
                            @php
                                $img = asset('uploads/products/' . $product->image);
                            @endphp
                            <!-- Vista normal -->
                            <img class="thumbnail" src="{{ $img }}" alt="normal">
                            <!-- Espejo horizontal -->
                            <img class="thumbnail mirror-v" src="{{ $img }}" alt="mirror-v">
                            <!-- Espejo vertical -->
                            <img class="thumbnail mirror-h" src="{{ $img }}" alt="mirror-h">
                        </div>
                    </section>

                    <!-- Información del producto -->
                    <section class="product-info">
                        <div class="information scroll-section">
                            <h1 class="product-title scroll-animate">{{ $product->name }}</h1>
                            <div class="product-tags">
                                @forelse ($product->tags as $tag)
                                    <span class="product-tag">
                                        {{ $tag->name }}
                                    </span>
                                @empty
                                    <span class="product-tag product-tag-empty">
                                        Sin detalle
                                    </span>
                                @endforelse
                            </div>
                            <p class="product-description scroll-animate">
                                {{ $product->short_description }}
                            </p>
                        </div>

                        @php
                            $priceCart = 0.00;
                            $productName = "";
                            $quantityValue = 0;
                        @endphp

                        @if ($product->tieredPrices->isNotEmpty())
                            <div class="product-tiered-prices">
                                <div class="tiered-prices">
                                    @foreach ($product->tieredPrices as $tieredPrice)
                                        @php
                                            $variationNamePrice = $tieredPrice->variation->name ?? null;
                                            $quantityValuePrice = $tieredPrice->quantity->quantity ?? null;
                                            $price = $tieredPrice->sale_price ?? $tieredPrice->regular_price;
                                        @endphp
                                
                                        <div class="tiered-price {{ $tieredPrice->is_popular == 1 ? '' : '' }}" 
                                            data-id-variation="{{ $tieredPrice->variation->id ?? '' }}"
                                            data-price="{{ $price }}" data-product-name="{{ $product->name }}" data-quantity="{{ $quantityValuePrice }}" data-variation-name="{{ $variationNamePrice }}">
                                             
                                            @if ($variationNamePrice)
                                                <span class="variation-name">{{ $variationNamePrice }}</span>
                                            @endif
                                
                                            @if ($quantityValuePrice)
                                                <span class="quantity-value">{{ $quantityValuePrice }} unidades</span>
                                            @endif
                                        </div>

                                        @if($tieredPrice->is_popular == 1)
                                            
                                        @endif
                                    @endforeach
                                </div>                                                           
                            </div>
                        @else
                            <div class="product-detail-single">
                                <div class="tiered-single-price active">
                                    {{ $product->quantity }} unidades
                                </div>
                            </div>
                            @php
                                $priceCart = $product->sale_price ?? $product->regular_price;
                                $productName = $product->name;
                                $quantityValue = $product->quantity;
                            @endphp
                        @endif

                        <div class="product-cart">
                            <table class="cart-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            Valor unitario
                                        </td>
                                        <td class="price-right">
                                            <span id="unitPrice">
                                               $ {{ $priceCart }}
                                            </span> <span>+ iva</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Total
                                        </td>
                                        <td class="price-right">
                                            <span id="priceTotal">
                                                @if ($product->tieredPrices->isNotEmpty())
                                                    $ {{ $priceCart }}
                                                @else
                                                    $ {{ $product->subtotal }}
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Total con impuestos</b>
                                        </td>
                                        <td class="price-right">
                                            <span id="priceTotalTaxes">
                                                @if ($product->tieredPrices->isNotEmpty())
                                                    <b>$ {{ $priceCart }}</b>
                                                @else
                                                    <b>$ {{ $product->total_with_taxes }}</b>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            @if(session('success'))
                                <div id="flash-message" class="flash-message">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div id="flash-message-error" class="flash-message error">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form method="post" action="{{ route('cart.add') }}">
                                @csrf
                                <input type="hidden" name="quantity" value="{{ $quantityValue == 0 ? 1 : $quantityValue }}">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $productName }}">
                                <input type="hidden" name="price" value="{{ $product->tieredPrices->isNotEmpty() ? $priceCart : $product->total_with_taxes }}">

                                <button type="submit" class="product-button" style="margin-top:10px; width:100%;">
                                    <span class="button-animation"></span>
                                    <span class="button-text">Agregar al carrito</span>
                                </button>
                            </form>
                        </div>


                        <div class="product-benefits">
                            <div class="benefit">
                                <img 
                                    src="{{ asset('images/tienda/envios-a-domicilio-200.webp') }}" 
                                    alt="Envíos a domicilio"
                                    width="200"
                                    loading="lazy"
                                >
                                <p>
                                    Envío gratis
                                </p>
                            </div>
                            <div class="benefit art">
                                <img 
                                    src="{{ asset('images/tienda/arte-incluido-200.webp') }}" 
                                    alt="Diseño incluido"
                                    width="200"
                                    loading="lazy"
                                >
                                <p>
                                    Diseño Incluido
                                </p>
                            </div>
                            <div class="benefit warranty">
                                <img 
                                    src="{{ asset('images/tienda/garantia-200.png') }}" 
                                    alt="Coche de envios"
                                    width="200"
                                    loading="lazy"
                                >
                                <p>
                                    Garantía
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </article>
        </section>

        <section class="container bg-gray">
            <div class="information-content scroll-section">
                <div class="info-box scroll-animate">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </section>

        <section class="container bg-gray interests-products" id="interests" data-menu-navigation="Intereses">
            <div class="interests-products-content">
                <div class="interests-title scroll-section">
                    <h3 class="scroll-animate">
                        También te puede interesar
                    </h3>
                </div>
                <div class="slider">
                    <button class="control-btn prev" aria-label="Anterior">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <button class="control-btn next" aria-label="Siguiente">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>

                    @foreach ($rproducts as $rproduct)
                        <a class="slide" href="{{ route('shop.product.details', ['product_slug' => $rproduct->slug]) }}">
                            <img 
                                class="image-featured" 
                                src="{{ asset('uploads/products') }}/{{ $rproduct->image }}" 
                                alt="{{ $rproduct->name }}" loading="lazy" 
                                width="300"
                            >
                            <span>
                                {{ $rproduct->name }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="separator-bg">
            <div>
                <h2>
                    La única imprenta que combina innovación, precisión y compromiso.
                </h2>
            </div>
            <div>
                <h2>
                    La única imprenta que combina innovación, precisión y compromiso.
                </h2>
            </div>
        </section>

        <section class="container-oval" id="benefits" data-menu-navigation="¿Porqué nosotros?" style="display: none;">
            <div class="container">
                <div class="containerCards">
                    <div class="card">
                        <div class="content">
                            <h5 class="title">Confianza que conecta</h5>
                            <p>
                                Lo que dicen nuestros clientes importa. Sus experiencias te ayudan a decidir con seguridad.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h5 class="title">Calidad a buen precio</h5>
                            <p>
                                Ofrecemos precios competitivos sin sacrificar la excelencia en cada impresión.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h5 class="title">Todo en un solo lugar</h5>
                            <p>
                                Desde offset hasta digital: soluciones para todo tipo de necesidad gráfica.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="display: none;">
                <div class="content-advantages">
                    <!-- Línea de progreso -->
                    <div class="progress-bar"></div>
                
                    <div class="advantage start">
                        <div class="check-container start">
                            <div class="check-circle">✔</div>
                        </div>
                        <h6 class="title">Diseño Incluido</h6>
                        <p class="description">Tu idea hecha realidad, con diseño listo en tu presupuesto.</p>
                    </div>
                
                    <div class="advantage middle">
                        <div class="check-container middle">
                            <div class="check-circle">✔</div>
                        </div>
                        <h6 class="title">Precios Competitivos</h6>
                        <p class="description">Mejor relación calidad-precio.</p>
                    </div>
                
                    <div class="advantage end">
                        <div class="check-container end">
                            <div class="check-circle">✔</div>
                        </div>
                        <h6 class="title">Entregas Puntuales</h6>
                        <p class="description">Cumplimos los plazos garantizados.</p>
                    </div>
                </div>                                          
            </div>
        </section>

        <section class="container bg-gray" id="benefits">
            <div class="container-benefits">
                <div class="col-left scroll-section">
                    <h3 class="benefits-title scroll-animate">¿Por qué imprimir con nosotros?</h3>

                    <ul class="benefits-list" role="tablist" aria-label="Beneficios de la imprenta">
                        <li class="benefit-item" role="presentation">
                            <button
                                class="benefit-tab is-active"
                                id="benefit-tab-precision"
                                role="tab"
                                aria-selected="true"
                                aria-controls="benefit-panel-precision"
                                data-benefit-id="benefit-panel-precision"
                                type="button"
                            >
                                Color de alta fidelidad y control de calidad
                            </button>
                            <div
                                class="benefit-panel"
                                id="benefit-panel-precision"
                                role="tabpanel"
                                aria-labelledby="benefit-panel-precision"
                                data-benefit-id="precision"
                            >
                                <p>
                                    Gestión de color calibrada (ISO/FOGRA), pruebas de contrato y verificación en línea para que tus artes salgan tal cual los aprobaste, sin sorpresas.
                                </p>
                            </div>
                        </li>

                        <li class="benefit-item" role="presentation">
                            <button
                                class="benefit-tab"
                                id="benefit-tab-acabados"
                                role="tab"
                                aria-selected="false"
                                aria-controls="benefit-panel-acabados"
                                data-benefit-id="benefit-panel-acabados"
                                type="button">
                                Amplia variedad de sustratos y acabados premium
                            </button>
                            <div
                                class="benefit-panel"
                                id="benefit-panel-acabados"
                                role="tabpanel"
                                aria-labelledby="benefit-tab-acabados"
                                data-benefit-id="acabados"
                                hidden
                            >
                                <p> 
                                    Papeles especiales, laminados soft-touch, barniz UV sectorizado, troquel láser y hot-stamping para piezas que destacan y venden.
                                </p>
                            </div>
                        </li>

                        <li class="benefit-item" role="presentation">
                            <button
                                class="benefit-tab"
                                id="benefit-tab-sustentable"
                                role="tab"
                                aria-selected="false"
                                aria-controls="benefit-panel-sustentable"
                                data-benefit-id="benefit-panel-sustentable"
                                type="button"
                            >
                                Producción responsable y asesoría técnica
                            </button>
                            <div
                                class="benefit-panel"
                                id="benefit-panel-sustentable"
                                role="tabpanel"
                                aria-labelledby="benefit-tab-sustentable"
                                data-benefit-id="sustentable"
                                hidden
                            >
                                <p>
                                    Opciones eco (tintas base vegetal, papeles certificados, tirajes
                                    optimizados) y acompañamiento de preprensa para ahorrar costos sin
                                    sacrificar calidad.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-right">
                    <figure class="benefit-figure">
                        <img
                            class="benefit-image is-active"
                            src="{{ asset('images/tienda/impresion-a-full-color-de-calidad-imprenta-oceanprint-600.webp') }}"
                            width="600"
                            height="600"
                            alt="Impresiones a full color y de alta calidad en Oceanprint"
                            loading="lazy"
                            data-benefit-id="benefit-panel-precision" />

                        <img
                            class="benefit-image"
                            src="{{ asset('images/tienda/acabados-premium-con-piezas-que-destacan-oceanprint-600.webp') }}"
                            alt="Acabados premium como barniz UV y hot-stamping"
                            width="600"
                            height="600"
                            data-benefit-id="benefit-panel-acabados"
                            loading="lazy"
                            hidden />

                        <img
                            class="benefit-image"
                            src="{{ asset('images/tienda/asesoria-personaliazada.webp') }}"
                            width="600"
                            height="600"
                            alt="Asesoría personalizada desde el inicio"
                            data-benefit-id="benefit-panel-sustentable"
                            loading="lazy"
                            hidden />
                    </figure>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @include('shop.product.scripts.index')
@endpush