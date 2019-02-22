<?php
include "conexion.php";


$noticia=$_POST["noticia"];
$foto=$_FILES["foto"];

$noticiaNombre = $foto["name"];
$noticiaRuta = $foto["tmp_name"];


$exo = explode(".", $noticiaNombre);

$extension = end($exo);
$nombreFinal = uniqid().'.'.$extension;

move_uploaded_file($noticiaRuta,"noticias/".$nombreFinal);

$consulta="INSERT into noticias(noticia, foto)
    values ('$noticia','$nombreFinal')";

    $resultado=$db->query($consulta);
    header("Location: noticia.php");
?>