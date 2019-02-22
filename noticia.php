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
    <title>Mantente Informado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        h1{          
            font-size: 32px;            
            text-align: center;
            color: black;
            
        }
        body{
          background: white;
        }

        .jumbotron img{
            width: 100px;
            position: absolute;
            right: 48%;
        }
        h2{
            font-family: bold;
            font-size: 72px;
            text-align: center;
            color: white;
        }


        .jumbotron{
            background-color: orange;
        }
        h3{
            font-family: bold;
            font-size: 24px;
            text-align: center;
            color: white;
        }
        p{
            text-align:center;
        }

        #p{
            font-size: 24px;
        }

        img{
            width: 60%;
            margin-left: 20%;           
            
        }
  


    </style>

</head>

<body>
    
    <?php
    include "header.php";
    ?>
      <div class="jumbotron">
     
     <br><br><br><br>
    <h2>NOTICIAS</h2>
    <h3></h3>  
    <p class="lead">
        <button id="noti" class="btn btn-danger">Agregar Noticia</button>
    </p>
  </div>
 <form action="not.php" method="POST" enctype="multipart/form-data">
                                          <div class="modal fade" role="dialog" id="ventan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Agregar noticia</h4>
                </div>
                <div class="modal-body">
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
                                        <div class="form-group">
                        <label for="noticia">Noticia</label>
                        <textarea name="noticia" id="noticia" class="form-control"></textarea> 
                    </div>
                     <div class="form-group">
                    <label for="foto">Insertar fotos</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                    </form>
                </div>
                <div class="modal-footer">
                    <p id="advertencia"></p>
                    <button class="btn btn-danger pull-right" id="btncancela">
                        <i class="glyphicon glyphicon-remove"> Cancelar</i>
                    </button>
                    <button class="btn btn-success pull-right" id="btnacepta">
                        <i class="glyphicon glyphicon-ok"> Aceptar</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
 

        <table>
        <?php
                include "conexion.php";

        $consulta ="SELECT * FROM noticias";
        $registros =$db->query($consulta);

        $resultado = array();
        while($fila = $registros->fetch_assoc()){
            $resultado[] = $fila;
        }

        //var_dump($resultado);
         foreach($resultado AS $usuario){
                    echo "<tr>                  
                            
                            <td class=\"texto\">                            
                            <h1>$usuario[noticia]</h1>                            
                            <img src=\"noticias/$usuario[foto]\">
                            
                            </td>
                            
                        </tr>";
                }
    ?>
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
    </table>
        <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(function() {
            $("#login a").text("Logout");
            $("#noticias").addClass("active");

            $("#ventan").modal({
                show: false,
                backdrop: "static"
            });
            $("#noti").on("click", function() {
                $("#ventan").modal("show");
            });
            $("#btncancela").on("click", function() {
                $("#ventan").modal("hide");
            });

            $("#login a").text("Logout " );
            $("#login").on("click", function() {
                $("#confirmacion2").modal("show");

            });
            $("#btnSi2").on("click",function(){
                location.href='logout.php';

            });



        });
    </script>
    <script src="scrip.js"></script>
</body>
</html>