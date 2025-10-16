@php
$products = [
    [
        'title' => 'Tomatodos personalizados',
        'image' => 'images/products/tomatodos-personalizados-con-marca.webp',
        'features' => [
            'Personalización con logotipo, nombre o diseño exclusivo',
            'Disponibles en diferentes materiales y colores',
            'Ideales para promociones, eventos o regalos corporativos',
        ],
    ],
    [
        'title' => 'Esferos Personalizados',
        'image' => 'images/products/esferos-personalizados-con-marca.webp',
        'features' => [
            'Impresión de tu logo o mensaje promocional',
            'Variedad de modelos, colores y estilos',
            'Perfectos para campañas publicitarias o regalos empresariales',
        ],
    ],
    [
        'title' => 'Fundas Personalizadas',
        'image' => 'images/products/fundas-personalizadas-con-tu-marca.webp',
        'features' => [
            'Diseñadas a medida con tu logo o diseño corporativo',
            'Disponibles en papel, tela ecológica o plástico reutilizable',
            'Ideales para reforzar la identidad de tu marca en cada entrega',
        ],
    ],
    [
        'title' => 'Carpetas cuerina con grabado en pan de oro',
        'image' => 'images/products/carpetas-cuerina-en-pan-de-oro.webp',
        'features' => [
            'Acabado elegante con impresión o grabado en pan de oro',
            'Fabricadas en cuerina de alta calidad y excelente durabilidad',
            'Perfectas para presentaciones corporativas, diplomas o eventos ejecutivos',
        ],
    ],
    [
        'title' => 'Carnets Veterinarios',
        'image' => 'images/products/carnets-veterinarios.webp',
        'features' => [
            'Diseño personalizado con logotipo y datos de tu clínica',
            'Impresión en materiales resistentes y de alta calidad',
            'Ideales para el control de vacunas, fichas médicas y registro de mascotas',
        ],
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
                                width="300"
                                height="300"
                                loading="lazy"
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

    <div class="swiper-button-prev swiper-button-prev-products"></div>
    <div class="swiper-button-next swiper-button-next-products"></div>
</div>
