<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salon</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
    
        .img-container {
            background-size: cover;
            background-position: 50% 50%;
            height: 300px;
        }
        
        #carrucel {
            height: 300px;
            overflow: hidden;
        }
        .unipolilogo{
            margin-left:78px;
        }
        .divinformacion{
            width:100%;
            height:100px;
            font-style:Arial;
            text-align:center;
            border-color:black;
            border-style:solid;
            border-width:1px;
            margin-top:40px;
            transition: transform .4s;           
            border-left:0;
            border-right:0;
            border-top:0;
            
        }
        .divinformacion:hover{
            transform: scale(1.5);
            transition:2;
          
        }
        .divip{
            font-size:30px;
            font-family:'Agency FB';
        }
        .imagenfondo1{
            background:url(images/fotosalon1.jpg);
            width:100%;
            height:100%;
            background-position:50% 50%!important;
            background-size: cover!important;
        }
div.informacionSalon{
    margin-top:150px;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 10px;
}
.divider{
    height: 1px;
  background-color: black;
  margin:30px 60px 30px 60px;
  
}
.parrafo1{
    font-weight: bold;
    margin:0 50px 0 50px;
}
.parrafo1 strong{
    letter-spacing:5px;
    color:orange;
    font-size:18px;
}
.imagenfondo2{
    background:url(images/jardinbg.jpg);
    width:100%;
    height:500px;
    background-position:50% 50%!important;
    background-size: cover!important;
}
div.informacionSalon2{
    color:white;
    margin-top:50px;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 10px;
    
}
.info2{
    background:url(images/opacidadnegro.png);
   width:500px;
   height:380px;
    margin:80px 0 0 50px;
    transition: transform 1s;  
}
div.info2:hover{
            transform: scale(1.2);
            transition:2;
          
        }
        .videoyt1{
            margin:50px 0 30px 50px;
        }
        .maps1{
           width:100%;
        }
        .estiloVideo1{
            background:#f4425c;
            height:80px;
            width:100%;
            color:white;
            letter-spacing:5px;
            text-transform:uppercase;
            text-align:center;
            font-size: 30px;
    font-weight: bold;
    font-family:'Tahoma';
    padding:15px;
        }
       footer{

           height:100px;
       }
       .divFooter{
           background:url(images/unipolilogo.png);
           width:100%;
           height:100px;
           background-position:50% 50%!important;
            background-size: cover!important;
       }
       .insta{
           background:url(images/insta.png);
           background-position:50% 50%!important;
    background-size: cover!important;
    height:50px;
    width:50px;
       }
    </style>
</head>


<body>
<?php

include "header.php"
?>
    

   


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
        
            
            <div class="item active">
                <div class="img-container" style="background-image: url(img/salon1.jpg)"></div>
                <div class="carousel-caption">
                    <h3>¡Felicidades!</h3>
                    <p>Generacion 2018</p>
                </div>
            </div>

            <div class="item">
                <div class="img-container" style="background-image: url(img/salon2.jpg)"></div>
                <div class="carousel-caption">
                    <h3>La mejor opcion para tu evento</h3>
                    <p>Gracias por elegirnos.</p>
                </div>
            </div>

            <div class="item">
                <div class="img-container" style="background-image: url(img/graduados3.jpg)"></div>
                <div class="carousel-caption">
                    <h3>Reserva ya tus lugares</h3>
                    <p>HOE</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
     <!--Contenido 1 -->
    <div class="row" >
       <div class="image-container col-md-6" style="height:500px;">
       <div class="imagenfondo1"></div>
       </div>

       <div class="col-md-6" style="text-align: center;">
       <div class="informacionSalon" >Quienes somos?</div>
       <div class="divider"></div>
       <div class="?">
            <p class="parrafo1" style="">Somos un salon enfocado a todo tipo de eventos donde 
            la armonía entre naturaleza, arquitectura y funcionalidad se fusionan para brindar
             un ambiente exclusivo, único y original. 
             </p>
       </div>
       </div>
       
    </div>
    <!--Contenido 2 -->
    <div class="imagenfondo2">
    <div class="col-md-6 info2" style="text-align: center;">
       <div class="informacionSalon2" >Precios</div>
       <div class="divider" style="background:white;"></div>
       <div class="?">
            <p class="parrafo1" style="color:white;"><strong>ALUMNO</strong><br>
            1500$<br> Incluye 4 invitados y 5 sillas a reservar
            <br>
            
             </p>
       </div>
       </div>
       <div col-md-6>
       <iframe class="videoyt1" width="729" height="410" src="https://www.youtube.com/embed/E8gmARGvPlI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
    </div>
    
    <!--Contenido 3 -->
    <div class="estiloVideo1">MAPA</div>
    <iframe  class="maps1"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.2491759348686!2d-104.55607678560888!3d24.022276784456064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb0afe49269e1%3A0x43644f8b73e439ad!2sUniversidad+Politecnica+de+Durango!5e0!3m2!1ses!2smx!4v1543368074974" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
