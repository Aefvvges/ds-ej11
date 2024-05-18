<?php
require_once 'modelo/mascota.php';

$Mascota = new Mascota();

$Mascota->Nombre = 'Pedro';
$Mascota->Raza = 'Salchicha';
$Mascota->Edad = 10;
$Mascota->Especie = 'Perro';

$Mascota->MostrarPropiedades();