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
    <title>Galeria de Recuerdos</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/lightbox.min.css"/>
    <style>
        .recuerdos {
            width: 32%;
            display: inline-block;
            margin: 0.5%;
        }
        body{
            background-color: lightblue;
        }

        .btn-success {
            margin-right: 8px;
        }

        img{
            width: 32%;
            margin: 0.3%;
        }

        h3{
            text-align: center;
        }

        #p{
            font-size: 24px;
            text-align: center;
        }

        .jumbotron{
            background-color: white;
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
?>


    <article class="container-fluid">
        <section class="row">
            <div class="jumbotron">
                <h1 class="display-4">Revive los momentos</h1>
                <p class="lead">Sube y disfruta las fotos de otros usuarios.
                </p>
                <p id="mas"></p>
                <p class="lead">
                    <button id="agregar" class="btn btn-primary">Agregar Foto</button>
                </p>
            </div>
            <section class="col-md-12">
            </section>
        </section>
    </article>
    <div class="modal fade" role="dialog" id="confirmacion2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="p">Cerrar sesion</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger pull-right" id="btnNo2" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"> No</i>
                    </button>
                    <button class="btn btn-success pull-right" id="btnSi2">
                        <i class="glyphicon glyphicon-ok"> Confirmar</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
    /** */
        foreach($resultado AS $usuario){
            echo "<tr>
                <td>
                <a data-lightbox=\"recuerdos\" href=\"fotos/$usuario[foto]\"><img src=\"fotos/$usuario[foto]\"></td>
            </tr>";
        }
    ?>

    <div class="modal fade" role="dialog" id="ventana3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                      </button>
                    <h3>Agregar foto</h3>
                </div>
                <div class="modal-body">
                    <section class="row">
                        <section class="col-md-12">
                            <form action="InsertarFoto.php" method="POST" enctype="multipart/form-data">
                            <section class="col-md-12">
                                <div class="form-group">                                    
                                    <input type="file" name="foto" id="foto" class="form-control">
                                </div>
                            </section>
                                <div class="modal-footer">
                                <button class="btn btn-danger pull-right" id="btncancelar3">
                                    <i class="glyphicon glyphicon-remove">Cancelar</i>
                                </button>
                                <button class="btn btn-success pull-right" id="btnaceptar3">
                                    <i class="glyphicon glyphicon-ok">Aceptar</i>
                                </button>
                                 </button>
                                </div>
                                 </form>
                        </section>      
                    </section>                 
                </div>
            </div>
        </div>
    </div>

    

    <article class="conainer-fluid">
        <section class="row">
            <section class="col-md-6">
                <form action="">

                    <p id="resultado"></p>
                </form>
            </section>
            <section class="col-md-6">

            </section>
        </section>
    </article>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
            $("#login a").text("Logout " );
            $("#login").on("click", function() {
                $("#confirmacion2").modal("show");

            });
            $("#btnSi2").on("click",function(){
                location.href='logout.php';

            });
    </script>    
    <script>
     $(function() {
            $("#ventana3").modal({
                show: false,
                backdrop: "static"
            });
            $("#agregar").on("click", function() {
                $("#ventana3").modal("show");
            });
            $("#btncancelar3").on("click", function() {
                $("#ventana3").modal("hide");
            });
            $("#btnaceptar3").on("click", function() {
               
                $("#ventana3").find(".alert").fadeIn().delay(2000).fadeOut();
            });
        });
    </script>
</body>

</html>