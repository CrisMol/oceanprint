<style>
    footer {
        position: relative;
        width: 100%;
        text-align: center;
        background-color: var(--bright-crem-blue);
        padding: 2rem 0 0 0;
    }

    .circle-logo-footer-animate {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    .circle-logo-footer-animate .logo-footer {
        position: absolute;
        top: 0;
        left: 0;
        width: 220px;
        height: 220px;
        background: url(http://localhost/oceanprint.ec/wp-content/uploads/2024/07/logo-oceanprint-500-x-500.png);
        background-size: contain;
        background-repeat: no-repeat;
        border-radius: 50%;
        
    }

    .circle-logo-footer-animate .logo-footer .text {
        position: absolute;
        width: 100%;
        height: 100%;
        animation: rotateTextlogo-footer 10s linear infinite;
    }

    @keyframes rotateTextlogo-footer
    {
        0%
        {
            transform: rotate(0deg);
        }
        100%
        {
            transform: rotate(360deg);
        }
    }

    .circle-logo-footer-animate .logo-footer .text span {
        position: absolute;
        left: 50%;
        font-size: 1.2em;
        transform-origin: 0 110px;
    }

    .container-form-columns {
        display: grid;
        grid-template-columns: 1.5fr 1fr 1fr 1fr; 
        gap: 3rem;
        text-align: start;
    }

    .formSubs .form-input input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
        margin: 1rem 0;
    }

    .formSubs .form-input button {
        width: 100%;
        padding: 0.75rem;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
    }

    .formSubs .form-input button:hover {
        background-color: #0056b3;
    }

    .container-form-columns ul li {
        padding: 0.58rem 0;
        cursor: pointer;
    }

    .container-form-columns .information h6 {
        font-size: 1.2rem;
    }

    /* Diseño responsivo para móviles */
    @media (max-width: 768px) {
        .container-form-columns {
            display: flex;
            flex-direction: column;
        }

        .information ul {
            display: none; /* Oculta el contenido por defecto */
            padding-left: 1rem;
            margin-top: 0.5rem;
        }

        .information ul {
            transition: 0.5s;
        }

        .information.active ul {
            display: block; /* Muestra el contenido cuando está activo */
        }

        .information h6 {
            cursor: pointer;
            padding: 0.75rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.85);
        }

        .information h6::after {
            content: " ▼"; /* Flecha hacia abajo */
            float: right;
        }

        .information.active h6::after {
            content: " ▲"; /* Flecha hacia arriba cuando está activo */
        }
    }
</style>

<footer class="footer">
    <div class="container-logo-footer-animated">
        <div class="circle-logo-footer-animate">
            <div class="logo-footer">
                <div class="text">
                  <p>No vivas poco, vive un océano de impresión! </p>
                </div>
            </div>  
        </div>
    </div>
    <div class="container-form-columns container">
        <div class="container-form">
            <form class="formSubs" action="" method="POST">
                <div class="form-title">
                    <h6>
                        Unéte a nuestra comunidad!
                    </h6>
                    <p>
                        Recibe promociones e inspiraciones cada semana.
                    </p>
                </div>
                <div class="form-input">
                    <input type="email" name="correo" id="correoSubs">
                    <button type="submit" class="btn">
                        Suscribirme
                    </button>
                </div>
            </form>
        </div>
        <div class="container-contacto information">
            <h6>
                CONTACTO
            </h6>
            <ul>
                <li>
                    OE5 MEXICO N15-46 Y BUENOS AIRE, Quito, Ecuador, 170402
                </li>
                <li>
                    Horarios: Lunes a Viernes de 08:00 AM a 18:00 PM
                </li>
                <li>
                    0963639728
                </li>
            </ul>
        </div>
        <div class="links-services information">
            <h6>
                MÁS SOLICITADOS
            </h6>
            <ul>
                <li>Personalizados</li>
                <li>Kit empresariales</li>
                <li>Publicidad</li>
                <li>Impresión de libros</li>
            </ul>
        </div>
        <div class="container-links-importants information">
            <h6>
                LINKS IMPORTANTES
            </h6>
            <ul>
                <li>
                    Nosotros
                </li>
                <li>
                    Contacto
                </li>
                <li>
                    Política de privacidad
                </li>
                <li>
                    Términos y condiciones
                </li>
            </ul>
        </div>
    </div>
</footer>

<script>
    const textfooterAnimated = document.querySelector('.text p');
    textfooterAnimated.innerHTML = textfooterAnimated.innerText.split("").map(
            (char, i) => 
            `<span style="transform:rotate(${(i) * 8.2}deg)">${char}</span>`
        ).join("");

    document.addEventListener("DOMContentLoaded", function () {
        const headings = document.querySelectorAll(".information h6");

        headings.forEach((heading) => {
            heading.addEventListener("click", function () {
                const parent = this.parentElement;
                parent.classList.toggle("active");
            });
        });
    });
</script>