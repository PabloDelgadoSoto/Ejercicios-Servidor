<?php
    namespace Dawes\Instituto\Model;

    require 'vendor/autoload.php';

    use Dawes\Instituto\Util\Factoria;
    use Monolog\Logger;

    class Alumno {

        const NOMBRE = "Nombre";
        const APELLIDOS = "Apellidos";
        const MAIL = "Mail";
        const DP = ":";
        const ESPACIO = " ";

        private string $nombre;
        private string $apellidos;
        private string $mail;

        private Logger $log;

        public function __construct($nombre, $apellidos, $mail) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->mail = $mail;

            //$this->log = Factoria::getLogger();
            //$this->log->debug($this->__toString());
        }

        public static function crear($valor){
            $nombre = $valor[Alumno::NOMBRE];
            $apellidos = $valor[Alumno::APELLIDOS];
            $mail = $valor[Alumno::MAIL];

            return new Alumno($nombre, $apellidos, $mail);
        }

        public static function esCorrecto($valor){
            $sonCorrectos = true;
            if(isset($valor[Alumno::NOMBRE]) && isset($valor[Alumno::APELLIDOS]) && isset($valor[Alumno::MAIL])){
                $nombre = $valor[Alumno::NOMBRE];
                $apellidos = $valor[Alumno::APELLIDOS];
                $mail = $valor[Alumno::MAIL];

                if(empty($nombre) || empty($apellidos) || empty($mail)){
                    $sonCorrectos = false;
                }
            } else {
                $sonCorrectos = false;
            }
            return $sonCorrectos;
        }

        public function __toString(){
            return Alumno::NOMBRE.Alumno::DP.Alumno::ESPACIO.$this->nombre.Alumno::ESPACIO.
            Alumno::APELLIDOS.Alumno::DP.Alumno::ESPACIO.$this->apellidos.Alumno::ESPACIO.
            Alumno::MAIL.Alumno::DP.Alumno::ESPACIO.$this->mail;
        }
    }