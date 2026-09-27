<?php

require "planta.php";

class arbusto extends planta
{

    private string $anchoArbusto;
    private string $domestico;
    private string $variedadArbusto;
    private string $colorHojas;
    private string $podar;


    public function __construct(
        string $nombre,
        string $alturaTallo,
        string $tieneHojas,
        string $climaIdeal,
        string $anchoArbusto,
        string $domestico,
        string $variedadArbusto,
        string $colorHojas,
        string $podar
    ) {
        return parent::__construct(
            $nombre,
            $alturaTallo,
            $tieneHojas,
            $climaIdeal
        );

        
        $this->anchoArbusto = $anchoArbusto;
        $this->domestico = $domestico;
        $this->variedadArbusto = $variedadArbusto;
        $this->colorHojas = $colorHojas;
        $this->podar = $podar;

    }

    public function mostrarMensaje(): string
    {
        echo "Hola, soy un árbol";
    }
}
