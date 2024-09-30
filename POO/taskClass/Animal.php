<?php

class Animal {
    private $tipo;
    private $habitat;

    public function __construct($tipo, $habitat) {
        $this->tipo = $tipo;
        $this->habitat = $habitat;
    }

    public function sonido() {
        return "{$this->tipo} hace un sonido.";
    }

    public static function descripcionGeneral() {
        return "Los animales son seres vivos.";
    }

    public function __toString() {
        return "{$this->tipo}, {$this->habitat}.";
    }
}
?>
