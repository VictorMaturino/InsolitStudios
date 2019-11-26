<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Insolit Studios Inc. Developer">
    <meta name="Keywords" content="Insolit Studios,Insolit,Games,BubaCanyon,GodinezGoneWild,InfiniteBit,Videojuegos,
    PaginaInsolit,JuegosInsolitStudios"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insolit Studios</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        .img-container {
            background-size: 100% 100%;
            background-position: 50% 50%;
            height: 100%;
        }

        #carrucel {
            height: 100%;
            overflow: hidden;
        }

        .item {
            height: 400px;
        }

        .item img {
            height: 100%;
        }

        footer {
            height: 100%;
        }

        .divFooter {
            background-color: black;
            width: 100%;
            height: 100%;
            background-position: 50% 50% !important;
            background-size: cover !important;
        }

        .divFooter h4 {
            color: yellow;
            font-size: 20px;
            text-align: center;
            font-family: "monserrat";
        }

        h2 {
            text-aling: center;
        }

        .com {
            margin-left: 85%;
        }

        .img {
            margin-left: 10px;
        }

        .vision p {
            color: white;
            font-size: 15px;
            font-family: "monserrat";
            text-align: justify;
        }

        .mision p {
            color: white;
            font-size: 15px;
            font-family: "monserrat";
            text-align: justify;
        }

        .sub2 {
            text-align: center;
            background-image: url("img/fondo2.jpeg");
            font-size: 180%;
        }

        .sub2 h2 {
            text-align: center;
            color: white;
            font-size: 30px;
            font-family: "monserrat";
        }

        .sub2 input {
            height: 40px;
            width: 300px;
        }

        .sub2 button {
            font-size: 100%;
        }

        .uno {
            margin-left: 40%;
        }

        .dos {
            margin-left: 200px;
            margin-top: -40px;
        }

        .abajo {
            text-align: center;
        }

        .abajo p {
            color: white;
            font-size: 20px;
            font-family: "monserrat";
        }

        .fb-page {
            margin-left: 5%;
        }

        .titulo {
            font-size: 45px;
            color: blue;
            margin-left: 5%;
        }

        .titulo2 {
            margin-left: 10%;
        }

        .titulo3 {
            font-size: 45px;
            color: red;
            margin-left: 5%;
        }

        .titulo4 {
            margin-left: 20%;
        }

        .videos {
            margin-left: 50%;
            margin-top: -60%;
        }

        .videos2 {
            margin-left: 50%;
        }

        .fondo {
            background-image: url("img/fondo2.jpeg");
        }

        .admin {
            font-size: 70%;
        }

        .main {
            text-align: center;
            background-color: #0E0E0E;
        }

        .info2 {
            /* width: 500px; */
            /* height: 380px; */
            margin: 40px 0 0 50px;
            transition: transform 1s;
        }

        div.info2:hover {
            transform: scale(1.2);
            transition: 2;
        }
    </style>
</head>


