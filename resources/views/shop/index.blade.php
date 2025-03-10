@extends('layouts.app')

@push('styles')
    @include('shop.styles.index')
@endpush

@section('content')
    <main class="">
        <section class="container container-shop" id="shop">
            <div class="containerColumns">
                <div class="columnCategoriesShop">
                    <div class="contentTitleCategories">
                        <h6>
                            Categorías
                        </h6>
                    </div>
                    <ul class="categories">
                        @foreach($categories as $category)
                            <li class="link-category">{{ $category->name }}
                                @if($category->subcategories->count() > 0)
                                    <ul class="subcategories">
                                        @foreach($category->subcategories as $subcategory)
                                            <li class="link-subcategory">{{ $subcategory->name }}</li>
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
                    <div class="productsGrid" id="products-grid">
                        @foreach ($products as $product)
                            <div class="productCard">
                                <div class="productInfo">
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
                                        <a href="#">
                                            Ver detalles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    @include('shop.scripts.index')
@endpush