<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: admin.php');
     die() ;

    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Registro</title>
<!------ Include the above in your HEAD tag ---------->

<style>
    body {
        font-family: "Lato", sans-serif;
    }



    .main-head {
        height: 150px;
        background: #FFF;

    }

    .sidenav {
        height: 100%;
        background-image: url("img/fondo4.png");
        background-size: 100% 100%;
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
    }

    @media screen and (max-width: 450px) {
        .login-form {
            margin-top: 10%;
        }

    }

    @media screen and (min-width: 768px) {
        .main {
            margin-left: 60%;
        }

        .sidenav {
            width: 58%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form {
            margin-top: 20%;
            font-family: "monserrat";
        }
    }


    .login-main-text {
        margin-top: 45%;
        padding: 60px;
        color: black;
        font-size: 180%;
    }

    .login-main-text h2 {
        font-weight: 300;
        font-size: 400%;
        color: black;
    }

    .btn-black {
        background-color: #000 !important;
        color: #fff;
    }

    label {
        font-size: 18px;
    }

    h6 {
        font-size: 13px;
    }

    h1 {
        font-size: 50px;
    }
</style>


<div class="sidenav">
    <div class="login-main-text">
        <a href="adminP.php">
            <img src="img/return.png" alt="" width="90px" height="90px">
        </a>
        REGRESAR..
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <h1>Crear Cuenta</h1>
            <form action="insertar.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="contrasena" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Confirmar Password</label>
                    <input type="password" name="contrasena2" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <button class="btn btn-success">Registrar</button>
            </form>
        </div>
    </div>
</div>

<script src="JS/jquery-3.3.1.min.js"></script>
<script src="JS/bootstrap.js"></script>
<script src="JS/lightbox.min.js"></script>

<script>
</script>