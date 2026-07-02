<?php
require_once '../class/personas.php';

$persona1 = new persona();
$persona1->nombre = "Juan";
$persona1->apellido = "Perez";
$persona1->edad = 30;
$persona1->correo = "juan.perez@example.com";


$persona2 = new persona();
$persona2->nombre = "Maria";
$persona2->apellido = "Gonzalez";
$persona2->edad = 25;
$persona2->correo = "maria.gonzalez@example.com"; 

echo $persona1->saludar();
echo $persona2->saludar();



