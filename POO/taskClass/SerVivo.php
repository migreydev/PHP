<?php

class SerVivo {
    private $familia;
    protected $nombre;
    protected $edad;

    public function __construct($familia, $nombre, $edad) {
        $this->familia = $familia;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function respirar() {
        return "{$this->nombre} está respirando.";
    }

    public static function descripcionGeneral() {
        return "Los seres vivos son esenciales para el ecosistema.";
    }

    public function __toString() {
        return "{$this->familia}, {$this->nombre}, {$this->edad}.";
    }
}
?>
