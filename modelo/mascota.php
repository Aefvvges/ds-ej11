<?php

class Mascota{
    public $Id;
    public $Nombre;
    public $Raza;
    public $Edad;
    public $Especie;

    public function MostrarPropiedades(){
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Raza: ' . $this->Raza . '<br>';
        echo 'Edad: ' . $this->Edad . '<br>';
        echo 'Especie: ' . $this->Especie . '<br>';
    }
}