<!--Contenido 3 -->
<footer>
<strong>Raul Flores Ramirez 4B</strong>
<div class="insta"><strong></strong></div>
<div class="divFooter"></div>
</footer>


<!----------------------------------------LOGIN-------------------------------------->
    <div class="modal fade" role="dialog" id="ventana">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3>Login</h3>
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
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuarioLog" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" id="contrasenaLog" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <p id="advertencia"></p>
                    <button class="btn btn-danger pull-right" id="btncancelar">
                        <i class="glyphicon glyphicon-remove"> Cancelar</i>
                    </button>
                    <button class="btn btn-success pull-right" id="btnaceptar">
                        <i class="glyphicon glyphicon-ok"> Aceptar</i>
                    </button>
                    <p id="mensaje" class="text-danger"></p>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------REGISTRO-------------------------------------->
    <div class="modal fade" role="dialog" id="ventana2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                      </button>
                    <h3>Registro</h3>
                </div>
                <div class="modal-body">
                    <section class="row">
                        <section class="col-md-12">
                            <form action="insertar.php" method="POST" enctype="multipart/form-data">
                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span>
                                        <input type="text" name="usuario" id="usuario" class="form-control" />
                                    </div>
                                </div>
                            </section>
                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="correo">Correo Electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </span>
                                        <input type="email" name="email" id="correo" class="form-control" />
                                    </div>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="contraseña">Contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock"></i>
                                                </span>
                                        <input type="password" name="contrasena" id="contraseña" class="form-control" />
                                    </div>
                                </div>
                                </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                        <select name="rol">
                                        <option value="admin">Administrador</option>
                                        <option value="user">Usuario Normal</option>
                                        </select>
                                    </div> 
                                    </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control">
                                </div>
                                </section>
                                <div class="modal-footer">
                                    <button class="btn btn-success pull-right" id="btnaceptar2">
                                            <i class="glyphicon glyphicon-ok">Aceptar</i>
                                        </button>
                                 </button>
                                </div>
                                 </form>
                             </section>                          

                
                </div>
            </div>
        </div>
    </div>
    


  <script src="JS/jquery-3.3.1.min.js"></script>
  <script src="JS/bootstrap.js"></script>
  <script src="JS/lightbox.min.js"></script>  

    <script>
        $(function() {
            
            $("#inicio").addClass("active");

            $("#ventana").modal({
                show: false,
                backdrop: "static"
            });
            $("#login").on("click", function() {
                $("#ventana").modal("show");
                
            });
            $("#btncancelar").on("click", function() {
                $("#ventana").modal("hide");
            });
            $("#btnaceptar").on("click", function(evento) {
                evento.preventDefault();
                var v_usuarioLog = $("#usuarioLog").val();
                var v_contrasenaLog = $("#contrasenaLog").val();
                
                $.ajax({
                    url:"login-procesar.php",
                    type:"POST",
                    data:{
                        usuario: v_usuarioLog,
                        contrasena: v_contrasenaLog
                    }
                    }).done(function(resultado){
                    if(resultado == 1){
                    $("#ventana").modal("hide");
                    $("#login a").text("Bienvenido " );
                    $("#login").off("click");
                    }
                    else{
                        $("#mensaje").text("Usuario o contraseña incorrectos.");
                    }
                });
            });
        });
        
    </script>
    <script>
    
        $(function() {
            $("#ventana2").modal({
                
                show: false,
                backdrop: "static"
            });
            $("#registro").on("click", function() {
                $("#ventana2").modal("show");
                
            });
            $("#btncancelar2").on("click", function() {
                $("#ventana2").modal("hide");
            });
            $("#btnaceptar2").on("click", function() {
               
                $("#ventana2").find(".alert").fadeIn().delay(2000).fadeOut();
            });
        });

    </script>
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
    <script>
   
    $(function() {
        if($xd ==1)
           window.alert($usuario);
        
        });
        if(3>1)
           window.alert("AAAAAAA");
    
    </script>
</body>

</html>