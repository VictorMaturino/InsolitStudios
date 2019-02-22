<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .carousel{       
            margin: 0 auto;            
        }

        .carousel img{
            margin: 0 auto;
            width: 1500px;
        }

        h1{
            font-size: 72px;
        }

        
    </style>
</head>
<body>
<?php 
include "header.php";
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imagenes/noticia1.jpg" alt="Imagen1">
      <div class="carousel-caption">
        <h1>Este fin de semana se celebrara la graduacion de la Universidad de Harvard</h1>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/noticia2.jpg" alt="Imagen2">
      <div class="carousel-caption">
        <h1>Proximo 15 de diciembre, dia importante para stanford ya que estudiantes celebran su graduacion </h1>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/noticia3.jpg" alt="Imagen3">
      <div class="carousel-caption">
        <h1>El dia de hoy se celebrara la gradiacion de CECyTE</h1>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   

    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/bootstrap.js"></script>

</body>
</html>