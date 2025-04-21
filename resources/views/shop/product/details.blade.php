@extends('layouts.app')

@push('styles')
    @include('shop.product.styles.index')
@endpush

@section('content')
    <main class="product-detail">
        <section class="container" id="detail" data-menu-navigation="{{ $product->name }}">
            <article class="product">
                <div class="product-content">
                    <!-- Galería de imágenes en grid -->
                    <section class="product-images">
                        <div class="gallery">
                            <img class="image-featured" src="{{ asset('uploads/products') }}/{{ $product->image }}" alt="Nombre del producto - vista frontal" loading="lazy" width="300">
                            @foreach (explode(',', $product->images) as $img)
                                <img src="{{ asset('uploads/products') }}/{{ $img }}" alt="Nombre del producto - vista frontal" loading="lazy" width="300">
                            @endforeach
                        </div>
                    </section>

                    <!-- Información del producto -->
                    <section class="product-info">
                        <div class="information">
                            <h1 class="product-title">{{ $product->name }}</h1>
                            <div class="product-tags">
                                @foreach ($product->tags as $tag)
                                    <span class="product-tag">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zM227.3 387.3l184-184c6.2-6.2 6.2-16.4 0-22.6l-22.6-22.6c-6.2-6.2-16.4-6.2-22.6 0L216 308.1l-70.1-70.1c-6.2-6.2-16.4-6.2-22.6 0l-22.6 22.6c-6.2 6.2-6.2 16.4 0 22.6l104 104c6.2 6.2 16.4 6.2 22.6 0z"/></svg>
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                            <p class="product-description">
                                {{ $product->short_description }}
                            </p>
                        </div>
                        
                        <hr>

                        @if ($product->tieredPrices->isNotEmpty())
                            <div class="product-tiered-prices">
                                <span>
                                    <br>Combos disponibles: </br>
                                </span>
                                <div class="tiered-prices">
                                    @foreach ($product->tieredPrices as $tieredPrice)
                                        @php
                                            $variationName = $tieredPrice->variation->name ?? null;
                                            $quantityValue = $tieredPrice->quantity->quantity ?? null;
                                            $price = $tieredPrice->sale_price ?? $tieredPrice->regular_price;
                                            $priceCart = $price;
                                            $productName = "$product->name-$variationName";
                                        @endphp
                                
                                        <div class="tiered-price {{ $tieredPrice->is_popular == 1 ? 'active' : '' }}" 
                                            data-id-variation="{{ $tieredPrice->variation->id ?? '' }}"
                                            data-price="{{ $price }}" data-product-name="{{ $product->name }}" data-quantity="{{ $quantityValue }}" data-variation-name="{{ $variationName }}">

                                            @if($tieredPrice->is_popular == 1)
                                                @php
                                                    $priceCart = $price;
                                                @endphp
                                                <span class="tiered-popular-text">
                                                    Más popular
                                                </span>
                                            @endif
                                             
                                            @if ($variationName)
                                                <span class="variation-name">{{ $variationName }}</span>
                                            @endif
                                
                                            @if ($quantityValue)
                                                <span class="quantity-value">{{ $quantityValue }} unidades</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>                                                           
                            </div>
                        @else 
                            @php
                                $priceCart = $product->sale_price;
                                $quantityValue = $product->quantity;
                                $productName = $product->name;
                            @endphp
                        @endif

                        <div class="product-cart">
                            <div class="product-total">
                                <div class="total-text">
                                    <span>
                                        Total
                                    </span>
                                </div>
                                <div class="price-total">
                                    <span id="priceTotal">
                                        ${{ $priceCart }}
                                    </span>
                                </div>
                            </div>
                            <form method="post" action="{{ route('cart.add') }}">
                                @csrf
                                <input type="hidden" name="quantity" value="{{ $quantityValue }}">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $productName }}">
                                <input type="hidden" name="price" value="{{ $priceCart }}">
                                <button type="submit" class="product-button">
                                    <span class="button-animation"></span>
                                    <span class="button-text">Agregar al carrito</span>
                                </button>
                            </form>
                        </div>
                        <div class="product-benefits">
                            <div class="benefit">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="25"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M621.3 237.3l-58.5-58.5c-12-12-28.3-18.7-45.3-18.7H480V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v336c0 44.2 35.8 80 80 80 26.3 0 49.4-12.9 64-32.4 14.6 19.6 37.7 32.4 64 32.4 44.2 0 80-35.8 80-80 0-5.5-.6-10.8-1.6-16h163.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H624c8.8 0 16-7.2 16-16v-85.5c0-17-6.7-33.2-18.7-45.2zM80 432c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm128 0c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm272-224h37.5c4.3 0 8.3 1.7 11.3 4.7l43.3 43.3H480v-48zm48 224c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32z"/></svg>
                                </div>
                                <div class="benefit-text">
                                    <span>
                                        Envíos a todo el Ecuador
                                    </span>
                                </div>
                            </div>
                            <div class="benefit">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M434.7 167.7h0L344.5 77.4a31.8 31.8 0 0 0 -45-.1h0l-.1 .1L224 152.9V424L434.7 212.9A32 32 0 0 0 434.7 167.7zM480 320H373.1L186.7 506.5c-2.1 2.1-4.5 3.6-6.7 5.5H480a32 32 0 0 0 32-32V352A32 32 0 0 0 480 320zM192 32A32 32 0 0 0 160 0H32A32 32 0 0 0 0 32V416a96 96 0 0 0 192 0zM96 440a24 24 0 1 1 24-24A24 24 0 0 1 96 440zm32-184H64V192h64zm0-128H64V64h64z"/></svg>
                                </div>
                                <div class="benefit-text">
                                    <span>
                                        Diseño exclusivo
                                    </span>
                                </div>
                            </div>
                            <div class="benefit">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="25"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M512 320s-64 92.7-64 128c0 35.4 28.7 64 64 64s64-28.7 64-64-64-128-64-128zm-9.4-102.9L294.9 9.4C288.7 3.1 280.5 0 272.3 0s-16.4 3.1-22.6 9.4l-81.6 81.6L81.9 4.8c-6.3-6.3-16.4-6.3-22.6 0L36.7 27.4c-6.2 6.3-6.2 16.4 0 22.6l86.2 86.2-94.8 94.8c-37.5 37.5-37.5 98.3 0 135.8l117.2 117.2c18.7 18.7 43.3 28.1 67.9 28.1 24.6 0 49.1-9.4 67.9-28.1l221.6-221.6c12.5-12.5 12.5-32.8 0-45.3zm-116.2 71H65.9c1.4-3.8 3.6-8 7.4-11.8l13.2-13.2 81.6-81.6 58.6 58.6c12.5 12.5 32.8 12.5 45.2 0s12.5-32.8 0-45.2l-58.6-58.6 59-59 162.4 162.4-48.3 48.3z"/></svg>
                                </div>
                                <div class="benefit-text">
                                    <span>
                                        Impresión rápida y de alta calidad
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </article>
        </section>
        <section class="container interests-products" id="interests" data-menu-navigation="Intereses">
            <div class="interests-products-content">
                <div class="interests-title">
                    <h3>
                        También te puede interesar
                    </h3>
                    <p>
                        Otras ideas que nuestros clientes han usado para <strong>aumentar sus ventas, reconocimiento o para un recuerdo inolvidable.</strong>
                    </p>
                </div>
                <div class="interests-content">
                    <div class="interests-products-grid">
                        @foreach ($rproducts as $rproduct)
                            <a href="{{ route('shop.product.details', ['product_slug' => $rproduct->slug]) }}">
                                <div class="interest-product">
                                    <div class="interest-image">
                                        <img class="image-featured" src="{{ asset('uploads/products') }}/{{ $rproduct->image }}" alt="{{ $rproduct->name }}" loading="lazy" width="300">
                                    </div>
                                    <div class="interest-name">
                                        <h6>
                                            {{ $rproduct->name }}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="container-oval">
            <div class="container">
                <div class="icon-imprent-ecological">
                    <img class="image-ecological" src="{{ asset('images/logo/imprenta-ecologica.png') }}" alt="Imprenta ecológica" loading="lazy" width="175">
                </div>
                <div class="blob">
                    <svg viewBox="-100 -100 400 400" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#0688BB">
                            <animate attributeName="d"
                                dur="10000ms"
                                repeatCount="indefinite"

                                values="M34.9,-42.1C44.3,-33.7,50.3,-21.8,57.7,-6.3C65,9.2,73.6,28.3,67.9,40.2C62.2,52,42.2,56.6,23.9,61.4C5.5,66.3,-11.2,71.4,-28.7,69.2C-46.3,67,-64.8,57.5,-69.4,43.2C-74,28.8,-64.9,9.5,-58.2,-7.1C-51.5,-23.6,-47.2,-37.4,-37.9,-45.8C-28.7,-54.2,-14.3,-57.1,-0.8,-56.2C12.7,-55.2,25.5,-50.4,34.9,-42.1Z;
                                
                                M46.8,-50.1C61,-43.8,73.1,-29.4,77,-12.8C80.9,3.9,76.6,22.8,67.4,39.2C58.3,55.5,44.3,69.4,26.8,77.4C9.3,85.5,-11.8,87.8,-28,80.4C-44.3,73,-55.8,55.9,-61.4,39C-67,22,-66.7,5.1,-66.1,-13.9C-65.4,-33,-64.4,-54.2,-53.3,-61C-42.2,-67.8,-21.1,-60.2,-2.4,-57.3C16.3,-54.4,32.6,-56.3,46.8,-50.1Z;
                                
                                M55.4,-65.7C68.7,-54.9,74.2,-34.5,74.4,-15.8C74.5,2.9,69.2,20,61.4,37.3C53.6,54.7,43.2,72.4,29,76.1C14.7,79.7,-3.3,69.2,-17.3,59.1C-31.2,49,-41.1,39.2,-46.9,27.7C-52.7,16.3,-54.5,3.2,-52.6,-9.5C-50.6,-22.2,-44.8,-34.4,-35.4,-45.9C-26.1,-57.3,-13,-68.1,4,-72.9C21.1,-77.7,42.1,-76.5,55.4,-65.7Z;
                                
                                M46,-58.7C57,-45.6,61.5,-28.6,66.8,-10.1C72.1,8.4,78.2,28.5,70.8,40.6C63.5,52.7,42.8,56.7,23.2,64.1C3.5,71.5,-15.1,82.1,-30.7,78.9C-46.3,75.6,-58.9,58.4,-63.3,41.2C-67.8,23.9,-64.1,6.6,-58,-7.1C-51.8,-20.8,-43.2,-31,-33.1,-44.3C-23,-57.7,-11.5,-74.2,3,-77.8C17.5,-81.3,35,-71.9,46,-58.7Z;
                                
                                M34.9,-42.1C44.3,-33.7,50.3,-21.8,57.7,-6.3C65,9.2,73.6,28.3,67.9,40.2C62.2,52,42.2,56.6,23.9,61.4C5.5,66.3,-11.2,71.4,-28.7,69.2C-46.3,67,-64.8,57.5,-69.4,43.2C-74,28.8,-64.9,9.5,-58.2,-7.1C-51.5,-23.6,-47.2,-37.4,-37.9,-45.8C-28.7,-54.2,-14.3,-57.1,-0.8,-56.2C12.7,-55.2,25.5,-50.4,34.9,-42.1Z"
                            ></animate>
                        </path>
                    </svg>
                </div>
                <div class="content-title">
                    <h2 class="">
                        ¿Porqué Nosotros?
                    </h2>
                </div>
                <div class="product-differences">
                    <div class="product-difference-image">
                        <a href="{{ route('shop.product.details', ['product_slug' => $randomProduct->slug]) }}" class="container-image-difference">
                            <img class="image-difference" src="{{ asset('uploads/products') }}/{{ $randomProduct->image }}" alt="{{ $randomProduct->name }}" loading="lazy" width="600">
                        </a>
                    </div>
                    <div class="product-difference-grid">
                        <div class="benefit">
                            <div class="content-image-benefit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="100"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>
                            </div>
                            <div class="content-text-benefit">
                                <p>Usamos tecnología de impresión de alta precisión para acabados profesionales y colores duraderos.</p>
                            </div>
                        </div>
                        <div class="benefit">
                            <div class="content-image-benefit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512" height="100"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7 .5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"/></svg>
                            </div>
                            <div class="content-text-benefit">
                                <p>Brindamos precios justos con calidad superior, garantizando la mejor inversión.</p>
                            </div>
                        </div>
                        <div class="benefit">
                            <div class="content-image-benefit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144 144-64.4 144-144-64.4-144-144-144zm64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7v12.6zM320 368c0-27.8 6.7-54.1 18.2-77.5-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144zm-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128z"/></svg>
                            </div>
                            <div class="content-text-benefit">
                                <p>Nuestros clientes nos prefieren por nuestra calidad, atención personalizada y cumplimiento en tiempos de entrega.</p>
                            </div>
                        </div>
                        <div class="benefit">
                            <div class="content-image-benefit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M208 352c-2.4 0-4.8 .4-7.1 1.1C188 357.3 174.4 360 160 360c-14.4 0-28-2.7-41-6.9-2.3-.7-4.7-1.1-7.1-1.1C49.9 352-.3 402.5 0 464.6 .1 490.9 21.7 512 48 512h224c26.3 0 47.9-21.1 48-47.4 .3-62.1-49.9-112.6-112-112.6zm-48-32c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zM592 0H208c-26.5 0-48 22.3-48 49.6V96c23.4 0 45.1 6.8 64 17.8V64h352v288h-64v-64H384v64h-76.2c19.1 16.7 33.1 38.7 39.7 64H592c26.5 0 48-22.3 48-49.6V49.6C640 22.3 618.5 0 592 0z"/></svg>
                            </div>
                            <div class="content-text-benefit">
                                <p>Te guiamos en cada paso del proceso de impresión para garantizar que tu pedido se adapte a tus necesidades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content-title">
                    <h3>
                        Tú tienes la idea, nosotros la imprimimos
                    </h3>
                </div>
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
    </main>
@endsection

@push('scripts')
    @include('shop.product.scripts.index')
@endpush