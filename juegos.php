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

        .todo {
            text-align: center;
        }

        .recuerdos {
            width: 100%;
            /* height: 100%; */
            display:block;
            margin:auto;
        }

        .login-container {
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .login-form-1 {
            padding: 1%;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }

        .login-form-2 {
            padding: 1%;
            /* background: #fed136; */
            background: transparent;
            /* box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19); */
            display: block;
            margin: auto;

        }

        .login-form-2 p {
            text-align: left;
            color: white;
            font-family: "monserrat";
            font-size: 20px;
        }

        .login-form-2 h1 {
            color: #fed136;
            font-family: "monserrat";
        }

        .login-container form {
            padding: 10%;
        }

        .descarga {
            font-family: "monserrat";
            font-size: 30px;
            color: #fed136;
            margin-left: 5%;
        }

        .descarga2 {
            font-family: "monserrat";
            font-size: 20px;
            color: white;
            margin-left: 5%;
        }

    </style>

</head>

<body>


    <?php
    include "header1.php";
    ?>

    <?php
        include "conexion.php";
        $consulta = "SELECT * FROM publicacion";
        $registros = $db->query($consulta);

        $resultado = array();
        while($fila = $registros->fetch_assoc()){
            $resultado[] = $fila;
        }

    //var_dump($resultado);

    ?>

    <br><br><br><br><br><br>

    <!-- Descarga -->
    <p class="descarga">Videojuegos Disponibles</p>
    <p class="descarga2">Horas de diversion en tu celular con:</p>
    <div class="col-md-6">
    <p class="descarga2">Infinite Bit</p>
        <img src="img/Imagen7.png" width="100px">
        <a href="https://play.google.com/store/apps/details?id=com.insolitstudios.infinite" class="img" target=blank>
            <img src="img/Play2.png" width="150px">
        </a>
    </div>
    <div class="col-md-6">
    <p class="descarga2">Godinez Gone Wild</p>
        <img src="img/Imagen8.png" width="100px">
        <a href="https://play.google.com/store/apps/details?id=com.InsolitStudios.Godinez" class="img" target=blank>
            <img src="img/Play2.png" width="150px">
        </a>
    </div>



    <br><br><br><br>   
    <div class="container login-container">
        <div class="row">
            <?php

    foreach($resultado AS $pub){
        echo "
        <div class='col-md-6 login-form-1'>
        <img src=\"Fotos/$pub[foto]\" alt=imagen 4 class=recuerdos>
    </div>
    <div class='col-md-6 login-form-2'>
        <h1>$pub[titulo]</h1>
        <p>$pub[descripcion]</p>
    </div>
        ";
    }

    ?>

        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>