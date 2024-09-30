
<?php

    class Gato extends Animal {

        private $nombre;
        private $edad;
        private $raza;


        public function __construct($nombre, $edad, $raza){
            parent::__construct("gato", "casa");
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->raza = $raza;

        }

        public function maullar() {
            return "{$this->nombre} está maullando.";
        }

        public static function descripcionGeneral() {
            return "Los gatos son animales domésticos que suelen ser independientes.";
        }

        public function __toString()
        {
            return $this->nombre.", ".$this->edad.", ".$this->raza.".";
        }
    }



?>