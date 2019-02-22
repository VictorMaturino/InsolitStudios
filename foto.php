<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fotos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/lightbox.css">
     <link rel="stylesheet" href="diseño.css">

    <style>
        .recuerdos {
            width: 25rem;
            display: inline-block;
            margin: 0 5px;
        }
        
        .modal .alert {
            display: none;
        }
        img {
            width: 200px;
            height: 100px;
            display: inline-block;
        }
    </style>
</head>

<body>
    
    <?php
    include "header.php";
        include "conexion.php";

        $consulta ="SELECT * FROM fotos";
        $registros =$db->query($consulta);

        $resultado = array();
        while($fila = $registros->fetch_assoc()){
            $resultado[] = $fila;
        }

        //var_dump($resultado);
    ?>

    <article class="container-fluid">
        <section class="row">
            <section class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">El gran día</h1>
                    <p class="lead">De lo que quiero hablaros hoy es de la diferencia entre los dones y las elecciones. El ingenio es un don, la bondad es un don. Los dones son fáciles, al fin y al cabo nos vienen dados. Las elecciones son difíciles. Uno puede seducirse
                        a sí mismo con los dones si no tiene cuidado y, si lo hace, probablemente será en detrimento de sus elecciones.</p>
                </div>
            </section>
            <form action="fot.php" method="POST" enctype="multipart/form-data">
            <section class="col-md-6">
                                <div class="form-group">
                                    <label for="foto" style="color: white;">Insertar fotos</label>
                                    <input type="file" name="foto" class="form-control" style="background-color: #363636; border: none; color: white;">
                                    <button class="btn btn-success">
                                            <i>Aceptar</i>
                                        </button>
                                </div>
                                </section>
                            </form>
            <?php
                foreach($resultado AS $usuario){
                    echo "<tr>
                            <td>
                            <a data-lightbox=\"recuerdos\" href=\"fotos/$usuario[foto]\"><img src=\"fotos/$usuario[foto]\"></td>
                        </tr>";
                }
            ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
        $(function() {
             $("#evento").addClass("active");
              $("#login a").text("Logout");
              $("#login").on("click", function() {
                location.href='logout.php';
            });
          });
    </script>
    <script src="scrip.js"></script>
</body>

</html>