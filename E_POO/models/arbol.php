<?php

require "planta.php";

class Arbol extends Planta{
    
    private string $variedad;
    private string $tipoTronco;
    private string $radioTronco;
    private string $color;
    private string $tipoHojas;

    public function __construct(
        string $nombre,
        string $alturaTallo,
        string $tieneHojas,
        string $climaIdeal,
        string $variedad,
        string $tipoTronco,
        string $radioTronco,
        string $color,
        string $tipoHojas
    ) {
        parent::__construct(
            $nombre,
            $alturaTallo,
            $tieneHojas,
            $climaIdeal
        );

        $this->variedad = $variedad;
        $this->tipoTronco = $tipoTronco;
        $this->radioTronco = $radioTronco;
        $this->color = $color;
        $this->tipoHojas = $tipoHojas;
    }

    public function mostrarMensaje(): string
    {
        echo "Hola, soy un árbol";
    }
}
