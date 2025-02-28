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
        background: url({{ asset('images/logo/logo-oceanprint-500-x-500.png') }});
        background-size: contain;
        background-repeat: no-repeat;
        border-radius: 50%;
        
    }

    .circle-logo-footer-animate .logo-footer .text {
        position: absolute;
        width: 100%;
        height: 100%;
        animation: rotateTextlogo-footer 20s linear infinite;
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

    .circle-logo-footer-animate .logo-footer .text p {
        font-size: 0.85rem;
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

    /**
    * Menu seccion
    */
    .containerNavigationPage {
        position: fixed;
        bottom: 30px;
        right: 18px;
        z-index: 5;
        padding: 0.28rem 0.57rem;
        border-radius: var(--border-radius);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, #f403d1, #64b5f6);
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.3s ease-out, transform 0.3s ease-out;
    }

    .containerNavigationPage.show {
        opacity: 1;
        transform: translateY(0);
    }

    .containerNavigationPage .menuNavigationPage {
        position: absolute;
        width: 100%;
        text-align: center;
        bottom: 60px;
        left: 0;
        padding: 0.65rem;
        border-radius: var(--border-radius);
        background: linear-gradient(135deg, #f403d1, #64b5f6);
        opacity: 0;
        transform: translateY(-100%);
        transition: 0.5s;
    }

    .menuNavigationPage.active {
        opacity: 1;
        transform: translateY(0);
    }

    .containerNavigationPage .navigationPageIcon.navigationHome img {
        position: relative;
        width: 30px;
        height: 29px;
        cursor: pointer;
    }

    .containerNavigationPage .navigationPageIcon.navigationPage svg {
        position: relative;
        width: 21px;
        height: 21px;
        cursor: pointer;
    }

    .containerNavigationPage .navigationPageIcon.whatsapp img {
        position: relative;
        width: 38px;
        height: 38px;
        cursor: pointer;
    }

    .containerNavigationPage .menuNavigationPage ul li {
        padding: 0.189rem 0;
    }

    .containerNavigationPage .menuNavigationPage ul li a {
        font-size: 0.768rem;
        text-transform: uppercase;
        transition: 0.3s;
        font-weight: bold;
        color: #fff;
    }

    .containerNavigationPage .menuNavigationPage ul li a:hover {
        color: var(--bright-crem-blue);
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

<div class="containerNavigationPage">
    <div class="navigationPageIcon navigationHome">
        <a href="{{ route('home') }}">
            <img
                class="icon-home" 
                src="{{ asset('images/iconos/home.svg') }}" 
                alt="Icono de Whatsapp"
            >
        </a>                         
    </div>
    <div class="navigationPageIcon navigationPage">
        <svg width="38" height="38" viewBox="8 8 32 32" xmlns="http://www.w3.org/2000/svg">
            <!-- Cuerpo de la libreta -->
            <rect x="12" y="10" width="24" height="30" rx="3" stroke="#fff" stroke-width="2" fill="none"/>
            
            <!-- Anillos de la libreta -->
            <circle cx="12" cy="14" r="2" fill="#fff"/>
            <circle cx="12" cy="22" r="2" fill="#fff"/>
            <circle cx="12" cy="30" r="2" fill="#fff"/>
            <circle cx="12" cy="38" r="2" fill="#fff"/>
            
            <!-- Líneas tipo menú dentro de la libreta -->
            <line x1="18" y1="18" x2="30" y2="18" stroke="#fff" stroke-width="2"/>
            <line x1="18" y1="24" x2="30" y2="24" stroke="#fff" stroke-width="2"/>
            <line x1="18" y1="30" x2="30" y2="30" stroke="#fff" stroke-width="2"/>
        </svg>             
    </div>
    <div class="navigationPageIcon whatsapp">
        <img
            class="icon-whatsapp" 
            src="{{ asset('images/logo/whatsapp.png') }}" 
            alt="Icono de Whatsapp"
        >
    </div>
    <div class="menuNavigationPage">
        <ul>
            
        </ul>
    </div>  
</div>

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
    const textfooterAnimated = document.querySelector('.circle-logo-footer-animate .text p');
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

        /**
         * Submenu de secciones
         * 
        */
        generarMenuDesdeSecciones();

        const navigationIcon = document.querySelector(".navigationPage");
        const menuNavigationPage = document.querySelector(".menuNavigationPage");

        navigationIcon.addEventListener("click", function (event) {
            menuNavigationPage.classList.toggle("active");
            event.stopPropagation();
        });

        document.addEventListener("click", function (event) {
            if (!menuNavigationPage.contains(event.target)) {
                menuNavigationPage.classList.remove("active");
            }
        });

        const navigation = document.querySelector(".containerNavigationPage");

        function toggleNavigation() {
            if (window.scrollY > 250) {
                navigation.classList.add("show");
            } else {
                navigation.classList.remove("show");
            }
        }

        window.addEventListener("scroll", toggleNavigation);
    });

    function generarMenuDesdeSecciones() {
        const menuUl = document.querySelector(".menuNavigationPage ul");
        if (!menuUl) return; // Evita errores si no existe el menú

        // Seleccionar todas las secciones de la página
        const sections = document.querySelectorAll("section");

        sections.forEach(section => {
            const sectionId = section.id; // ID de la sección
            const menuText = section.getAttribute("data-menu-navigation"); // Texto del menú

            // Verificar que tiene id y data-menu-navigation antes de agregarlo
            if (sectionId && menuText) {
                const li = document.createElement("li");
                const a = document.createElement("a");
                a.href = `#${sectionId}`;
                a.textContent = menuText;
                li.appendChild(a);
                menuUl.appendChild(li);
            }
        });
    }
</script>