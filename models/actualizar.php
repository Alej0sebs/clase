<?php
include "conexion.php";
$cedula = $_POST['est_cedula'];
$nombre = $_POST['est_nombre'];
$apellido = $_POST['est_apellido'];
$direccion = $_POST['est_direccion'];
$telefono = $_POST['est_telefono'];
$sqlUPDATE = "UPDATE estudiante SET est_nombre='$nombre', est_apellido='$apellido', est_direccion='$direccion', est_telefono='$telefono' WHERE est_cedula='$cedula'";

if($mysqli->query($sqlUPDATE)==true){
    echo json_encode("Se actualizo");
    }else{
        echo json_encode("Error".$sqlINSERT.$mysqli->error);
    }
?>