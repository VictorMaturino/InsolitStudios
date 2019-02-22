<?php
$db = new mysqli ("localhost","root","admin123","graduacion");
if($db->connect_errno){
    echo "no se puede conectar a la base de datos".$db->connect_errno;
}
?>