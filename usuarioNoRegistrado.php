<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="JS/jquery-3.3.1.min.js"></script>
    <title>Usuario registrado!</title>
    <style>
    .usuarioR{
        height: 500px;
       
        margin-left:25%;
    }
    .divimagen{
        background-position:50% 50%!important;
    background-size: cover!important;
        background:url(images/noregistrado.png);
        height:220px;
        width:220px;
        margin-left:30%;
    }
    .divtexto{
        font-family:'Arial';
        text-transform:uppercase;
        color:black;
    text-align:center;
    font-size: 50px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 8px;
    }
    .botond{
        color:orange;
        background:black;
        margin-left:35%;
        margin-top:20px;
        border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }
    .botond:hover{
        color:orange;
        background:#535559;
        margin-left:35%;
        border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }
    </style>
    <?php 
include "header.php";
?>
</head>
<body>
    <div class="usuarioR col-md-6" >
        <div class="divtexto">OCURRIO UN ERROR DURANTE EL REGISTRO, VERIFICA Y VUELVE A INTENTARLO</div>
        <div class="divimagen" ></div>
        <button class="botond"><a href="index.php">REGRESAR</a></button>
    </div>
</body>
</html>
