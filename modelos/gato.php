<?php
declare(strict_types= 1);
require_once 'animal.php';

class Gato extends Animal {
    private bool $esDomestico;

    public function __construct(string $nombre, int $edad, bool $esDomestico) {
        parent::__construct($nombre, $edad);
        $this->esDomestico = $esDomestico;
    }

    public function esDomestico(): bool {
        return $this->esDomestico;
    }

    public function hacerSonido(): string {
        return 'Miauuu!...';
    }

    public function toString(): string {
        $domesticoString = $this->esDomestico ? "manso" : "agresivo";
        return parent::toString() . ", aptitud: {$domesticoString}";
    }
}