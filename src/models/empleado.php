<?php

include_once("Persona.php");

class Empleado extends Persona{
    private string $cargo;
    private int $suelo;

    public function __construct(
        int $id,
        string $nombre,
        int $edad, 
        string $documento ,
        string $tipo,
        string $cargo,
        string $sueldo,
    ){
        parent::__construct($id,$nombre,$edad,$documento,$tipo);
        $this->sueldo = $sueldo; 
        $this->cargo = $cargo;
    }

    public function esMayor():bool
    {
        return $this->edad >= 18;
    }

    public function getSueldo(): int{
        return $this->sueldo;
    }
    public function getCargo(): string{
        return $this->cargo;
    }
} 