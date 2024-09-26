<?php
declare(strict_types=1);

class ConvertidorMoneda
{

    private static float $tasaDolarEuro = 0.85;
    private static float $tasaEuroDolar = 1.18;

    public static function dolaresaEuros(float $dolares): float
    {
        return $dolares * self::$tasaDolarEuro;
       



    }
    public static function eurosaDolares(float $euros): float
    {
        return $euros * self::$tasaEuroDolar;
    }
    public static function actualizaTasas(float $nuevaTasaDolarEuro, float $nuevaTasaEuroDolar): void
    {
        self::$tasaDolarEuro= $nuevaTasaDolarEuro;
        self::$tasaEuroDolar= $nuevaTasaEuroDolar;
    }
    public static function obtenerTasasActuales(): array
    {return [
        'dolar_euro' => self::$tasaDolarEuro,
        'euro_dolar' => self::$tasaEuroDolar
    ];

    }

















}