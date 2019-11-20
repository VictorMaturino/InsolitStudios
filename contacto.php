<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        body {
            background-image: url("img/fondo2.jpeg");
            background-size: 100%;
        }

        .cont {
            margin-top: 5%;
        }

        .uno {
            text-align: center;
            font-size: 100px;
            font-family: "monserrat";
            color: gray;
        }

        .dos {
            color: white;
            text-align: center;
            font-size: 40px;
            font-family: "monserrat";
        }
    </style>
</head>


<body>
    <?php
        include "header1.php"
    ?>
    <br><br>
    <div class="cont">
        <h1 class="uno">Insolit Studios</h1>
        <p class="dos">Somos desarrolladores independientes con pasión por los videojuegos y poniendo 
            todo nuestro esfuerzo para hacer buenos juegos, combinando la mecánica clásica de los juegos 
            antiguos con hazañas innovadoras</p>
        <?php
    include "conexion.php";
    $consulta = "SELECT * FROM contacto";
    $registros = $db->query($consulta);

    $resultado = array();
    while($fila = $registros->fetch_assoc()){
        $resultado[] = $fila;
    }

    //var_dump($resultado);

    ?>

<?php

foreach($resultado AS $cont){
    echo "
    <p class='dos'>Dirección: $cont[direccion]</p>
    <p class='dos'>$cont[email]</p>
    <p class='dos'>Tel. $cont[telefono]</p>
    ";
    }

    ?>

<!--    <p class="dos">Direccion: Valle del malpaís #114 Fracc. Los Fresnos Durango, Dgo.</p>
        <p class="dos">insolitstudios@gmail.com</p>
        <p class="dos">Tel. (618) 367 6409</p> -->
    </div>


    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/lightbox.min.js"></script>

    <script>

    </script>
</body>

</html>