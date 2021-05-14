<?php
// una clase abstracta no puede ser instanciada, solo implementada con sus propiedades y metodos
namespace ExampleToMaximo\Extraterrestre;

abstract class Alien
{
    public string $nombre;
    public string $planeta;

    public function emitirSonido(string $sonido): void
    {
        echo $sonido;
    }
}
