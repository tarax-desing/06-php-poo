<?php
declare(strict_types= 1);

class CuentaBancaria{
    private float $saldo;

     
     
    public function __construct(float $saldo =0)  {
     $this->saldo = $saldo;
 
    }

    public function depositar($cantidad):bool{
       if($cantidad >0){
            $this->saldo += $cantidad;
            return true;
        }else {
            return false;
        }
    }
    public function retirar($cantidad) :bool{
      
        if($cantidad > 0  && $cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
            return true;
}else {
    return false;
}
}
   public function obtenerSaldo():float{ 
    return $this->saldo;
      }

}
