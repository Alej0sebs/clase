<?php
class Automovil{
    public $placa;
    public $marca;
    public $modelo;
    function mostrar(){
        echo "$this->placa, $this->marca, $this->modelo";
        echo "<br>";
    }
}

$c1 = new Automovil();
$c1->placa="TTT-111";
$c1->marca="FORD";
$c1->modelo="F150";
$c1->mostrar();

$c2 = new Automovil();
$c2->placa="TTT-222";
$c2->marca="TOYOTA";
$c2->modelo="Corolla";
$c2->mostrar();
?>