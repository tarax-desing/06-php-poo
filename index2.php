<?php
declare(strict_types= 1);
require 'modelos/autoload.php';
// require_once'modelos/perro.php';
// require_once 'modelos/figura.php';
// require_once'modelos/planSubscripcion.php';

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

echo '<br>';
$planBasico = new PlanSubscripcion(planSubscripcion::PLAN_BASICO);
echo $planBasico->obtenerPrecio();
echo '<br>';
$planEstandard = new PlanSubscripcion(planSubscripcion::PLAN_ESTANDARD);
echo $planEstandard->obtenerPrecio();
echo '<br>';
$planPremium = new PlanSubscripcion(planSubscripcion::PLAN_PREMIUM);
echo $planPremium->obtenerPrecio();
echo '<br>';

$planes = PlanSubscripcion::obtenerTodosLosPlanes();
echo '<br>';
foreach ($planes as $planSubscripcion => $precio) {
    echo "$planSubscripcion: $precio <br>";
}