<style>
    /* Estilos generales para el header */
    header {
        position: fixed;
        width: 100%;
        top: 0;
        transition: 0.3s all;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px); 
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    header.hidden {
        transform: translateY(-100%);
    }

    header li a { 
        color: #fff;
    }

    header .submenu li a {
        color: var(--neutral-gray);
    }

    .menu-navegation .menu-categories {
        display: flex;
        gap: 1rem;
    }

    .menu-navegation ul li {
        position: relative;
        padding: 0.75rem;
    }

    /* Submenú */
    .submenu {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
        flex-direction: column;
    }

    li:hover .submenu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .submenu li a {
        padding: 0.3rem 1rem;
        white-space: nowrap;
        transition: 0.3s;
    }

    .submenu li a:hover {
        color: var(--bright-blue);
    }

    /* Estilos para los iconos */
    .icon-header .icon-svg {
        fill: var(--bright-blue); 
        transition: fill 0.3s ease; 
    }

    .icon-header:hover .icon-svg {
        fill: var(--energetic-pink);
    }

    .menu-toggle {
        display: none;
    }

    /* ======== RESPONSIVE DESIGN ======== */
    @media screen and (max-width: 768px) {
        header {
            padding: 1rem;
        }

        header ul li a {
            font-size: 1.5em;
            color: #fff;
        }

        .menu-navegation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .menu-navegation.active {
            transform: translateY(0);
        }

        .menu-categories {
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .menu-categories li {
            text-align: center;
        }

        .submenu {
            position: static;
            background: transparent;
            box-shadow: none;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            display: none;
        }

        li.show-submenu .submenu {
            display: block;
        }

        /* Botón hamburguesa */
        .menu-toggle {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1050;
            position: relative;
        }

        .menu-toggle span {
            display: block;
            width: 30px;
            height: 3px;
            background: white;
            margin: 3px 0;
            border-radius: 2px;
            transition: 0.3s;
        }

        /* Animación de la hamburguesa */
        .menu-toggle.active span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        
        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .menu-toggle.active span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Capa para cerrar el menú al hacer clic fuera */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: -1;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }
    }
</style>