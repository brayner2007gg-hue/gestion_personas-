<?php
require_once '../class/personas.php';
require_once '../class/productos.php';

$persona1 = new persona("Juan", "30", "juan.perez@example.com", "Perez");
$persona2 = new persona("Maria", "25", "maria.gonzalez@example.com", "Gonzalez");

echo $persona1->saludar();
echo $persona2->saludar();

$producto1 = new Productos("Laptop", 1200, "Laptop de alta gama con procesador Intel i7.");
$producto2 = new Productos("Smartphone", 800, "Smartphone con pantalla AMOLED y cámara de 48MP.");

echo $producto1->mostrarInformacion();
echo $producto2->mostrarInformacion();
