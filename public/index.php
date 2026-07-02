<?php
require_once '../class/personas.php';

$persona1 = new persona("Juan", "30", "juan.perez@example.com", "Perez");
$persona2 = new persona("Maria", "25", "maria.gonzalez@example.com", "Gonzalez");

echo $persona1->saludar();
echo $persona2->saludar();






