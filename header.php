<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>
        <style>
            #logo{
                width:30px;
                height:30px;
                display: inline-block;
              
            }
            .navbar-brand{
                font-family: 'Arial';
            }
            .navbar{
                background-color: black ;
                border-radius:0%;
                font-size: 18px;
               
            }
            .nav.navbar-nav li a {
    color: orange;
}
.nav.navbar-nav.navbar-right li a {
    color: orange;
}
            

        </style>
</head>
</head>
<body>
        <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#barra" aria-expanded="false">
                         <span class="sr-only">Cambiar</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><!-- <img id="logo" src="" alt="logo"  >-->OVO</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="barra">
                            <ul class="nav nav-pills navbar-nav navbar-left">
                                    <li role="presentation" class="">
                                        <a href=index.php>Inicio</a>
                                    </li>   
                            
                                <li role="presentation">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        Evento <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="fotos.php">Fotos</a></li>
                                        <li><a href="salon.php">Salón</a></li>
                                    </ul>
                                </a>
                                </li>
                                <li role="presentation">
                                    <a href="noticia.php">Noticias</a>
                                </li>
                                <li role="presentation">
                                    <a href="contacto.php">Contacto</a>
                                </li>
                            </ul>
        
                            <ul class="nav navbar-nav navbar-right">
                                <li role="presentation" id="login" >
                                <a href="#" id=login>Ingresar</a></li>
                            <li role="presentation" id="registro">
                                <a href="#">Registro</a>
                            </li>
        
                            </ul>
                    </div>
                </div>
                </nav>


    
    
    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/lightbox.min.js"></script>
    <script>
        $(function() {
            $("#ventana").modal({
                show: false,
                backdrop: "static"
            });
            $("#login").on("click", function() {
                $("#ventana").modal("show");
            });            

        });
        
        $(function() {
            $("#ventana2").modal({
                show: false,
                backdrop: "static"
            });
            $("#registro").on("click", function() {
                $("#ventana2").modal("show");
            });

        });
    </script>
        
</body>
</html>