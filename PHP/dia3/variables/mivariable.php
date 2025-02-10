<?php

$nombre = "Juan";
$apellido = "García";
$lugar = "Gijón";
$nacimiento = 1991;
$fecha=2025;

$texto = "Tu nombre es ".$nombre." ".$apellido.", eres de ".$lugar." y tienes ".($fecha-$nacimiento)." años";

echo $texto;
//Tu nombre es Juan García, eres de Gijón y tienes 34 años


$datos =[
    "nombre" => "Juan",
    "apellido" => "García",
    "lugar" => "Gijón",
    "nacim" => 1991
];

$texto="Eres ".$datos['nombre'];
echo $texto;

$students = [
["nombre" => "Juan",
"apellido" => "García",
"lugar" => "Gijón",
"nacim" => "1991"]

];

?>