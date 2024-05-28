<?php

$automovil=(object)["placa"=> "TTT-111","marca"=>" FORD", "modelo"=>"F150"];
$automovil1=(object)["placa"=> "TTT-222","marca"=>" TOYOTA", "modelo"=>"Corolla"];

function mostrar($auto){
   echo $auto->placa;
}
mostrar($automovil);  

?>