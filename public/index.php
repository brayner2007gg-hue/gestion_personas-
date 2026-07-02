<?php
require_once 'class/personas.php';

$persona1 = new persona();

$persona1->nombre = "Juan";

echo $persona1->saludar();

$edad1 = new edad();
$edad1->edad = 25;
echo $edad1->getEdad();

