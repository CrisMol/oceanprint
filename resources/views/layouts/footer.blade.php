<style>
    footer {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        background-color: var(--deep-black);
        padding: 2rem 0 0 0;
        color: #fff;
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
        background: url({{ asset('images/logo/logo-blanco.png') }});
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
        color: #fff;
        opacity: 0.52;
        transition: 0.5s;
    }

    .container-form-columns ul li:hover {
        opacity: 1;
    }

    .container-form-columns .information h6 {
        font-size: 1.2rem;
    }

    /**
    * Menu seccion
    */
    .containerNavigationPage {
        position: fixed;
        bottom: 10px;
        right: 18px;
        z-index: 5;
        border-radius: var(--border-radius);
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.3s ease-out, transform 0.3s ease-out;
    }

    .containerNavigationPage.show {
        opacity: 1;
        transform: translateY(0);
    }

    .containerNavigationPage .navigationPageIcon.whatsapp img {
        position: relative;
        width: 50px;
        height: 50px;
        cursor: pointer;
    }

    footer ul {
        list-style: none;
        padding: 0;
    }

    footer ul li {
        margin-bottom: 8px;
        font-size: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
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
    <div class="navigationPageIcon whatsapp">
        <img
            class="icon-whatsapp" 
            src="{{ asset('images/logo/whatsapp.png') }}" 
            alt="Icono de Whatsapp"
        >
    </div>
</div>

<footer class="footer">
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
                    <i class="fa-solid fa-location-dot"></i>
                    OE5 MEXICO N15-46 Y BUENOS AIRE, Quito, Ecuador, 170402
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    Horarios: Lunes a Viernes de 08:00 AM a 18:00 PM
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    0962330296 / (02) 518-4188
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
                    <a href="{{ route('about-us') }}">Nosotros</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contacto</a>
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
    document.addEventListener("DOMContentLoaded", function () {
        const headings = document.querySelectorAll(".information h6");

        headings.forEach((heading) => {
            heading.addEventListener("click", function () {
                const parent = this.parentElement;
                parent.classList.toggle("active");
            });
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

        const whatsappIcon = document.querySelector('.icon-whatsapp');
        if (whatsappIcon) {
            whatsappIcon.addEventListener('click', function(event) {
                event.preventDefault();
                abrirWhatsapp('Quiero comunicarme con un asesor de Oceanprint'); 
            });
        }

        setTimeout(() => {
            const msg = document.getElementById('flash-message');
            if (msg) {
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 500);
            }
        }, 3000);

        /**
         * Animaciones
        */
        const sections = document.querySelectorAll('.scroll-section'); // secciones que actúan como trigger

        sections.forEach(section => {
            const elements = section.querySelectorAll('.scroll-animate'); // elementos a animar

            if(elements.length === 0) return; // si no hay elementos, saltar

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        elements.forEach((el, index) => {
                            setTimeout(() => {
                                el.classList.add('visible');
                            }, index * 300); // cascada entre elementos
                        });
                        observer.unobserve(entry.target); // animar solo una vez
                    }
                });
            }, { threshold: 0.2 });

            observer.observe(section);
        });

        const titles = document.querySelectorAll(".animated-title");

        // Función para comprobar si está en pantalla
        const isInViewport = (el) => {
            const rect = el.getBoundingClientRect();
            return (
                rect.top < window.innerHeight &&
                rect.bottom >= 0
            );
        };

        // Si ya está en pantalla al cargar → mostrarlo
        titles.forEach(title => {
            if (isInViewport(title)) {
                title.classList.add("show");
            } else {
                // Si no está, observamos para mostrarlo al entrar
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                            observer.unobserve(entry.target); // Solo una vez
                        }
                    });
                }, { threshold: 0 });
                observer.observe(title);
            }
        });
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

    function abrirWhatsapp(messageText) {
        const phoneNumber = '593962330296';
        const encodedMessage = encodeURIComponent(messageText);
        const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
        window.open(whatsappLink, '_blank');
    }
</script>