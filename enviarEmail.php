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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mails</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

  <style>
    h1 {
      text-align: center;
      font-size: 600%;
      font-family: "monserrat";
      color: gray;
    }

    form {
      margin-left: 5%;
      margin-right: 5%;
    }

    .return {
      margin-left: 2%;
    }
  </style>

</head>

<body>

  <h1>ENVIO DE EMAILS</h1>


  <form action="#" method="POST" enctype="multipart/form-data">
    <label for="summernote">Descripción del Mail:</label>
    <div id="summernote">
      <p>Hello Summernote</p>
    </div>

    <button class="btn btn-success">Enviar Mail</button>
  </form>

    <br><br>
  <a href="adminP.php">
    <img src="img/return.png" width="5%" class="return">
  </a>

  <script>
    $(document).ready(function () {
      $('#summernote').summernote();
    });
  </script>
</body>

</html>