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
        z-index: 10;
        border-radius: var(--border-radius);
    }

    .navigationPageIcon.whatsapp img {
        width: 50px;
        height: 50px;
        cursor: pointer;
    }

    .chatMessage {
        position: absolute;
        bottom: 5px;
        right: 0;
        width: calc(100vw - 20px * 2);
        max-width: 400px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        font-family: Arial, sans-serif;
        font-size: 14px;
        opacity: 0;
        transform: translateY(100%);
        transition: opacity 0.3s ease-out, transform 0.3s ease-out;
        pointer-events: auto;
        display: flex;
        flex-direction: column;
    }

    .chatMessage.show {
        opacity: 1;
        transform: translateY(0);
    }

    .chatHeader {
        background-color: #25d366; /* color WhatsApp */
        color: white;
        padding: 8px 12px;
        border-radius: 12px 12px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chatFooter {
        padding: 8px 12px;
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .chatHeader span {
        font-weight: bold;
    }

    .closeChat {
        background: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 30px;
        cursor: pointer;
        padding: 5px 10px;
        border-radius: 50%;
        line-height: 1;
        transition: background 0.3s ease;
    }

    .closeChat:hover {
        background: rgba(0, 0, 0, 0.38);
    }

    .chatBody {
        position: relative;
        min-height: 56px;
        max-width: 250px;
        min-width: 60px;
        padding: 15px 20px;
        margin: 16px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
        border-radius: var(--border-radius);
        line-height: 1.388em;
    }

    .chatBody:before {
        content: "";
        display: block;
        position: absolute;
        bottom: 18px;
        left: -15px;
        width: 17px;
        height: 25px;
        background: inherit;
        clip-path: inherit;
    }

    .chatBody span {
        font-size: 0.952rem;
        word-break: break-word;
        font-weight: 200;
    }

    .sendButton {
        background-color: #25d366;
        color: white;
        text-align: center;
        padding: 10px 0;
        border-radius: var(--border-radius);
        text-decoration: none;
        font-weight: bold;
        cursor: pointer;
        user-select: none;
        width: 150px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .sendButton:hover {
        background-color: #1ebe57;
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

    footer .footer-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px min(5rem, 5vw);
    }

    footer .footer-row a {
        color: var(--bright-blue);
    }

    footer .footer-row .payments-right {
        display: flex;
        justify-content: end;
        align-items: center;
        gap: 8px;
    }

    footer .footer-row .payments-right img {
        max-width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
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

        footer .footer-row,
        footer .footer-row .payments-right {
            flex-direction: column;
            gap: 10px;
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

    <!-- Mensaje tipo chat -->
    <div class="chatMessage">
        <div class="chatHeader">
            <span>
                
            </span>
            <button 
                class="closeChat" 
                aria-label="Cerrar chat"
            >
                &times;
            </button>
        </div>
        <div class="chatBody">
            <span>
                Hola
            </span>
            <br>
            <span>
                ¿en que te podemos ayudar?
            </span>
        </div>
        <div class="chatFooter">
            <a 
                href="https://wa.me/1234567890" 
                target="_blank" 
                class="sendButton"
            >
                Abrir chat
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M22 2L11 13"></path>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </a>
        </div>
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
                    <i>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="filter: invert(1);"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                    </i>
                    OE5 MEXICO N15-46 Y BUENOS AIRE, Quito, Ecuador, 170402
                </li>
                <li>
                    <i>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="filter: invert(1);"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"/></svg>
                    </i>
                    Horarios: Lunes a Viernes de 08:00 AM a 18:00 PM
                </li>
                <li>
                    <i>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="filter: invert(1);"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"/></svg>
                    </i>
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
    <hr>
    <div class="footer-row">
        <div class="copyright-left order-2">
            &copy; Diseñado y desarrollado por <a href="https://www.linkedin.com/in/ingeniero-cristian-molina" target="_blank" rel="noopener noreferrer">Cristian Molina</a> 2025.
        </div>
        <div class="payments-right order-1">
            <span>Aceptamos todos los métodos de pago:</span>
            <div class="icons">
                <img src="{{ asset('images/footer/visa.png') }}" width="50" height="30" alt="Visa" class="payment-icon">
                <img src="{{ asset('images/footer/mastercard.png') }}" width="50" height="30" alt="Mastercard" class="payment-icon">
                <img src="{{ asset('images/footer/american-express.png') }}" width="50" height="30" alt="American Express" class="payment-icon">
                <img src="{{ asset('images/footer/diners.png') }}" width="50" height="30" alt="Diners Club" class="payment-icon">
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

        const whatsappIcon = document.querySelector('.icon-whatsapp');
        const chatMessage = document.querySelector('.chatMessage');

        whatsappIcon.addEventListener('click', () => {
            chatMessage.classList.toggle('show');
        });

        setTimeout(() => {
            chatMessage.classList.add('show');
        }, 2000);

        document.querySelector('.closeChat').addEventListener('click', () => {
            chatMessage.classList.remove('show');
        });

        window.addEventListener("scroll", toggleNavigation);

        const whatsappMessageButton = document.querySelector('.sendButton');
        if (whatsappMessageButton) {
            whatsappMessageButton.addEventListener('click', function(event) {
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
                    } else {
                        elements.forEach(el => el.classList.remove('visible'));
                    }
                });
            }, { threshold: 0.2 });

            observer.observe(section);
        });

        const titles = document.querySelectorAll(".animated-title");

        const observerTitles = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                } else {
                    // 👇 se quita cuando sale del viewport
                    entry.target.classList.remove("show");
                }
            });
        }, { threshold: 0.2 });

        titles.forEach(title => observerTitles.observe(title));

        // Pagina de carga
        const loadingPage = document.querySelector('.loading-page');
        const svg = document.getElementById('svg');
        const logoName = document.querySelector('.logo-name');

        // Escuchar cuando una animación termine en loadingPage o en sus hijos
        /*loadingPage.addEventListener('animationend', (e) => {
            // Verifica que es la última animación que quieres controlar (opcional)
            if (e.target === loadingPage || e.target.matches('.logo-name, #svg')) {
                // Aplicar transición para desvanecer
                loadingPage.style.transition = 'opacity 1s ease';
                loadingPage.style.opacity = 0;

                // Opcional: luego ocultar el elemento para evitar que siga ocupando espacio
                loadingPage.addEventListener('transitionend', () => {
                    loadingPage.style.display = 'none';
                }, { once: true });
            }
        });*/

        // Aplicar las animaciones al SVG y al nombre del logo
        svg.style.animation = "draw 2s ease forwards, fillFade 2s ease forwards";
        logoName.style.animation = "growHeight 1.2s ease forwards 1s";

        window.addEventListener("load", () => {
            // Escuchar cuando terminen las animaciones
            let completed = 0;
            [svg, logoName].forEach(el => {
                el.addEventListener('animationend', () => {
                    completed++;
                    if (completed === 2) {
                        loadingPage.style.transition = "opacity 1s ease";
                        loadingPage.style.opacity = "0";
                        setTimeout(() => {
                            loadingPage.style.display = "none"; 
                        }, 1000);
                    }
                });
            });
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