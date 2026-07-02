<?php 
class persona 
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;
    public function saludar() {
        return "Mi nombre es : " . $this->nombre . " " . $this->apellido . " y tengo " . $this->edad . " años." . " Mi correo es: " . $this->correo . "<br>";
    }
    
} 