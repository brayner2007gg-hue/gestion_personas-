<?php 
class Productos
{
    public $nombre;
    public $precio;
    public $descripcion;

    public function __construct($nombre, $precio, $descripcion)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;  
    }

    public function mostrarInformacion()
    {
        return "Producto: " . $this->nombre . "<br>Precio: $" . $this->precio . "<br>Descripción: " . $this->descripcion . "<br>";
    }
}