<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "cuarto";
$conn = mysqli_connect($serverName,$userName,$password,$dataBase);
$mysqli=new mysqli($serverName,$userName,$password,$dataBase);
if(!$mysqli){
    die ("Error de conexion vales vrg inutil".mysqli_connect_error());
}
?>