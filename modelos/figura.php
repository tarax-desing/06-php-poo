<?php
declare(strict_types= 1);

abstract class Figura {
    protected float $area;

    abstract public function calcularArea(): void;

    public function mostrarArea(): string {
        return "El área es: " . $this->area;
    }
}

class Cuadrado extends Figura {
    private float $lado;
    public function __construct(float $lado) {
        $this->lado = $lado;
        $this->calcularArea();
    }


public function calcularArea():void {
    $this->area = $this->lado * $this->lado;
}
}

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