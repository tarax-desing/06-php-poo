<?php
declare(strict_types= 1);
class Circulo extends Figura {
    private float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
    }

    public function calcularArea(): void {
        $this->area = pi() * $this->radio * $this->radio;
    }

    public function mostrarArea(): string {
        $this->calcularArea();
        return parent::mostrarArea() . " circulo";
    }
}