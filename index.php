<?php
declare(strict_types= 1);
include "modelos/pelicula.php";
include "modelos/director.php";
//crear un objeto o instancia de la clase pelicula
$fecha = new DateTime('20-12-1950');
$creado = new DateTimeImmutable();

$director1 =new Director(1, "Martin", "Scorsese", $fecha, $creado, 'Muchas pelis, de pequeño quería ser panadero');

$pelicula1 =new Pelicula(1,'papillon',33, $director1);
echo '<pre>';



$pelicula1 = new Pelicula(1,'Papillon', 33,$director1);
echo $pelicula1->toString();
echo $pelicula1->getDirector()->toString();


echo $pelicula1->getDirector()->getNombreCompleto();
