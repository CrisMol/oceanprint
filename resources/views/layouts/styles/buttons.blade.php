<style>
    .button-circle-arrow-right {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.35rem;
        padding: 0.55rem;
        font-size: 16px;
        font-family: Arial, sans-serif;
        color: var(--bright-blue);
        background-color: var(--bright-pastel-blue);
        border: none;
        border-radius: 15px;
        cursor: pointer;
        overflow: hidden;
        z-index: 1;
    }

    .button-circle-arrow-right .button-text {
        position: relative;
        z-index: 2;
    }

    .button-circle-arrow-right .button-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        background-color: var(--bright-blue);
        border-radius: 50%;
        position: relative;
        z-index: 2;
        transition: background-color 0.3s ease;
    }

    .button-circle-arrow-right .button-icon::after {
        content: '';
        margin-left: -3px;
        width: 8px;
        height: 8px;
        border-right: 2px solid var(--neutral-gray);
        border-top: 2px solid var(--neutral-gray);
        transform: rotate(45deg);
        transition: border-color 0.3s ease;
    }

    /* El cuadrado inicial */
    .button-circle-arrow-right::before {
        content: '';
        position: absolute;
        right: 23px;
        bottom: 12px;
        width: 15px;
        height: 15px;
        background-color: var(--bright-blue);
        border-radius: 15%;
        z-index: 1;
        transition: all 0.5s ease;
        transform: scale(0);
    }

    .button-circle-arrow-right:hover::before {
        transform: scale(20);
        border-radius: 25px;
    }

    .button-circle-arrow-right:hover {
        color: #fff;
    }

    .button-circle-arrow-right:hover .button-icon {
        background-color: var(--black-blue);
    }

    .button-circle-arrow-right:hover .button-icon::after {
        border-color: #fff;
    }
</style>
