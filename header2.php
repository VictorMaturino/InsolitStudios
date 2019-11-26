<?php
SESSION_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insolit Studios</title>

    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Gothic+A1|Kaushan+Script|Libre+Baskerville|Lobster');

            .body {
                font-family: 'Gothic A1', sans-serif;
                font-size: 16px;
            }

            p {
                color: #6c6c6f;
                font-size: 1em;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                color: #323233;
                text-transform: uppercase;
            }

            .navbar-brand span {
                color: #fed136;
                font-size: 25px;
                font-weight: 700;
                letter-spacing: 0.1em;
                font-family: 'Lobster', cursive;
            }

            .navbar-brand {
                color: #fff;
                font-size: 25px;
                font-family: 'Lobster', cursive;
                font-weight: 700;
                letter-spacing: 0.1em;
            }

            .navbar-nav .nav-item .nav-link {
                padding: 1.1em 1em !important;
                font-size: 190%;
                font-weight: 500;
                letter-spacing: 1px;
                color: white;
                font-family: "monserrat";
            }

            .navbar-nav .nav-item .nav-link:hover {
                color: #fed136;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                border-top: 3px solid #fed136;
            }

            .dropdown-item:hover {
                background-color: black;
                color: #fff;
                font-size: 20px;
            }
            }

            nav {
                -webkit-transition: padding-top .3s, padding-bottom .3s;
                -moz-transition: padding-top .3s, padding-bottom .3s;
                transition: padding-top .3s, padding-bottom .3s;
                border: none;
            }

            .shrink {
                padding-top: 0;
                padding-bottom: 0;
                background-color: #212529;
            }

            .banner {
                background-image: url('http://www.hd-freewallpapers.com/latest-wallpapers/abstract-website-backgrounds.jpg');
                text-align: center;
                color: #fff;

                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .banner-text {
                padding: 200px 0 150px 0;
            }

            .banner-heading {
                font-family: "monserrat";
                font-size: 75px;
                font-weight: 700;
                line-height: 100px;
                margin-bottom: 30px;
                color: #fff;
            }

            .banner-sub-heading {
                font-family: "monserrat";
                font-size: 30px;
                font-weight: 300;
                line-height: 30px;
                margin-bottom: 50px;
                color: #fff;
            }

            .btn-banner {
                padding: 5px 20px;
                border-radius: 10px;
                font-weight: 700;
                line-height: 1.5;
                text-align: center;
                color: #fff;
                text-transform: uppercase;
            }

            .text-intro {
                width: 90%;
                margin: auto;
                text-align: center;
                padding-top: 30px;
            }


            /* mobile view */
            @media (max-width:500px) {
                .navbar-nav {
                    background-color: #000;
                    border-top: 3px solid #fed136;
                    color: #fff;
                    z-index: 1;
                    margin-top: 5px;
                }

                .navbar-nav .nav-item .nav-link {
                    padding: 0.7em 1em !important;
                    font-size: 100%;
                    font-weight: 500;
                }

                .banner-text {
                    padding: 150px 0 150px 0;
                }

                .banner-heading {
                    font-size: 30px;
                    line-height: 30px;
                    margin-bottom: 20px;
                }

                .banner-sub-heading {
                    font-size: 10px;
                    font-weight: 200;
                    line-height: 10px;
                    margin-bottom: 40px;
                }

            }

            @media (max-width:768px) {
                .banner-text {
                    padding: 150px 0 150px 0;
                }

                .banner-sub-heading {
                    font-size: 23px;
                    font-weight: 200;
                    line-height: 23px;
                    margin-bottom: 40px;

                }
            }

            .dropdown-item {
                font-size: 15px;
            }

            nav {
                background-color: black;
            }
        </style>
    </head>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
        <div class="container">
            <!-- Brand --><img src="img/logoInsolit.png" width="1.5%" height="2%">
            <a class="navbar-brand" href="adminP.php"><span>&nbsp;&nbsp;&nbsp;Insolit</span> Studios</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Más
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="registro.php">Agregar usuario</a>
                            <a class="dropdown-item" href="verificarCont.php">Modificar Contacto</a>
                            <a class="dropdown-item" href="enviarEmail.php">Emails</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="crearP.php">Crear Publicación</a>
                    </li>

                    <?php 
                        if (empty($_SESSION["usuario"])) {
                             echo '
                             <li class="nav-item">
                             <a class="nav-link" href="admin.php">Iniciar Sesión</a>
                         </li>
                            ';
                        }
                        else{
                             echo '
                             <li class="nav-item">
                        <a class="nav-link" href="#">Bienvenido '.$_SESSION["usuario"].'</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Salir</a>
                    </li>
                            ';                            
                        }

                         ?>


                </ul>
            </div>
        </div>
    </nav>

    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/lightbox.min.js"></script>
    <script>

    </script>

</body>

</html>