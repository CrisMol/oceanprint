@extends('layouts.app')

@push('styles')
    @include('shop.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-shop" id="shop">
            <div class="containerColumns">
                <div class="columnCategoriesShop">
                    <div class="columnBrandsShop">
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
                    <div class="contentTitleCategories">
                        <h6>
                            Categorías
                        </h6>
                    </div>
                    <ul class="categories">
                        @foreach($categories as $category)
                            <li class="link-category" data-id-category="{{ $category->id }}">{{ $category->name }}
                                @if($category->subcategories->count() > 0)
                                    <ul class="subcategories">
                                        @foreach($category->subcategories as $subcategory)
                                            <li 
                                                class="link-subcategory {{ $f_subcategory == $subcategory->id ? 'selected' : '' }}" 
                                                data-id-subcategory="{{ $subcategory->id }}"
                                            >
                                                {{ $subcategory->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="columnContent">
                    <div class="productsInfo">
                        <div class="contentDescription">
                            <h6>
                                Impresión de alta calidad
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus praesentium corporis modi voluptas?
                            </p>
                        </div>
                        <div class="contentImage">
                            <img
                                class="image-banner-shop" 
                                src="{{ asset('images/tienda/banner.jpg') }}" 
                                alt="Destacado"
                                width="1000"
                                height="550"
                            />
                        </div>
                    </div>

                    <div class="productFiltersCount" id="products-filter-count">
                        <div class="containerFiltersCount">
                            <div class="textCount">
                                Mostrando {{ isset($size) ? $size : 12 }} productos
                            </div>
                            <div class="filtersCount">
                                <select
                                    class="shop-acs_select"
                                    name="pagesize" 
                                    id="pagesize"
                                    aria-label="Page size"
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
                                >
                                    <option value="-1" {{ $order == -1 ? 'selected' : '' }}>Orden predeterminado</option>
                                    <option value="1" {{ $order == 1 ? 'selected' : '' }}>Destacados</option>
                                    <option value="2" {{ $order == 2 ? 'selected' : '' }}>Más vendidos</option>
                                    <option value="3" {{ $order == 3 ? 'selected' : '' }}>Por precio: bajo a alto</option>
                                    <option value="4" {{ $order == 4 ? 'selected' : '' }}>Por precio: alto a bajo</option>
                                </select>
                            </div>
                        </div>
                        <div class="filterMobile">
                            <button
                                type="button"
                                class="buttonFilterMobile"
                                onclick="mostrarCategoriasTienda();"
                            >
                                Categorías
                            </button>
                        </div>
                    </div>

                    <div class="productsGrid" id="products-grid">
                        @foreach ($products as $product)
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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