<body>
    <?php
        include "header.php"
        ?>

    <div class="main" id="section1">
        <a id="demo" href="#section2" class="bajar"><img src="img/flecha4.gif" width="10%"></a>

    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- <div class="#myCarousel"> -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- </div> -->


        <div class="carousel-inner">

            <div class="item active">
                <div class="img-container" style="background-image: url(img/Imagen4.png)">
                </div>
            </div>

            <div class="item">
                <div class="img-container" style="background-image: url(img/Imagen3.png)">
                </div>
            </div>

            <div class="item">
                <div class="img-container" style="background-image: url(img/Imagen6.png)">
                </div>
            </div>

            <div class="item">
                <div class="img-container" style="background-image: url(img/Imagen1.jpg)">
                </div>
            </div>

            <div class="item">
                <div class="img-container" style="background-image: url(img/Imagen3.png)">
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
        </div>
        <div>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--Contenido 1 -->



    <div class="main" id="section2">

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0">
        </script>

        <!-- <br> -->
        <!-- <br> -->

        <div class="fondo">
            <div class="col-md-6">
                <br><br><br><br><br>
                <!-- <img class="titulo2" src="img/Facebook.png" width="50px"> -->
                <div class="fb-page" data-href="https://web.facebook.com/InsolitStudios/" data-tabs="timeline"
                    data-width="1000" data-height="600" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://web.facebook.com/InsolitStudios/" class="fb-xfbml-parse-ignore"><a
                            href="https://web.facebook.com/InsolitStudios/">Insolit Studios</a></blockquote>
                </div>
            </div>

            <div class="col-md-6">
                <!-- <div class="videos"> -->
                <!-- YouTube -->
                <script src="https://apis.google.com/js/platform.js"></script>
                <br>
                <div class="g-ytsubscribe" data-channelid="UC3lhJOpobEQ_D2S9Eg2H6fg" data-layout="full"
                    data-count="default">
                </div>
                <!-- YouTube -->
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bOBueaZ-Cy8" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <!-- </div> -->
                <!-- <div class="videos2"> -->
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bHkvX0dyoYw" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <!-- </div> -->
            </div>
        </div>




        <!--Contenido 2 -->

        <!--Contenido 3 -->
        <footer>

            <form action="insertarEmail.php" method="POST" enctype="multipart/form-data">
                <div class="sub2">
                    <br>
                    <h2>Suscribete a nuestro newsletter:</h2>
                    <img src="img/logo.png" width="100px">
                    <input type="email" name="email" placeholder="Email" onkeypress="return check(event)" required>
                    <button class="btn btn-success">Suscribir</button>

                    <br><br>
                </div>
            </form>

            <!-- <a href="#section1">Click Me to Smooth Scroll to Section 2 Below</a> -->
    </div>

    <div class="divFooter">
        <br>
        <h4>
            Bienvenidos a Insolit Studios
        </h4>
        <br>
        <div>
            <div class="col-md-6">
                <div class="vision">
                    <h4>Vision</h4>
                    <p>
                        Llegar a convertirnos en un estudio reconocido a nivel nacional,
                        así como hacer llegar nuestros juegos a la mayor cantidad de plataformas
                        en el mercado para poder llegar a ser exponentes en la creación
                        de videojuegos en México.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mision">
                    <h4>Mision</h4>
                    <p>
                        Insolit Studios persigue la misión de crear videojuegos divertidos,
                        interesantes y que la mayoría de las personas puedan disfrutar.
                        Ir creciendo mediante se van creando los nuevos juegos, aprender de las
                        experiencias y mejorar nuestros productos, siempre usando la pasión y
                        la creatividad de la cual nació este estudio.
                    </p>
                </div>
            </div>



            <div class="abajo">
                <p>Siguenos en:</p>
                <a href="https://web.facebook.com/InsolitStudios/" class="img" target=blank>
                    <img src="img/Faceboook.png" alt="" width="3%">
                </a>
                <a href="https://twitter.com/insolitstudios" class="img" target=blank>
                    <img src="img/Twitter.png" alt="" width="3.5%">
                </a>
                <a href="https://www.instagram.com/instolitstudios/?hl=es-la" class="img" target=blank>
                    <img src="img/Instagram.png" alt="" width="5%">
                </a>
                <a href="https://www.youtube.com/channel/UC3lhJOpobEQ_D2S9Eg2H6fg" class="img" target=blank>
                    <img src="img/Youtube.png" alt="" width="3.5%">
                </a>
            </div>
        </div>

        <h4>
            <a href="verificarUser.php">
                <p class="admin">ADMINISTRACIÓN</p>
            </a>
        </h4>
    </div>
    </footer>



    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/lightbox.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("#demo").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

    <script>
        function check(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros y letras
            patron = /[A-Za-z0-9._-@]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>
</body>

</html>