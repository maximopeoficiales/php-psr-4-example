<?php

namespace ExampleToMaximo;

use ExampleToMaximo\Extraterrestre\Alien;
use ExampleToMaximo\Humano\Sentimiento;

class Persona  extends Alien implements Sentimiento
{
    public string $nombre;
    public string $planeta;

    public function __construct($nombre, $planeta)
    {
        $this->nombre = $nombre;
        $this->planeta = $planeta;
    }

    public function darUnGrito(string $grito = null): void
    {
        echo "Mi nombre es: {$this->nombre}, soy del Planeta: {$this->planeta} Mi grito es:" . $grito;
    }

    public function emitirSonido(string $sonido): void
    {
        echo "Mi nombre es: {$this->nombre}, soy del Planeta: {$this->planeta} El sonido es:" . $sonido;
    }
}
