<?php

require "planta.php";

class flor extends planta
{

    private string $colorPetalos;
    private string $cantidadpromPetalos;
    private string $colorPistilo;
    private string $variedadFlor;
    private string $estacionFlorecimiento;


    public function __construct(
        string $nombre,
        string $alturaTallo,
        string $tieneHojas,
        string $climaIdeal,
        string $colorPetalos,
        string $cantidadpromPetalos,
        string $colorPistilo,
        string $variedadFlor,
        string $estacionFlorecimiento
    ) {
        parent::__construct(
            $nombre,
            $alturaTallo,
            $tieneHojas,
            $climaIdeal
        );

        $this->colorPetalos = $colorPetalos;
        $this->cantidadpromPetalos = $cantidadpromPetalos;
        $this->colorPistilo = $colorPistilo;
        $this->variedadFlor = $variedadFlor;
        $this->estacionFlorecimiento = $estacionFlorecimiento;
    }

    public function mostrarMensaje(): string
    {
        echo "Hola, Soy una Flor";
    }
}
