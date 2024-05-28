<?php
include "conexion.php";
$sqlSELECT = "SELECT * FROM estudiante";
$respuesta = $conn->query($sqlSELECT);

$resultado = array();

if ($respuesta) {
    while ($fila = $respuesta->fetch_assoc()) {
        $resultado[] = $fila;
    }
    echo json_encode($resultado);
} else {
    // Manejo de error, puedes imprimir un mensaje de error o realizar otra acción.
    echo json_encode(array('error' => 'Error en la consulta: ' . $conn->error));
}
?>