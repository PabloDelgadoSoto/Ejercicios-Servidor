<?php
    namespace Dawes\Instituto\Model;

    require 'vendor/autoload.php';

    use Monolog\Logger;
    use Dawes\Instituto\Util\Factoria;

    class Aula {

        private $lista = [];

        private Logger $log;

        public function añadirAlumno($alumno){
            array_push($this->lista, $alumno);
        }

        public function listar(){
            $this->log = Factoria::getLogger();
            for($i = 0; $i < count($this->lista); $i++){
                $this->log->debug('Lista de todos', ["Alumno".$i => $this->lista[$i]->__toString()]);
            }
        }   
    }