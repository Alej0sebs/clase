<?php
include "conexion.php";
$cedula = $_POST['est_cedula'];
$nombre = $_POST['est_nombre'];
$apellido = $_POST['est_apellido'];
$direccion = $_POST['est_direccion'];
$telefono = $_POST['est_telefono'];
$sqlINSERT= "INSERT INTO estudiante (est_cedula, est_nombre, est_apellido, est_direccion, est_telefono) values ('$cedula','$nombre','$apellido','$direccion','$telefono')";
if($mysqli->query($sqlINSERT)==true){
echo json_encode("Se guardo");
}else{
    echo json_encode("Error".$sqlINSERT.$mysqli->error);
}
?>