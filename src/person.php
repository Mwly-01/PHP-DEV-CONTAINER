<?php

class person{
    private int $id;
    private string $nombre;
    private int $edad;
    protected string $tipoDocumento;
    protected string $documento;

    public function __construct(int $id,string $nombre, int $edad, string $documento ,string $tipo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->documento = $documento;
        $this->tipoDocumento = $tipo;
    }
    
    public function setNombre(string $nombre): void
    {
        $this->nombre = 
htmlspecialchars(trim($nombre));
    }
    
    public function getNombre(): string{
        return $this->nombre;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = 
htmlspecialchars(trim($edad));
    }
    
    public function getEdad(): string{
        return $this->edad;
    }

    public function getDocumento(): string{
        return $this->documento;
    }
    public function getTipoDocumento(): string{
        return $this->tipoDocumento;
    }

    
    
}