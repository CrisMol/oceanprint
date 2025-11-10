<style>
    .shop-checkout {
        max-width: 900px;
        text-align: center;
        color: #333;
        margin: 100px auto 0 auto;
        padding-top: 0;
    }

    .page-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
        color: #222;
    }

    .checkout-steps {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .checkout-steps__item {
        background: #f5f5f5;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        color: #333;
        transition: all 0.3s ease;
    }

    .checkout-steps__item.active {
        background: #b9a16b;
        color: #fff;
    }

    .checkout-steps__item:hover {
        background: #a38f5e;
        color: #fff;
    }

    .checkout-steps__item-number {
        display: block;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .order-complete__message {
        margin: 2rem auto;
    }

    .order-complete__message h3 {
        color: var(--bright-blue);
        font-size: 1.6rem;
        margin-top: 1rem;
    }

    .order-complete__message p {
        color: #555;
        margin-top: 0.5rem;
    }

    .order-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
        margin: 2rem 0;
    }

    .order-info__item {
        background: #f9f9f9;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        min-width: 160px;
        text-align: center;
    }

    .order-info__item label {
        display: block;
        font-weight: bold;
        color: #777;
    }

    .checkout__totals-wrapper {
        background: #fafafa;
        border-radius: 10px;
        padding: 2rem;
        margin-top: 2rem;
    }

    .checkout__totals h3 {
        text-align: left;
        margin-bottom: 1rem;
        font-weight: 600;
        color: #222;
    }

    .checkout-cart-items,
    .checkout-totals {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1rem;
    }

    .checkout-cart-items th,
    .checkout-totals th {
        text-align: left;
        color: #666;
        padding: 0.75rem;
    }

    .checkout-cart-items td,
    .checkout-totals td {
        text-align: right;
        padding: 0.75rem;
        border-top: 1px solid #e5e5e5;
    }

    .checkout-totals tr:last-child th,
    .checkout-totals tr:last-child td {
        font-weight: 700;
        color: #222;
        border-top: 2px solid #ccc;
    }

    .checkout__totals h3 {
        text-align: center;
    }

    .checkout__totals-wrapper {
        margin: 1rem;
        padding: 1rem;
        border: 1px solid var(--neutral-gray);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .checkout-steps {
            flex-direction: column;
        }

        .order-info {
            flex-direction: column;
            gap: 1rem;
        }

        .checkout__totals-wrapper {
            padding: 1rem;
        }
    }
</style>