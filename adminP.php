<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: admin.php');
     die() ;

    }
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
    <title>Administrar</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        html {
            background-color: white;
        }

        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
        }

        .recuerdos {
            width: 20rem;
            display: inline-block;
            margin: 0 5px;
        }

        .uno {
            font-family: "monserrat";
            text-align: center;
            font-size: 350%;
            color: black;
        }

        th {
            background-color: yellow;
            font-family: "monserrat";
            font-size: 120%;
            color: black;
        }

        .btn {
            background-color: transparent;
            width: 70px;
            height: 40px;
        }

        .btn p {
            font-family: "monserrat";
            font-size: 130%;
            color: white;
            text-align: center; 
        }

        td {
            text-align: middle;
            font-family: "monserrat";
            font-size: 120%;
        }
        
        p {
            text-align: left;
            font-family: "monserrat";
        }


    </style>

</head>

<body>


    <?php
    include "header2.php";
    ?>

    <br><br><br><br><br><br>


    <p class="uno">MIS PUBLICACIONES</p>

    <?php
        include "conexion.php";
        $id=$_SESSION['usuario'];
        $consulta = "SELECT * FROM publicacion";
        $registros = $db->query($consulta);

        $resultado = array();
        while($fila = $registros->fetch_assoc()){
            $resultado[] = $fila;
        }

    //var_dump($resultado);

    ?>


    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>NO.</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TITULO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>DESCRIPCION</th>
                <th>IMAGEN</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach($resultado AS $pub){
                echo "<tr>
                <td></td>
                <td>$pub[id]</td>
                <td>$pub[titulo]</td>
                <td>$pub[descripcion]</td>
                <td><img src=\"Fotos/$pub[foto]\" alt=imagen 4 class=recuerdos></td>
                <td>
                <a href='eliminarP.php?id=$pub[id]' ><img src='img/basura2.png' width='70px'></a>
                <p>Eliminar</p>
                </td>
                <td>
                <a href='editarP.php?id=$pub[id]' ><img src='img/edit3.png' width='70px'></a>
                <p>Editar</p>
                </td>
                <td>
                <a href='editarImg.php?id=$pub[id]' ><img src='img/editImg2.png' width='70px'></a>
                <p>Cambiar <br>Imagen</p>
                </td>
                </tr>";
            }

        ?>
                <!-- <a href='eliminar.php?id=$reporte[id]'><img src='img/basura.png' width='50px'></a>
                <a href='modificar.php?id=$reporte[id]'><img src='img/edit.png' width='50px'></a>
                <a href='modfoto.php?id=$reporte[id]' class='btn' ><p>FOTO</p></a> -->
            </form>
        </tbody>
    </table>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>