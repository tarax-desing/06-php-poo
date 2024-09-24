<?php
declare(strict_types=1);




class Pelicula{
   private int $id;
   private string $titulo;
   private float $precio;
   
   private Director $director;
public function __construct(int $id, string $titulo, float $precio,Director $director){

    $this->id = $id;
    $this->titulo = $titulo;
    if($this->comprobarPrecio($precio)){
       
    $this->precio = $precio;
    }else{
        $this->precio = 1;
    }
    $this->director = $director;
}


   public function getId():int{
    return $this->id;
   }

   public function getTitulo() :string{
    return $this->titulo;

}
public function getPrecio():float{
    return $this->precio;


}
public function getDirector(): Director{
    return $this->director;

}
public function setId(int $id): void{
    $this->id = $id;
}
public function setTitulo(string $titulo): void{
    $this->titulo = $titulo;
}
public function setPrecio(int $precio): void{
    if($this ->comprobarPrecio($precio)){
        $this->precio = $precio;
    }else{
        echo "el precio no es válido";
    }
    $this->id = $precio;
}
public function setDirector($director): void {
    $this->director = $director;
}

public function comprobarPrecio(float $precio): bool {
    $valido = true;
    if ($precio < 1) {
        $valido = false;
    }
    return $valido;
}

 public function __toString(){ 
        return"Película:" . $this->titulo .
        "Precio:" .  
        $this->precio ."<br>". 
        $this->director->toString() . 
        "<br>";
}
public function toString(){
    return $this;
}


}