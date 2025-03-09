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

    .container-shop .contentTitleCategories {
        text-transform: uppercase;
        padding-bottom: 1rem;
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

    .container-shop .containerColumns {
        display: flex;
        gap: 20px;
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
        border-radius: 10px;
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
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 columnas en escritorio */
        gap: 20px;
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