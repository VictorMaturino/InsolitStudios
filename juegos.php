<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juegos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            background-image: url("img/fondo2.jpeg");
            background-size: 100%;
        }

        .descarga {
            font-family: "monserrat";
            font-size: 350%;
            color: #fed136;
            margin-left: 5%;
        }

        .descarga2 {
            font-family: "monserrat";
            font-size: 300%;
            color: white;
            margin-left: 5%;
        }

        .descarga3 {
            font-family: "monserrat";
            font-size: 300%;
            color: white;
            margin-left: 10%;
        }

        .rec {
            margin-left: 15%;
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

        .modal-content {
            margin-top: 20%;
            color: gray;
        }

        h4 {
            text-align: justify;
            margin-left: 10%;
            margin-right: 10%;
        }

        h3 {
            text-align: center;
        }

        .link {
            text-align: center;
        }

        .cuadro {
            background-color: black;
            opacity: .80;
            border: 10px double #402727;
            height: 60%;
        }
    </style>

</head>

<body>


    <?php
    include "header1.php";
    ?>

    <br><br><br><br><br><br>

    <!-- Descarga -->
    <p class="descarga">Videojuegos Disponibles</p>
    <!-- <p class="descarga2">Horas de diversion con:</p> -->

    <div class="modal fade" role="dialog" id="ventana">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Infinite Bit</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <h4>Desarrollo de Videojuego
                    Caer al vacío e intentar sobrevivir.
                    Ni siquiera se trata de cuándo mueres, sino de cómo sobrevivir tanto como
                    puedas y hacer todo lo que puedas</h4>
                <div class="link">
                    <br>
                    <h5>Descargar...</h5>
                    <a href="https://play.google.com/store/apps/details?id=com.insolitstudios.infinite" class="img"
                        target=blank>
                        <img src="img/Play2.png" width="25%">
                    </a>
                </div>
                <p id="mensaje" class="text-danger"></p>
                <div class="modal-footer">
                    <button class="btn btn-danger" id="btnCancelar">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="ventana2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Godinez Gone Wild</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h4>Godi acaba de terminar su trabajo haciendo el informe magenta después de largas horas en la oficina,
                    pero finalmente lo hizo, ¡este largo fin de semana está listo para ser genial !, pero al salir notó
                    que olvidó entregar el informe magenta (¡ho noooooo!) , Godi tiene que regresar y colocar el informe
                    en la oficina de su jefe (luchando contra todos en su camino).</h4>
                <div class="link">
                    <br>
                    <h5>Descargar...</h5>
                    <a href="https://play.google.com/store/apps/details?id=com.InsolitStudios.Godinez" class="img"
                        target=blank>
                        <img src="img/Play2.png" width="25%">
                    </a>
                    <a href="https://insolit-studios.itch.io/godinez-gone-wild" class="img" target=blank>
                        <img src="img/itch-io.png" width="25%">
                    </a>
                    <a href="https://gamejolt.com/games/GodinezGoneWild/417631" class="img" target=blank>
                        <img src="img/gamejolt.png" width="25%">
                    </a>
                </div>
                <p id="mensaje" class="text-danger"></p>
                <div class="modal-footer">
                    <button class="btn btn-danger" id="btnCancelar2">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" id="ventana3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Alebrije</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h4>Videojuego en Desarrollo</h4>
                <p id="mensaje" class="text-danger"></p>
                <div class="modal-footer">
                    <button class="btn btn-danger" id="btnCancelar3">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="ventana4">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Bunny Down</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h4>Videojuego en Desarrollo</h4>
                <p id="mensaje" class="text-danger"></p>
                <div class="modal-footer">
                    <button class="btn btn-danger" id="btnCancelar4">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="ventana5">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Buba Canyon VS Zombies</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h4>Videojuego en Desarrollo</h4>
                <p id="mensaje" class="text-danger"></p>
                <div class="modal-footer">
                    <button class="btn btn-danger" id="btnCancelar5">Cerrar</button>
                </div>
            </div>
        </div>
    </div>































    <div>
        <!-- <div class="cuadro"> -->
        <div class="col-md-6 cuadro">
            <p class="descarga3">Infinite Bit</p>
            <div class="col-md-6">
                <a href="#" id="juego">
                    <div class="info2">
                        <img src="img/Imagen7.png" width="80%" class="rec">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <br><br><br><br>
                <a href="https://play.google.com/store/apps/details?id=com.insolitstudios.infinite" class="img"
                    target=blank>
                    <div class="info2">
                        <img src="img/Play2.png" width="65%">
                    </div>
                </a>
            </div>
        </div>
        <!-- </div> -->
        <!-- <div class="cuadro"> -->
        <div class="col-md-6 cuadro">
            <p class="descarga3">Godinez Gone Wild</p>
            <div class="col-md-6">
                <a href="#" id="juego2">
                    <div class="info2">
                        <img src="img/Imagen8.png" width="80%" class="rec">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="https://play.google.com/store/apps/details?id=com.InsolitStudios.Godinez" class="img"
                    target=blank>
                    <div class="info2">
                        <img src="img/Play2.png" width="60%">
                    </div>
                </a>
                <a href="https://insolit-studios.itch.io/godinez-gone-wild" class="img" target=blank>
                    <div class="info2">
                        <img src="img/itch-io.png" width="50%">
                    </div>
                </a>
                <a href="https://gamejolt.com/games/GodinezGoneWild/417631" class="img" target=blank>
                    <div class="info2">
                        <img src="img/gamejolt.png" width="50%">
                    </div>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>


    <div>
        <div class="col-md-6 cuadro">
            <br><br><br><br>
            <p class="descarga3">Alebrije</p>
            <div class="col-md-6">
                <a href="#" id="juego3">
                    <div class="info2">
                        <img src="img/Imagen12.jpg" width="60%" class="rec">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <br><br><br><br>
                <p class="descarga3">Proximamente...</p>
            </div>
        </div>
        <div class="col-md-6 cuadro">
            <br><br><br><br>
            <p class="descarga3">Bunny Down</p>
            <div class="col-md-6">
                <a href="#" id="juego4">
                    <div class="info2">
                        <img src="img/Imagen6.png" width="60%" class="rec">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <br><br><br><br>
                <p class="descarga3">Proximamente...</p>
            </div>
        </div>
    </div>


    <div>
        <div class="col-md-6 cuadro">
            <br><br><br><br>
            <p class="descarga3">Buba Canyon VS Zombies</p>
            <div class="col-md-6">
                <a href="#" id="juego5">
                    <div class="info2">
                        <img src="img/Imagen10.png" width="90%" class="rec">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <br><br><br><br>
                <p class="descarga3">Proximamente...</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
        $(function () {

            $("#inicio").addClass("active");

            $("#ventana").modal({
                show: false,
                backdrop: "static"
            });

            $("#btnCancelar").on("click", function () {
                $("#ventana").modal("hide");
            });

            $("#juego").on("click", function () {
                $("#ventana").modal("show");
            });

            $("#ventana2").modal({
                show: false,
                backdrop: "static"
            });

            $("#btnCancelar2").on("click", function () {
                $("#ventana2").modal("hide");
            });

            $("#juego2").on("click", function () {
                $("#ventana2").modal("show");
            });

            $("#ventana3").modal({
                show: false,
                backdrop: "static"
            });

            $("#btnCancelar3").on("click", function () {
                $("#ventana3").modal("hide");
            });

            $("#juego3").on("click", function () {
                $("#ventana3").modal("show");
            });

            $("#ventana4").modal({
                show: false,
                backdrop: "static"
            });

            $("#btnCancelar4").on("click", function () {
                $("#ventana4").modal("hide");
            });

            $("#juego4").on("click", function () {
                $("#ventana4").modal("show");
            });

            $("#ventana5").modal({
                show: false,
                backdrop: "static"
            });

            $("#btnCancelar5").on("click", function () {
                $("#ventana5").modal("hide");
            });

            $("#juego5").on("click", function () {
                $("#ventana5").modal("show");
            });

        });
    </script>

</body>

</html>