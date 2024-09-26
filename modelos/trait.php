<?php
declare(strict_types= 1);

/*un trait nos permite generar una serie de metodos para compartir entre diferentes clases.
se declara trait
*/
trait loggeable{
    private string $logFile = 'app.log';
    public function log(string $mensaje): void{
        $timestamp = date('Y-m-d H:i:s');
        $logMensaje = "[{$timestamp}] {$mensaje}\n";
        file_put_contents($this->logFile, $logMensaje, FILE_APPEND);
    }
    public function setLogFile(string $fileName): void{
        $this->logFile = $fileName;
    }

}
class Usuario{
    use loggeable;
    private string $nombre;
    public function __construct(string $nombre){
        $this->nombre = $nombre;
        $this->log("Nuevo usuario creado: {$this->nombre}");
    }
public function getNombre(): string{
    return $this->nombre;
}

}