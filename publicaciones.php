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
            margin-top: 10%;
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
            text-align: justify;
            color: white;
            font-family: "monserrat";
            font-size: 200%;
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

        .imagenfondo2 {
            background: url(img/fondo2.jpg);
            width: 100%;
            height: 500px;
            background-position: 50% 50% !important;
            background-size: cover !important;
        }

        .info2 {
            width: 500px;
            height: 380px;
            margin: 80px 0 0 50px;
            transition: transform 1s;
        }

        div.info2:hover {
            transform: scale(1.2);
            transition: 2;
        }

        .informacionSalon2 {
            color: #fed136;
            margin-top: 50px;
            font-size: 250%;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 10px;
            text-align: center;
        }
        .divider {
            height: 2px;
            background-color: black;
            margin: 30px 60px 30px 60px;

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

    <!-- Descarga -->

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
        <div class='info2'>
            <h1 class='informacionSalon2'>$pub[titulo]</h1>
            <div class='divider' style='background:white;'></div>
            <p>$pub[descripcion]</p>
        </div>
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