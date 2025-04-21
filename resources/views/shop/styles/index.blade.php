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

    .container-shop .contentTitleCategories {
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

    .container-shop .columnCategoriesShop .categories .subcategories .link-subcategory:hover {
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
        width: 100%;
        background: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .container-shop .productsInfo .contentDescription {
        flex: 1;
        background-color: var(--bright-pastel-blue);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
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
        background-color: var(--soft-crem-pink);
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
        height: 275px;
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
        font-size: clamp(16px, 5vw, 32px);
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

    .container-shop .productsGrid .productCard .productInfo .link a {
        display: flex;
        align-items: center;
        gap: 2px;
        justify-content: center;
        transition: 0.5s;
    }

    .container-shop .productsGrid .productCard .productInfo .link:hover a {
        opacity: 0.55;
    }

    .container-shop .productsGrid .productCard .productInfo .price {
        display: none;
    }

    /* Responsivo */
    @media (max-width: 1024px) { /* Tablets */
        .container-shop .containerColumns {
            flex-direction: column;
        }

        .container-shop .productsGrid {
            grid-template-columns: repeat(2, 1fr); /* 2 columnas */
        }
    }

    @media (max-width: 768px) { /* Móviles */
        .container-shop .productsGrid {
            grid-template-columns: repeat(1, 1fr); /* 1 columna */
        }
    }
</style>