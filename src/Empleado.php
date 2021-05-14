<?php

namespace ExampleToMaximo;

require __DIR__ . "/../vendor/autoload.php";


use ExampleToMaximo\Persona;

class Empleado extends Persona
{
    public string $nombre;
    public string $planeta;

    public function __construct($nombre, $planeta)
    {
        $this->nombre = $nombre;
        $this->planeta = $planeta;
    }
}

$empleado = new Empleado("Maximo", "Marte");
$empleado->darUnGrito("Soy un marcino!!!");
$empleado->emitirSonido("spspspsp!!!");
