
<?php

    class Humano extends SerVivo {

        private $nacionalidad;


        public function __construct($nombre, $edad, $nacionalidad){
            parent::__construct("humano", $nombre, $edad);
            $this->nacionalidad = $nacionalidad;

        }

        public function hablar() {
            return "{$this->nombre} está hablando.";
        }

        public static function descripcionGeneral() {
            return "Los humanos son seres vivos racionales, capaces de comunicarse.";
        }

        public function __toString()
        {
            return $this->nombre.", ".$this->edad.", ".$this->nacionalidad.".";
        }
    }

?>