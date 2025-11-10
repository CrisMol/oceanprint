<style>
    header {
        background: #fff;
    }

    .search-form input,
    .search-form input::placeholder {
        color: var(--neutral-gray);
    }

    header li a {
        color: var(--neutral-gray);
    }

    main {
        margin-top: calc(130px - 5rem);
    }

    .shopping-cart {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 0.85rem;
    }

    .checkout-steps {
        display: none;
    }

    .cart-table__wrapper {
        width: 100%;
    }

    .cart-table__wrapper table {
        width: 100%;
        padding: 2rem 1rem;
    }

    .cart-table__wrapper table td {
        text-align: center;
        padding: 0.85em;
    }

    .cart-table__wrapper table td.column_item_name {
        text-align: left;
    }

    .cart-table-footer {
        display: flex;
        justify-content: space-between;
    }

    .shopping-cart .shopping-cart__totals-wrapper,
    .btn-empty-cart {
        margin: 1rem;
        padding: 1rem;
        border: 1px solid var(--neutral-gray);
        cursor: pointer;
    }

    .shopping-cart .shopping-cart__totals-wrapper .shopping-cart__totals table {
        width: 100%;
    }

    .shopping-cart .shopping-cart__totals-wrapper .shopping-cart__totals table th,
    .shopping-cart .shopping-cart__totals-wrapper .shopping-cart__totals table td {
        text-align: start;
        padding: 1rem 0;
    }

    .shopping-cart .shopping-cart__totals-wrapper .mobile_fixed-btn_wrapper .button-wrapper {
        padding: 1rem 0;
        text-align: center;
        margin: auto;
    }

    @media (max-width: 768px) {
        .shopping-cart {
            grid-template-columns: 1fr;
        }

        .menu-toggle span { 
            background: #000;
        }

        .menu-toggle.active span {
            background: white;
        }
    }
</style>