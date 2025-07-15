<?php
include_once "person.php";

class Camper extends Person
{
    // Atributos y modificadores de acceso
    private string $nombre; // Solo la clase puede acceder a ella (dentro del objeto)
    public int $edad;
    protected string $documento;
    public int $nivelIngles = 0; // Valores opcionales van al final

    // Comentarios de funciones, va antes de ella
    /**
     * Logica para crear un Camper
     * @param string $nombre Define el nombre del Camper sin la logica de la validacion de 20 caracteres
     * @param int $edad Edad del camper, representado en valores enteros
     * @param string $documento Documento del camper
     * @param int $nivelIngles Parametro opcionar que muestra el nivel de ingles del Camper
     */
    public function __construct(string $nombre, int $edad, string $documento, string $tipoDocumento, int $nivel = 0)
    {
        parent::__construct($nombre, $edad, $documento, $tipoDocumento);

        $this->nivelIngles = $nivel;
            
        echo "Hola desde el Constructor<br>";
    }

    // Acciones
    public function esMayorDeEdad(): bool {
        return $this->traerEdad() >= 18; // Referenciar, acceder al atributo = 'al atributo ->'
    }

    /**
     * Asignar el nombre del Camper, validando que cumpla con el minimo de 20 caracteres
     * @param string $nombre Define nuevo nombre
     */
    #[Override]
    public function asignarNombre(string $nombre): void {
        if(strlen($nombre) >= 5) {
            parent::asignarNombre(htmlspecialchars(trim($nombre)));
        } else {
            echo 'Error al asignar el nombre al Camper';
        }
    }

    #[Override]
    public function traerNombre(): string {
        return parent::traerNombre();
    }

    public function traerInfoDocumento(): string {
        return "{$this->traerTipoDocumento()} : {$this->traerDocumento()}";
    }

    public function informacion(): array {
        return [
            // Valida nulls y coloca valor por defecto
            'nombre' => $this->nombre ?? 'NN', 
            'edad' => $this->edad ?? 0,
            'documento' => $this->documento ?? 'NN',
            'tipoDcoumento' => $this->tipoDocumento
        ];
    }
}
?>