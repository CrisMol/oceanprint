<style>
    .container-steps {
        padding-bottom: 0;
    }

    .container-steps .row-subheading-center h2 {
        color: #fff;
    }

    .container-steps .stack-area {
        width: 100%;
        height: 300vh;
        position: relative;
        display: flex;
    }

    .container-steps .left {
        height: 100vh;
        flex-basis: 50%;
        position: sticky;
        top: 0;
        left: 0;
    }

    .container-steps .center {
        height: 100vh;
        flex-basis: 100%;
        position: sticky;
        top: 0;
    }
    .container-steps .card-process {
        width: 600px;
        height: 350px;
        border-radius: var(--border-radius);
        margin-bottom: 10px;
        position: absolute;
        top: calc(50% - 175px);
        left: calc(50% - 300px);
        transition: 0.5s ease-in-out;
    }

    .container-steps .card-process:nth-child(1) {
        background: linear-gradient(135deg,
                var(--bright-pastel-blue) 0%,
                var(--soft-pink) 100%);
    }

    .container-steps .card-process:nth-child(2) {
        background: linear-gradient(135deg,
                var(--bright-pastel-blue) 0%,
                var(--calm-turquoise) 100%);
    }

    .container-steps .card-process:nth-child(3) {
        background: linear-gradient(135deg,
                var(--soft-pink) 0%,
                var(--vibrant-yellow) 100%);
    }

    .container-steps .card-process:nth-child(4) {
        background: linear-gradient(135deg,
                var(--calm-turquoise) 0%,
                var(--fresh-lime-green) 100%);
    }

    /*Styling for the card-process content starts here...*/
    .container-steps .card-process {
        box-sizing: border-box;
        padding: 35px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    .container-steps button {
        margin-top: 20px;
    }

    .container-steps .away {
        transform-origin: bottom left;
    }

    .container-steps .card-process .content {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .container-steps .card-process .content p {
        position: absolute;
        text-align: center;
        bottom: -20px;
        width: 100%;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
        font-size: 1.55rem;
    }

    .container-steps .card-process .content img {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 350px;
        height: 350px;
        object-fit: cover;
        mask-image: linear-gradient(black 70%, transparent);
    }

    @media screen and (max-width: 768px) {
        .container-steps .card-process {
            width: 300px;
            height: 350px;
            border-radius: var(--border-radius);
            margin-bottom: 10px;
            position: absolute;
            top: calc(50% - 175px);
            left: calc(50% - 150px);
            transition: 0.5s ease-in-out;
        }

        .container-steps .card-process .content img {
            width: 230px;
            height: 230px;
            bottom: 75px;
        }
    }
</style>
