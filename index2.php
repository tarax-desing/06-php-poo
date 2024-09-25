<?php
declare(strict_types= 1);
require_once 'modelos/gato.php';
require_once'modelos/perro.php';
require_once 'modelos/figura.php';

$miPerro = new Perro('Kyra', 16, 'mestiza');
echo '<pre>';
var_dump($miPerro);
echo'</pre>';

echo $miPerro->toString();



echo $miPerro->hacerSonido();
echo '<br>';


$miGato = new Gato('Osiris',8,true);
echo $miGato->toString();
echo '<br>';
echo $miGato->hacerSonido();

echo '<br>';

$cuadrado = new Cuadrado(4);
echo $cuadrado->mostrarArea();
echo '<br>';
$circulo = new Circulo(8);
echo $circulo->mostrarArea();
