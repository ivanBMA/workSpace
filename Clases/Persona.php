<?php
    class Persona{
        //metodos magicos son para las clases ("Mira el manual")
        private $nombre;
        private $edad;
        static $contadorPersonas;
        

        public function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$contadorPersonas++;//Incrementar el contador statico
        }

        //Por defecto es publico
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombreNuevo){
          return $this->nombre = $nombreNuevo;  
        }
        public function getEdad(){
            return $this->edad;
        }

        public function setEdad($edadNueva){
          return $this->edad = $edadNueva;  
        }

        public function __toString(){
            return "Persona con nombre " . $this->getNombre . " y edad "
            . $this->getEdad();
        }
    }