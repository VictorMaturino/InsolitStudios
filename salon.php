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
    <title>Salon</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/salon.css">
    
</head>
<style>
    
  

.imgescenario{
    padding-right:100px;
    
}
.mesaEstilo{
width:33.33%;
height:150px;

text-align:center;

}
.mesaEstilo strong{
    color:BLACK;
    position: relative;
top: 25px;
}
.mesa{
    margin:0 0 0 40%;
}
.lineas{
    width:100%;
    
    height:100px;
}
.escenario{
    background:url(images/escenario.png);
    background-position:50% 50%!important;
            background-size: cover!important;
            height:150px;
            width:150px;
            
            margin-left:33%;
            margin-top:-12%;
}
.escenario strong{
    color:BLACK;
    position: relative;
top: 150px;

}
.pistaEstilo{
    height:400px;
    background:black;
    width:250px;
    margin-left:20%;
}
</style>

<body>
<?php
include "header.php"
?>

    

    

    </div>
    <div class="modal fade" role="dialog" id="confirmacion">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    <h4>Confirmar</h4>
                </div>
                <div class="modal-body">
                   <p>Desea reservar este lugar?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="btnSi">Si</button>
                    <button class="btn btn-danger" id="btnNo" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>

    </div>

    <article class="container-fluid">
        <section class="row">
            <section class="col-md-12">
             <div class="salon">
             </div>
            </section>
        </section>

        
    </article>
        

        <div class="lineas">
        <div class="col-md-4 mesaEstilo" id="">
            <div class="mesa" id="mesa1" data-mesa="1">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                <strong> MESA 1</strong>
            </div>

 <div class="col-md-4 mesaEstilo" id="">
                <div class="escenario">
                <strong> ESCENARIO</strong>
                </div>
            </div>

             <div class="col-md-4 mesaEstilo" id="">
            <div class="mesa" id="mesa2" data-mesa="2">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                 <strong> MESA 2</strong>
            </div>
        </div>

        <!-- -->
        <div class="lineas">
        <div class="col-md-4 mesaEstilo" id="">
            <div class="mesa" id="mesa3" data-mesa="3">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                <strong> MESA 3</strong>
            </div>

            <div class="lineas">
        <div class="col-md-4 mesaEstilo" id="">
                <div class="pistaEstilo"></div>
                <strong> Pista</strong>
            </div>

 

             <div class="col-md-4 mesaEstilo" id="">
            <div class="mesa" id="mesa4" data-mesa="4">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                 <strong> MESA 4</strong>
            </div>
        </div>

        <!-- -->
        <div class="lineas">
        <div class="col-md-4 mesaEstilo" id="">
            <div class="mesa" id="mesa5" data-mesa="5">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                <strong> MESA 5</strong>
            </div>

<div class="col-md-4 mesaEstilo" id="">
            </div>
        

             <div class="col-md-4 mesaEstilo" id="">
            <div class="mesa" id="mesa6" data-mesa="6">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                 <strong> MESA 6</strong>
            </div>
        </div>

<!-- -->
<div class="lineas">
        <div class="col-md-4 mesaEstilo" id="" >
            <div class="mesa" id="mesa7" data-mesa="7">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                <strong> MESA 7</strong>
            </div>

<div class="col-md-4 mesaEstilo" id="">
            </div>
        

             <div class="col-md-4 mesaEstilo" id="" >
            <div class="mesa" id="mesa8" data-mesa="8">
                     <span class="silla silla1" 
                     data-silla="1"></span>
                     <span class="silla silla2" 
                     data-silla="2"></span>
                     <span class="silla silla3"
                     data-silla="3"></span>
                     <span class="silla silla4"
                     data-silla="4"></span>
                     <span class="silla silla5"
                     data-silla="5"></span>
                     <span class="silla silla6"
                     data-silla="6"></span>
                     <span class="silla silla7"
                     data-silla="7"></span>
                     <span class="silla silla8"
                     data-silla="8"></span>
                     <span class="silla silla9"
                     data-silla="9"></span>
                     <span class="silla silla10"
                     data-silla="10"></span>
                 </div>
                 <strong> MESA 8</strong>
            </div>
        </div>



<div class="modal fade" role="dialog" id="confirmacion2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                    <p>Cerrar Sesion</p>
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <script>
        var globalMesa=0;
        var globalSilla=0;
        function colorear(){
            $.ajax({
                url: "obtenerReservaciones.php",
                type: "GET",
                dataType:"json"

            })
            .done(function(reservaciones){
                console.log(reservaciones);
                $.each(reservaciones,function(indice,reservacion){
                    var silla=reservacion.silla;
                    var mesa= reservacion.mesa;
                    var usuario= reservacion.usuario;


               var $sillaOcupada=$("#mesa"+mesa).find("[data-silla="+ silla +"]")
               $sillaOcupada.css("background-color","blue");
               $sillaOcupada.attr({
                   "data-toggle":"tooltip",
                   "data-placement":"right",
                   "title":"Este lugar lo tiene "+ usuario
               });
               $sillaOcupada.tooltip();
                });

            });
        }
        $(function() {
            colorear();

            $("#evento").addClass("active");
            $('[data-toggle="tooltip"]').tooltip();
            $("#ventana").modal({
                show:false,
                backdrop:"static"
            });
            $("#confirmacion").modal({
                show: false,
                backdrop: "static"
            });    
            $(".silla").on("click",function(){
                globalMesa = $(this).parents(".mesa").attr("data-mesa");
                globalSilla=$(this).attr("data-silla");
                $("#confirmacion").modal("show");

            });
            $("#btnSi").on("click",function(){
                $.ajax({
                    url:"reservar.php", 
                    type:"POST",
                    data:{
                        mesa: globalMesa,
                        silla: globalSilla
                    }
                    
                })
                .done(function(){
                    $("#confirmacion").modal("hide");
                    colorear();
                });
            });
           

            $("#login").on("click", function() {
                $("#ventana").modal("show");
            });

            $("#btnCancelar").on("click", function() {
                $("#ventana").modal("hide");
            });

            $("#btnAceptar").on("click", function() {
                

                var cajaUsuario = $("#usuario").val();
                var cajaPassword = $("#password").val();

                if (usuario == cajaUsuario && contrasena == cajaPassword) {
                    $("#ventana").modal("hide");
                    $("#login a").text("Bienvenido " + usuario);
                    $("#login").off("click");
                } else {
                    $("#advertencia")
                        .text("El usuario o contraseña no son correctos")
                        .fadeIn()
                        .delay(5000)
                        .fadeOut();
                }


            });

        });
    </script>
<script>
 $("#login a").text("Logout " );
            $("#login").on("click", function() {
                $("#confirmacion2").modal("show");

            });
            $("#btnSi2").on("click",function(){
                location.href='logout.php';

            });

</script>

</body>

</html>