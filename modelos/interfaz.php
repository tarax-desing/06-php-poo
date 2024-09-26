<?php
declare(strict_types=1);
/*se declara utilizando la palabra clave interface
todos deben ser publicos no pueden contener propiedades o variables de instancia
una clase puede implementar varias interfaces
las clases que implementan una interfaz deben proporcionar una implementación para todos los métodos declarados en la interfaz
*/interface Reproducible{
    public function reproducir(): void;
    public function pausar(): void;
    public function detener(): void;

}
class Cancion implements Reproducible{
    private string $titulo;
    public function __construct(string $titulo){
        $this->nombre = $titulo;

    }
    public function reproducir(): void{
        echo "Reproduciendo la cancion" . $this->titulo;
    }
    public function pausar(): void{
        echo "Canción pausada";
}
public function detener(): void{
    echo "Reproducción de canción detenida";

}
}
class Video implements Reproducible{
    private string $nombre;



public function reproducir(): void{
    echo "Reproduciendo video" . $this->nombre;
}
public function pausar(): void{
    echo "video pausado";
}
public function detener(): void{
echo "Reproducción de video detenida";

}





}