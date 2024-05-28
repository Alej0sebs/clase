<?php
$palabra = "Hola";
echo $palabra;
echo "<br>";
echo gettype($palabra);
echo "<br>";

$numero = 69;
echo $numero;
echo "<br>";
echo gettype($numero);
echo "<br>";

$colores = array("rojo", "amarillo");
echo $colores[0];
echo "<br>";
echo gettype($colores);
echo "<br>";

$verduras = array("verdura1"=>"lechuga","verdura2"=>"col");
echo $verduras["verdura1"];
echo "<br>";

$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo $frutas->fruta1;
echo "<br>";
echo gettype($frutas);
echo "<br>";

function saludo(){
    echo "Hola";
}

saludo();
echo "<br>";
function despedida($mensaje){
   echo $mensaje;
}

despedida("Adios");
echo "<br>";
function retorno($retornar){
    return $retornar;

}

echo retorno("valor");
echo "<br>";

for($i=1; $i<=10; $i++){
     echo $i;
}
echo "<br>";
$a=8;
$b=5;
if($a>$b){
echo "el mayor es a";
}else {
    echo "el mayor es b";
}
?>