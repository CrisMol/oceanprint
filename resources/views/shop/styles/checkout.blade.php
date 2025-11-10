<style>
    .shop-checkout {
        margin-top: 100px;
        padding-top: 0;
    }

    .checkout__totals {
        margin: 1rem;
        padding: 1rem;
        border: 1px solid var(--neutral-gray);
        cursor: pointer;
    }

    .policy-text {
        font-size: 0.98em;
        color: var(--neutral-gray);
        margin-bottom: 15px;
    }

    .form-checkout {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        margin-top: 2rem;
    }

        /* Columnas principales */
    .checkout-form {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2em;
    }

    .checkout__totals-wrapper {
        flex: 1 1 35%;
        min-width: 280px;
    }

        /* Sistema de filas y columnas */
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -0.5rem;
        margin-right: -0.5rem;
    }

    [class^="col-"], [class*=" col-"] {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        box-sizing: border-box;
    }

        /* Columnas (sistema de 12 columnas) */
    .col-md-12 { flex: 0 0 100%; max-width: 100%; }
    .col-md-6  { flex: 0 0 50%;  max-width: 50%; }
    .col-md-4  { flex: 0 0 33.333%; max-width: 33.333%; }

        /* Espaciados */
    .mt-3 { margin-top: 1rem; }
    .mt-5 { margin-top: 2rem; }
    .my-3 { margin: 1rem 0; }
    .mb-3 { margin-bottom: 1rem; }

        /* Títulos */
    h4, h3 {
        font-weight: 600;
        color: #222;
        margin-bottom: 1rem;
    }

        /* Campos flotantes estilo moderno */
    .form-floating {
        position: relative;
    }

    .form-floating input {
        width: 100%;
        padding: 1rem 0.75rem;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #fff;
        transition: border-color 0.2s;
    }

    .form-floating input:focus {
        border-color: var(--bright-blue);
        outline: none;
    }

    .form-floating label {
        position: absolute;
        top: 50%;
        left: 0.75rem;
        transform: translateY(-50%);
        color: #777;
        font-size: 0.95rem;
        background: #fff;
        padding: 0 0.25rem;
        transition: all 0.2s ease;
        pointer-events: none;
    }

        /* Efecto flotante al escribir o enfocar */
    .form-floating input:focus + label,
    .form-floating input:not(:placeholder-shown) + label {
        top: 0;
        left: 0.6rem;
        font-size: 0.98rem;
        color: var(--neutral-gray);
    }

        /* Tablas de totales */
    .checkout__totals table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.5rem;
    }

    .checkout__totals th, 
    .checkout__totals td {
        padding: 0.75rem;
        border-bottom: 1px solid #eee;
        text-align: left;
    }

    /* Métodos de pago */
    .checkout__payment-methods .form-check {
        margin-bottom: 1rem;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 1rem;
        transition: border-color 0.3s;
    }

    .checkout__payment-methods .form-check:hover {
        border-color: #0077ff;
    }

    .form-check-input {
        margin-right: 0.5rem;
        accent-color: #0077ff;
    }

    .option-detail {
        font-size: 0.9rem;
        color: #555;
        margin-top: 0.5rem;
    }

        /* Botón principal */
    .btn-checkout {
        background: #0077ff;
        color: #fff;
        font-weight: 600;
        padding: 1rem 1.5rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
        width: 100%;
    }

    .btn-checkout:hover {
        background: #005dc5;
    }

        /* Responsive */
    @media (max-width: 900px) {
        .page-title {
            text-align: center;
        }

        .form-checkout {
            flex-direction: column;
        }

        .checkout-form {
            grid-template-columns: 1fr;
        }

        .checkout__totals-wrapper {
            flex: 1 1 100%;
        }

        .col-md-6, .col-md-4 {
            flex: 1 1 100%;
            max-width: 100%;
            text-align: center;
        }
    }
</style>