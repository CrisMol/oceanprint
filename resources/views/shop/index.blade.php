@extends('layouts.app')

@if (isset($category))
    @section('title', $category->meta_title ?? $category->name)
    @section('meta_description', $category->meta_description ?? 'Explora productos de impresión digital y artículos personalizados con Oceanprint.')
    @section('meta_keywords', $category->meta_keywords ?? 'impresión digital, papelería, Oceanprint, Quito, Ecuador')
@else
    @section('title', 'Tienda Oceanprint | Impresión Digital y Soluciones Personalizadas')
    @section('meta_description', 'Oceanprint ofrece impresión digital de alta calidad, soluciones personalizadas y servicio profesional en Ecuador.')
    @section('meta_keywords', 'impresión digital, artículos corporativos, diseño, Oceanprint, Ecuador')
@endif

@push('styles')
    @include('shop.styles.index')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <main class="">
        <section class="container-presentation">
            <div class="presentation">
                <div class="content-resource">
                    @if(isset($category) && !empty($category->image))
                        <img
                            class="image-banner-shop"
                            src="{{ asset('images/categories/' . $category->image) }}"
                            alt="{{ $category->seo_title ?? $category->name ?? 'Banner de la tienda Ocean Print' }}"
                            title="{{ $category->seo_title ?? $category->name ?? 'Banner de la tienda Ocean Print' }}"
                            width="1000"
                            height="550"
                            loading="lazy"
                            decoding="async"
                        >
                    @else
                        <video
                            class="video-banner-shop"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="auto"
                            width="1000"
                            height="550"
                            poster="{{ asset('images/tienda/banner.jpg') }}"
                            title="Video tienda Ocean Print - Impresiones profesionales"
                        >
                            <source src="{{ asset('videos/tienda-ocean-print.mp4') }}" type="video/mp4">
                            Tu navegador no soporta la reproducción de video.
                        </video>
                    @endif
                </div>
                <div class="content-description">
                    <h1>
                        @if(isset($category) && !empty($category->title))
                            {{ $category->title }}
                        @else
                            Impresión de alta calidad
                        @endif
                    </h1>

                    <p>
                        @if(isset($category) && !empty($category->description))
                            {{ $category->description }}
                        @else
                            Ofrecemos soluciones de impresión digital y papelería personalizada para tu empresa o negocio en Ecuador.
                        @endif
                    </p>
                </div>
            </div>
            <div class="tags-marquee">
                <div class="tags-track">
                    @foreach($tags as $tag)
                        <p class="tag-item">{{ $tag->name }}</p>
                    @endforeach
                    @foreach($tags as $tag)
                        <p class="tag-item">{{ $tag->name }}</p>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="container container-shop" id="shop">
            <div class="containerColumns">
                <div class="columnCategoriesShop">
                    <div class="columnBrandsShop" style="display: none;">
                        <div class="contentTitleBrands">
                            <h6>
                                Marcas
                            </h6>
                        </div>
                        <ul class ="list list-inline brands">
                            @foreach ($brands as $brand)
                                <li class="link-brand list-item">
                                    <span class="menu-link">
                                        <input 
                                            type="checkbox"
                                            name="brands"
                                            value="{{ $brand->id }}"
                                            class="chk-brand"
                                            @if (in_array($brand->id, explode(',', $f_brands)))
                                               checked = "checked" 
                                            @endif
                                        >
                                        {{ $brand->name }}
                                    </span> 
                                    <span class="text right">
                                        {{ $brand->products->count() }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="searchContainer">
                        <form action="{{ route('shop.search') }}" method="GET" class="search-form-shop">
                            <input 
                                type="text" 
                                name="q" 
                                class="search-input" 
                                placeholder="Buscar productos..." 
                                aria-label="Buscar productos"
                                value="{{ request('q') }}"
                            >
                            <button type="submit" class="search-button" aria-label="Buscar">
                                <svg class="icon-svg icon-search" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 17 17">
                                    <path d="M16.604 15.868l-5.173-5.173c0.975-1.137 1.569-2.611 1.569-4.223 0-3.584-2.916-6.5-6.5-6.5-1.736 0-3.369 0.676-4.598 1.903-1.227 1.228-1.903 2.861-1.902 4.597 0 3.584 2.916 6.5 6.5 6.5 1.612 0 3.087-0.594 4.224-1.569l5.173 5.173 0.707-0.708zM6.5 11.972c-3.032 0-5.5-2.467-5.5-5.5-0.001-1.47 0.571-2.851 1.61-3.889 1.038-1.039 2.42-1.611 3.89-1.611 3.032 0 5.5 2.467 5.5 5.5 0 3.032-2.468 5.5-5.5 5.5z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="contentTitleCategories">
                        <h6>
                            Categorías
                        </h6>
                    </div>
                    <ul class="categories">
                        @foreach($categories as $b_category)
                            <li 
                                class="link-category {{ isset($f_category) && $f_category == $b_category->id ? 'selected' : '' }}" 
                                data-id-category="{{ $b_category->id }}"
                            >
                                <a href="{{ route('shop.category.show', ['slug' => $b_category->slug]) }}">
                                    {{ $b_category->name }}
                                </a>

                                @if($b_category->subcategories->count() > 0)
                                    <ul class="subcategories">
                                        @foreach($b_category->subcategories as $subcategory)
                                            <li 
                                                class="link-subcategory {{ $f_subcategory == $subcategory->id ? 'selected' : '' }}" 
                                                data-id-subcategory="{{ $subcategory->id }}"
                                            >
                                                <a href="{{ route('shop.category.show', ['slug' => $subcategory->slug]) }}">
                                                    {{ $subcategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="columnContent">
                    <div class="productFiltersCount" id="products-filter-count">
                        <div class="containerFiltersCount">
                            <div class="textCount" style="display: none;">
                                Mostrando {{ $products->count() }} de {{ $products->total() }} productos
                            </div>
                            <div class="filtersCount">
                                <select
                                    class="shop-acs_select"
                                    name="pagesize" 
                                    id="pagesize"
                                    aria-label="Page size"
                                    style="display: none;"
                                >
                                    <option value="12" {{ $size == 12 ? 'selected' : '' }}>Mostrar</option>
                                    <option value="24" {{ $size == 24 ? 'selected' : '' }}>24</option>
                                    <option value="48" {{ $size == 48 ? 'selected' : '' }}>48</option>
                                    <option value="102" {{ $size == 102 ? 'selected' : '' }}>102</option>
                                </select>

                                <select
                                    class="shop-acs_select"
                                    name="orderby" 
                                    id="orderby"
                                    aria-label="Sort items"
                                    style="display: none;"
                                >
                                    <option value="-1" {{ $order == -1 ? 'selected' : '' }}>Orden predeterminado</option>
                                    <option value="1" {{ $order == 1 ? 'selected' : '' }}>Destacados</option>
                                    <option value="2" {{ $order == 2 ? 'selected' : '' }}>Más vendidos</option>
                                    <!--<option value="3" {{ $order == 3 ? 'selected' : '' }}>Por precio: bajo a alto</option>
                                    <option value="4" {{ $order == 4 ? 'selected' : '' }}>Por precio: alto a bajo</option>-->
                                </select>
                            </div>
                        </div>
                        <div class="filterMobile">
                            <button
                                type="button"
                                class="buttonFilterMobile"
                                onclick="mostrarCategoriasTienda();"
                            >
                                Filtros
                            </button>
                            <div class="searchContainer">
                            <form action="{{ route('shop.search') }}" method="GET" class="search-form-shop">
                                    <input 
                                        type="text" 
                                        name="q" 
                                        class="search-input" 
                                        placeholder="Buscar productos..." 
                                        aria-label="Buscar productos"
                                        value="{{ request('q') }}"
                                    >
                                    <button type="submit" class="search-button" aria-label="Buscar">
                                        <svg class="icon-svg icon-search" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 17 17">
                                            <path d="M16.604 15.868l-5.173-5.173c0.975-1.137 1.569-2.611 1.569-4.223 0-3.584-2.916-6.5-6.5-6.5-1.736 0-3.369 0.676-4.598 1.903-1.227 1.228-1.903 2.861-1.902 4.597 0 3.584 2.916 6.5 6.5 6.5 1.612 0 3.087-0.594 4.224-1.569l5.173 5.173 0.707-0.708zM6.5 11.972c-3.032 0-5.5-2.467-5.5-5.5-0.001-1.47 0.571-2.851 1.61-3.889 1.038-1.039 2.42-1.611 3.89-1.611 3.032 0 5.5 2.467 5.5 5.5 0 3.032-2.468 5.5-5.5 5.5z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productsGrid scroll-section" id="products-grid">
                        @foreach ($products as $key => $product)
                            <div class="productCard">
                                <a 
                                    href="{{ route('shop.product.details', ['product_slug' => $product->slug]) }}"
                                    class="productInfo"
                                >
                                    <div class="image">
                                        <img 
                                            src="{{ asset('uploads/products') }}/{{ $product->image }}" 
                                            alt=""
                                            width="150"
                                            height="175"
                                        >
                                    </div>
                                    <div class="title">
                                        <span class="productName">
                                            {{ $product->name }}
                                        </span>
                                    </div>
                                    <div class="tags">
                                        @foreach ($product->tags as $tag)
                                            <span class="tag">{{ $tag->name }}</span>
                                        @endforeach
                                    </div>
                                    <div class="price">
                                        @if ($product->sale_price)
                                            <s>{{ $product->regular_price }}</s> ${{ $product->sale_price }}
                                        @else
                                            ${{ $product->regular_price }}
                                        @endif
                                    </div>
                                    <div class="link">
                                        <button href="{{ route('shop.product.details', ['product_slug' => $product->slug]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg> 
                                            Ver detalles
                                        </button>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                        {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </section>
    </main>

    <form 
        id="frmfilter"
        method="GET"
        action="{{ route('shop') }}"
    >
        <input 
            type="hidden"
            name="page"
            value="{{ $products->currentPage() }}"
        >
        <input 
            type="hidden"
            name="size"
            id="size"
            value="{{ $size }}"
        >
        <input 
            type="hidden"
            name="order"
            id="order"
            value="{{ $order }}"
        >
        <input 
            type="hidden"
            name="brands"
            id="hdnBrands"
            value=""
        >
        <input 
            type="hidden"
            name="subcategory"
            id="hdnSubcategory"
            value=""
        >
    </form>
@endsection

@push('scripts')
    @include('shop.scripts.index')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper(".swiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                effect: "slide",
                speed: 600,
            });

            const pageSizeSelect = document.getElementById('pagesize');
            const sizeInput = document.getElementById('size');
            const form = document.getElementById('frmfilter');

            if (pageSizeSelect && sizeInput && form) {
                pageSizeSelect.addEventListener('change', function () {
                    const selectedValue = pageSizeSelect.options[pageSizeSelect.selectedIndex].value;
                    sizeInput.value = selectedValue;
                    form.submit();
                });
            }

            const orderBySelect = document.getElementById('orderby');
            const orderInput = document.getElementById('order');

            if (orderBySelect && orderInput && form) {
                orderBySelect.addEventListener('change', function () {
                    const selectedValue = orderBySelect.options[orderBySelect.selectedIndex].value;
                    orderInput.value = selectedValue;
                    form.submit();
                });
            }

            const checkboxes = document.querySelectorAll('input[name="brands"]');
            const hdnBrands = document.getElementById('hdnBrands');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    let brands = '';
                    
                    checkboxes.forEach(cb => {
                        if (cb.checked) {
                            if (brands === '') {
                                brands += cb.value;
                            } else {
                                brands += ', ' + cb.value;
                            }
                        }
                    });

                    hdnBrands.value = brands;
                    form.submit();
                });
            });

            const subcategories = document.querySelectorAll('.link-subcategory');
            const categories = document.querySelectorAll('.link-category');
            const hdnSubcategory = document.getElementById('hdnSubcategory');

            subcategories.forEach(subcategory => {
                subcategory.addEventListener('click', function(e) {
                    e.stopPropagation();
                    hdnSubcategory.value = subcategory.getAttribute('data-id-subcategory');
                    form.submit();
                }); 
            });

            categories.forEach(category => {
                category.addEventListener('click', function(e) {
                    hdnSubcategory.value = category.getAttribute('data-id-category');
                    form.submit();
                }); 
            });
        });
    </script>
@endpush