<?php
include_once 'modelos/cuentaBancaria.php';
include_once 'modelos/convertidorMoneda.php';
$miCuenta = new CuentaBancaria(1000);

echo "Saldo inicial" . $miCuenta->obtenerSaldo() . '<br>' ;
$cantidad = 500;

if($miCuenta->depositar($cantidad)) {
    echo "Depósito realizado correctamente<br>";
} else {
    echo "El depósito no se ha realizado";
}

$cantidadaRetirar =500;
if($miCuenta->retirar($cantidadaRetirar)) {
    echo "Retirada de cantidad realizada'<br>' ";
}else{
    echo "No se pudo realizar la operacion";
}
///obtener el saldo
echo"tu saldo actual es:" . $miCuenta->obtenerSaldo() ;


echo"<h2>Convertidor moneda</h2>";
$dolares = 100;
$euros = 100;
echo $dolares . "son" . ConvertidorMoneda::dolaresaEuros($dolares) . 'Euros<br>';
echo  $euros . 'son' . ConvertidorMoneda::eurosaDolares($euros) . 'Dólares<br>';
// ConvertidorMoneda::actualizaTasas(0.82, 1.22);
echo '<p>Nuevos valores</p>';
$tasasActuales = ConvertidorMoneda::obtenerTasasActuales();
foreach($tasasActuales as $key => $valor) {
    echo  $key . ''. $valor .'<br>';

}