<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="JS/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            $boton= $("form button");

            $boton.on("click",function(evento){
                evento.preventDefault();
                var v_usuario = $("#usuario").val();
                var v_contrasena = $("#contrasena").val();

                $.ajax({
                    url:"login-procesar.php",
                    type: "POST",
                    data:{
                        usuario: v_usuario,
                        contrasena: v_contrasena
                    }
                })
                .done(function(resultado){
                    id(datos==1){
                        document.location.href = "vip.php";
                    }
                    else{
                         $("#mensaje").text(resultado);
                    }            
                   
                });
            });
        });
    </script>
</head>
<body>
<article class="container-fluid">
    <section class="row">
        <section class="col-md-12">
        <form action="login-procesar.php" method="POST">        
        <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control">
        </div>
        <div class="form-group">
        <label for="contrasena">Usuario</label>
        <input type="password" id="contrasena" name="contrasena" class="form-control">
        </div>
        <button class="btn btn-primary">Ingresar</button>
        <p id="mensaje" class="text-danger"></p>
        </form>
        </section>
    </section>
</article>    
</body>
</html>