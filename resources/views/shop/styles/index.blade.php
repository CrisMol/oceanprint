<style>
    h1 {
        font-size: clamp(1.5rem, 3.5vw, 2.5rem);
    }

    h2 {
        font-size: clamp(1.5rem, 3.5vw, 2.5rem);
        text-transform: none;
        margin: 15px 0;
    }

    header {
        background: #fff;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .search-form input,
    .search-form input::placeholder {
        color: var(--neutral-gray);
    }

    header li a {
        color: var(--neutral-gray);
    }

    .container-presentation {
        margin-top: 101px;
    }

    .container-shop {
        padding-top: 0;
    }

    .container-shop .containerColumns {
        display: flex;
        gap: 20px;
    }

    .container-shop .contentTitleCategories,
    .container-shop .contentTitleBrands {
        text-transform: uppercase;
        padding-bottom: 1rem;
    }

    .container-shop .columnCategoriesShop {
        position: sticky;
        top: 0;
        padding: 1rem 0;
        background: #fff;
        align-self: flex-start;
    }

    .container-shop .columnCategoriesShop .categories .link-category {
        padding-bottom: 1.10rem;
        cursor: pointer;
        transition: 0.3s;
    }

    .container-shop .columnCategoriesShop .link-brand {
        display: flex;
        justify-content: space-between;
        padding-bottom: 1.10rem;
    }

    .container-shop .columnCategoriesShop .categories .link-category:hover {
        color: var(--bright-blue);
    }

    .container-shop .columnCategoriesShop .categories .link-category a.selected {
        color: var(--energetic-pink);
    }

    .container-shop .columnCategoriesShop .categories .subcategories {
        margin-left: 20px;
    }

    .container-shop .columnCategoriesShop .categories .subcategories .link-subcategory {
        font-size: 0.85rem;
        opacity: 0.85;
        transition: 0.3s;
        padding: 0.35rem 0;
    }

    .container-shop .columnCategoriesShop .categories .subcategories .link-subcategory:hover,
    .container-shop .columnCategoriesShop .categories .subcategories .link-subcategory.selected {
        color: var(--soft-pink);
        opacity: 1;
    }

    /* Columna de categorías (más estrecha) */
    .container-shop .columnCategoriesShop {
        flex: 1; 
    }

    /* Columna de contenido (más ancha) */
    .container-shop .columnContent {
        flex: 3; 
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Sección de productos destacados (ancho completo) */
    .container-presentation .presentation {
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: linear-gradient(135deg, rgba(5, 175, 242, 0.3), rgba(241, 119, 186, 0.1));
    }

    .container-presentation .presentation .content-resource img {
        max-width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .container-presentation .presentation .content-resource video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container-presentation .presentation .content-description {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 2em;
    }

    .tags-marquee {
        position: relative;
        overflow: hidden;
        width: 100%;
        background: #fff;
        white-space: nowrap;
    }

    .tags-track {
        display: inline-block;
        white-space: nowrap;
        animation: scroll-tags 75s linear infinite;
    }

    .tag-item {
        display: inline-block;
        margin: 2em;
        color: var(--neutral-gray);
        font-weight: 500;
        text-transform: uppercase;
    }

    /* Animación infinita */
    @keyframes scroll-tags {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }

    /* Grid de productos */
    .container-shop .productsGrid {
        grid-column-gap: 1.8vw;
        grid-row-gap: 50px;
        grid-template-rows: auto;
        grid-template-columns: 1fr 1fr 1fr;
        grid-auto-columns: 1fr;
        display: grid;
    }

    .container-shop .productsGrid .productCard .productInfo {
        height: 100%;
        background: linear-gradient(135deg, rgba(5, 175, 242, 0.3), rgba(241, 119, 186, 0.1));
        border-radius: var(--border-radius);
        flex-direction: column;
        display: flex;
        justify-content: space-between;
        transition: 0.5s;
    }

    .container-shop .productsGrid .productCard .productInfo .image {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-shop .productsGrid .productCard .productInfo .image img {
        position: relative;
        max-height: 250px;
        max-width: 70%;
        min-height: 180px;
        transition: 0.3s;
    }

    .container-shop .productsGrid .productCard:hover .productInfo .image img {
        transform: rotate(-8deg);
    }

    .container-shop .productsGrid .productCard .productInfo .title {
        text-align: center;
        font-size: clamp(12px, 3vw, 24px);
        padding: 0 10px;
    }

    .container-shop .productsGrid .productCard .productInfo .tags {
        margin: 30px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.56rem;
    }

    .container-shop .productsGrid .productCard .productInfo .tags .tag {
        cursor: pointer;
        padding: 0.10rem 0.85rem;
        transition: 0.5s;
        border-radius: var(--border-radius);
        background: rgba(255, 255, 255, 0.5);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.8);
        border-right: 1px solid rgba(255, 255, 255, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .container-shop .productsGrid .productCard .productInfo .link {
        text-align: center;
        margin: 1.35rem 0;
    }

    .container-shop .productsGrid .productCard .productInfo .link button {
        display: flex;
        align-items: center;
        gap: 2px;
        justify-content: center;
        transition: 0.5s;
        margin: auto;
        background: transparent;
        border: none;
    }

    .container-shop .productsGrid .productCard .productInfo .link:hover button {
        opacity: 0.55;
    }

    .container-shop .productsGrid .productCard .productInfo .price {
        display: none;
    }

    .container-shop .productFiltersCount .containerFiltersCount {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .container-shop .productFiltersCount .containerFiltersCount .filtersCount .shop-acs_select {
        position: relative;
        padding: 0.48rem;
        border: none;
        background-color: rgba(0, 0, 0, 0.04);
        cursor: pointer;
    }

    .filterMobile {
        display: none;
    }

    .searchContainer .search-form-shop {
        position: relative;
        width: 100%;
        margin: 0 0 15px 0;
    }

    .searchContainer .search-form-shop input {
        position: relative;
        width: 100%;
        appearance: none;
        padding: 10px 12px;
        border: 1px solid var(--neutral-gray);
        border-radius: var(--border-radius);
        color: var(--neutral-gray);
    }

    .searchContainer .search-form-shop button {
        position: absolute;
        right: 15px;
        top: 8px;   
        background: transparent;
        border: none;
        cursor: pointer;
    }

    /* === Paginación base === */
    .pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        list-style: none;
        padding: 0;
        margin: 20px 0;
        flex-wrap: wrap;
    }

    /* === Enlaces individuales === */
    .pagination .page-item {
        display: inline-block;
    }

    .pagination .page-link {
        display: inline-block;
        padding: 8px 14px;
        border: 1px solid #ddd;
        border-radius: 6px;
        text-decoration: none;
        color: #444;
        font-size: 14px;
        background-color: #fff;
        transition: all 0.2s ease;
    }

    /* Hover */
    .pagination .page-link:hover {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    /* Página activa */
    .pagination .active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        cursor: default;
    }

    /* Deshabilitados (por ejemplo, flechas sin siguiente) */
    .pagination .disabled .page-link {
        color: #aaa;
        background-color: #f5f5f5;
        border-color: #eee;
        cursor: not-allowed;
    }

    /* Responsivo */
    @media (max-width: 1024px) { /* Tablets */
        .container-shop .productsGrid {
            grid-template-columns: repeat(2, 1fr); /* 2 columnas */
        }
    }

    @media (max-width: 768px) { /* Móviles */
        .container-shop .productsGrid {
            grid-template-columns: repeat(1, 1fr); /* 1 columna */
        }

        .container-presentation .presentation {
            grid-template-columns: 1fr;
        }

        .container-shop .columnCategoriesShop {
            position: absolute;
            padding-left: 20px;
            left: -300px;
            transition: 0.3s all;
        }

        .container-shop .columnCategoriesShop.active {
            position: fixed;
            padding: 20px;
            left: 0;
            height: 100%;
            overflow-y: scroll;
            z-index: 1002;
        } 

        .containerFiltersCount {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .filterMobile {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .filterMobile {
            position: relative;
            margin: 10px 0;
            text-align: center;
        }

        .searchContainer {
            display: none;
        }

        .filterMobile .searchContainer {
            display: inline;
        }

        .filterMobile .searchContainer .search-form-shop {
            margin: 0;
        }

        .buttonFilterMobile {
            display: inline;
            padding: 5px 10px;
            background: var(--bright-pastel-blue);
            border: 1px solid rgba(0, 0, 0, 0.15);
            cursor: pointer;
        }

        .menu-toggle span { 
            background: #000;
        }

        .menu-toggle.active span {
            background: white;
        }
    }
</style>