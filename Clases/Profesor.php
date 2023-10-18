<?php

    class Profesor extends Persona{
        private $codProfesor;

        public function __construct($nombre, $edad, $codProfesor){
            parent::__construct($nombre,$edad);//Esto es para cojer lo de persona super()en jaba
            $this->codProfesor = $codProfesor;
        }

        public function getCodProfesor(){
            return $this->codProfesor;
        }

        public function setCodProfesor($codProfesorNuevo){
          return $this->codProfesor = $codProfesorNuevo;  
        }

        public function __toString(){
            //$auxs = parent::__toString();//Invocar el toString padre.
            //si quieres las parte del padre pones la variable en el return
            return "Profesor con codigo " . $this->getCodProfesor()
            . " nombre " . $this->getNombre() . " edad " . $this->getEdad();
        }
    }