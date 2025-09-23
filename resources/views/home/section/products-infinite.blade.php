@php
$products = [
    [
        'title' => 'Carnet veterinario A4',
        'image' => 'images/products/fundas-plasticas.png',
        'features' => [
            'Diseño de acuerdo a tu necesidad',
            'Impresión en couche 200gr',
            'Grafado y doblado',
        ]
    ],
];
@endphp

<div class="swiper swiper-products">
    <div class="swiper-wrapper">
        @foreach(range(1, 10) as $i)
            @foreach($products as $product)
                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__image-container">
                            <img
                                src="{{ asset($product['image']) }}"
                                alt="{{ $product['title'] }}"
                                class="products__image"
                            />
                        </div>
                        <div class="products__content">
                            <div class="products__title">
                                <h4 class="title">{{ $product['title'] }}</h4>
                            </div>
                            <div class="products__description">
                                @foreach($product['features'] as $feature)
                                    <p class="description__item">{{ $feature }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
