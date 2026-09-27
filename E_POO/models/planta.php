<?php

class planta
{
    private string $nombre;
    private string $alturaTallo;
    private string $tieneHojas;
    private string $climaIdeal;

    public function __construct(
        string $nombre,
        string $alturaTallo,
        string $tieneHojas,
        string $climaIdeal
    ) {
        $this->nombre = $nombre;
        $this->alturaTallo = $alturaTallo;
        $this->tieneHojas = $tieneHojas;
        $this->climaIdeal = $climaIdeal;
    }


    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getAlturaTallo(): string
    {
        return $this->alturaTallo;
    }

    public function getTieneHojas(): string
    {
        return $this->tieneHojas;
    }

    public function getClimaIdeal(): string
    {
        return $this->climaIdeal;
    }
}
