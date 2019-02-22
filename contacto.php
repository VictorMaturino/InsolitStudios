<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantente en contacto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        #loader{
            width: 50px;
            display: none;
        }
        .error{
            border: 1px solid red;
            
        }
    </style>
</head>

<body>
<?php
    include "header.php";
    ?>
    <article class="conainer-fluid">
        <section class="row">
            <section class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-success pull-right" id="enviar">
                        <i class = "glyphicon glyphicon-send"> Enviar</i> 
                    </button>
                        <img src="img/loading.gif" alt="loader" id="loader" class="pull-right">

                        <p id="resultado"></p>
                </form>
            </section>
            <section class="col-md-6">

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

    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script>
        $(function(){
            $("#enviar").on("click",function(evento){
                evento.preventDefault();
                var $boton = $(this);
                $boton.prop("disabled",true);
                $("#loader").show();
                var enviar = validar();
                setTimeout(function(){
                    if(enviar){
                    $("#resultado").removeClass("text-danger").addClass("text-success").text("¡El correo se envió correctamente!");
                } else{
                    $("#resultado").removeClass("text-success").addClass("text-danger").text("¡Completa todos los campos!");
                }
                $("#loader").hide();
                $boton.prop("disabled",false);
                },800);
                

            });
        });

        function validar(){
            
            var $campos = $("form input,form textarea");
            var valido = true;
            $campos.each(function(){
                var $campo = $(this);
                if($campo.val().length == 0){
                    $campo.addClass("error");
                    valido = false;
                }
                else{
                    $campo.removeClass("error");
                }
            });
            return valido;
        }
    </script>
     <script>
        $(function() {
            $("#login a").text("");
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

            $("#login a").text(" " );
            $("#login").on("click", function() {
                $("#confirmacion2").modal("show");

            });
            $("#btnSi2").on("click",function(){
                location.href='logout.php';

            });



        });
    </script>
</body>
</html>