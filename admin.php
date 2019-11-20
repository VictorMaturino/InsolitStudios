<?php
SESSION_start();
SESSION_destroy();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://apis.google.com/js/platform.js" async defer></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "google-signin-client_id" content = "850559844831-mejehulopriuotffmc5ji9rce5lqfpra.apps.googleusercontent.com">
    <title>Login</title>

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
                margin-top: 50%;
                font-family: "monserrat";
            }
        }


        .login-main-text {
            margin-top: 10%;
            padding: 80px;
            color: black;
            font-size: 190%;
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
            font-size: 20px;
            font-family: "monserrat";
        }

        a {
            font-size: 17px;
        }
    </style>

    <script>
        $(function () {
            $boton = $("form button");

            $boton.on("click", function (evento) {
                evento.preventDefault();
                var v_usuario = $("#usuario").val();
                var v_contrasena = $("#contrasena").val();

                $.ajax({
                        url: "login-procesar.php",
                        type: "POST",
                        data: {
                            usuario: v_usuario,
                            contrasena: v_contrasena
                        }
                    })
                    .done(function (res) {
                        if (res == 1) {
                            document.location.href = "adminP.php";
                        } else {
                            $("#mensaje").text("Usuario o contraseña Incorrectos!")
                                .addClass("text-danger")
                                .fadeIn()
                                .delay(3000)
                                .fadeOut();
                        }
                    });

            });
        });

        // function onSignIn(googleUser) {
        //     var profile = googleUser.getBasicProfile();
        //     console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        //     console.log('Name: ' + profile.getName());
        //     console.log('Image URL: ' + profile.getImageUrl());
        //     console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        //     }
    </script>
</head>

<body>
    <div class="sidenav">
        <div class="login-main-text">
            <!-- <a href="index.php">
                <img src="img/return.png" alt="" width="90px" height="90px">
            </a>
            REGRESAR.. -->
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <h1>Iniciar Sesion</h1>
                <h1>Administrador</h1>

                <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div>

                <a href="#" onclick="signOut();">Sign out</a>
                <script>
                function signOut() {
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut().then(function () {
                    console.log('User signed out.');
                    });
                }
                </script> -->

                <br>
                <form action="login-procesar.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Username"
                            required onkeypress="return check(event)">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="contrasena" name="contrasena" class="form-control"
                            placeholder="Password" required>
                    </div>
                    <button class="btn btn-success" class="submit" id="submit">Iniciar Sesion</button>
                    <br>
                    <p id="mensaje" class="text-danger"></p>
                </form>
                <a href="index.php">No soy Administrador Clic Aqui!</a>
            </div>
        </div>
    </div>
</body>

</html>

<script src="JS/jquery-3.3.1.min.js"></script>
<script src="JS/bootstrap.js"></script>
<script src="JS/lightbox.min.js"></script>

<script>
    function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>