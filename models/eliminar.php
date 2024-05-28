<?php
include "conexion.php";
$cedula = $_POST['est_cedula'];
$sqlEliminar = "DELETE FROM estudiante WHERE est_cedula='$cedula'";
if($mysqli->query($sqlEliminar)===true){
echo json_encode("Se elimino");
}else{
    echo json_encode("Error".$sqlEliminar.$mysqli->error);
}
?>