<?php

include_once "Persona.php";

class Camper extends Persona
{
    public int $skillProgrmacion = 0;
    public int $skillIngles = 0; // Valores opcionales van al final

    // Comentarios de funciones, va antes de ella
    /**
     * Logica para crear un Camper
     * @param string $nombre Define el nombre del Camper sin la logica de la validacion de 20 caracteres
     * @param int $edad Edad del camper, representado en valores enteros
     * @param string $documento Documento del camper
     * @param int $nivelIngles Parametro opcionar que muestra el nivel de ingles del Camper
     */
    public function __construct(string $nombre, int $edad, string $documento, int $nivel = 0)
    {
        $this->nombre = $nombre;
        $this->setEdad($edad);
        $this->setNombre($nombre);
        $this->documento = $documento;
        $this->nivelIngles = $nivel;
            
        echo "Hola desde el Constructor<br>";
    }

    // Acciones
    private function marcarAsitencia(){}

    public function esMayor(): bool {
        return $this->getEdad() >= 18; // Referenciar, acceder al atributo = 'al atributo ->'
    }

    /**
     * set el nombre del Camper, validando que cumpla con el minimo de 20 caracteres
     * @param string $nombre Define nuevo nombre
     */
    #[Override]
    public function setNombre(string $nombre): void {
        if(strlen($nombre) >= 5) {
            $this->setNombre(htmlspecialchars(trim($nombre)));
        } else {
            echo 'Error al set el nombre al Camper';
        }
    }

    public function getNombre(): string {
        return "__".strtoupper(parent::getNombre())."__";
    }

    public function getInfoDocumento(): string {
        return "{$this->getTipoDocumento()} : {$this->getTipoDocumento()}";
    }

    public function informacion(): array {
        return [
            // Valida nulls y coloca valor por defecto
            'nombre' => $this->nombre ?? 'NN', 
            'edad' => $this->edad ?? 0,
            'documento' => $this->documento ?? 'NN',
            'tipoDcoumento' => $this->tipoDocumento ?? 'NN'
        ];
    }
}
?>