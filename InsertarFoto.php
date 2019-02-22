<?php
include "conexion.php";

$foto=$_FILES["foto"];

$fotoNombre = $foto["name"];
$fotoRuta = $foto["tmp_name"];


$exo = explode(".", $fotoNombre);

$extension = end($exo);
$nombreFinal = uniqid().'.'.$extension;

move_uploaded_file($fotoRuta,"fotos/".$nombreFinal);

$consulta="INSERT into fotos(foto)
    values ('$nombreFinal')";

    $resultado=$db->query($consulta);
    header("Location: fotos.php");
?>