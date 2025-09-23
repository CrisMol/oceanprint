<style>
    header {
        background: #fff;
    }

    header li a {
        color: var(--neutral-gray);
    }

    .container-shop {
        margin-top: calc(130px - 5rem);
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

    .container-shop .columnCategoriesShop .categories .subcategories {
        padding-top: 1rem;
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
    .container-shop .productsInfo {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        background: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    .container-shop .productsInfo .contentDescription {
        flex: 1;
        background-color: var(--deep-ocean-blue);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
        color: #fff;
    }

    .container-shop .productsInfo .contentDescription p {
        margin: 1rem 0;
        font-size: 0.98rem;
    }

    .container-shop .productsInfo .contentImage {
        flex: 2;
        height: 300px;
    }

    .container-shop .productsInfo .contentImage img {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
        background-color: #D8D8D8;
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
        background-color: var(--vibrant-yellow);
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

    .buttonFilterMobile {
        display: none;
    }

    /* Responsivo */
    @media (max-width: 1024px) { /* Tablets */
        .container-shop .containerColumns {
            margin-top: 80px;
        }

        .container-shop .productsGrid {
            grid-template-columns: repeat(2, 1fr); /* 2 columnas */
        }
    }

    @media (max-width: 768px) { /* Móviles */
        .container-shop .productsGrid {
            grid-template-columns: repeat(1, 1fr); /* 1 columna */
        }

        .container-shop .columnCategoriesShop {
            position: absolute;
            padding-left: 20px;
            left: -300px;
            transition: 0.3s all;
        }

        .container-shop .columnCategoriesShop.active {
            padding-top: 80px;
            left: 0;
            height: 100%;
            overflow-y: scroll;
            z-index: 5;
        } 

        .containerFiltersCount {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .filterMobile {
            position: relative;
            margin: 10px 0;
            text-align: center;
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