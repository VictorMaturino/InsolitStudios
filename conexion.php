<?php
$db = new mysqli ("localhost","root","","gamedeep");
if($db->connect_errno){
    echo "No se puede conectar a la base de datos".$db->connect_errno;
}
?>