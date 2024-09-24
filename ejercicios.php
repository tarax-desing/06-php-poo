<?php

declare(strict_types= 1);
 //crea una clase llamada persona
//  debe tener los siguientes atributos: nombre y edad
//  debe tener un método público llamado saludar que devuelva un string con el formato "hola,
//  mi nombre es:[nombre] y tengo [edad] años" 

class Persona{
    private string  $nombre;
    private int  $edad;

    public function __construct(string $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function getNom(): string{
        return $this->nombre;

}
    public function getEdad(): int{
        return $this->edad;

}
public function getSaludo(): string{
    return 'hola, mi nombre es: ' . $this->nombre . 'y tengo :' . $this->edad . ' años';
    
}
public function setNom(string $nombre): void{ 
     $this->nombre = $nombre;

}
public function setEdad(int $edad): void {
    $this->edad =$edad;

}

}

$persona1 = new Persona('Elena', 25) ;
echo $persona1 ->getSaludo();


/* clase llamada Coche
tres propiedades privadas: marca, modelo y año
un constructor que inicie estas tres propiedades 
un método público llamado obtenerInformacion() que devuelva string con el siguiente formato "Coche[marca] [modelo] del años[año]
*/
class Coche {
    private string $marca;
    private string $modelo;
    private int $anio;

    public function __construct(string $marca, string $modelo, int $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }
   

    public function ObtenerInformacion(): string {
        return "coche $this->marca $this->modelo del año $this->anio";
    // }
    // public function tostring(): string {
    //     return $this->getObtenerInformacion()
    //     . "Coche: .this ";
    // }
}}