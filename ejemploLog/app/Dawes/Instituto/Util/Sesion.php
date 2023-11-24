<?php
    namespace Dawes\Instituto\Util;

    require 'vendor/autoload.php';

    class Sesion {

        const REGISTRO = "Registro";

        public static function existe(){
            if(isset($_SESSION[Sesion::REGISTRO])){
                return true;
            }
            return false;
        }

        public static function eliminar(){
            session_destroy();
        }

        public static function devolver(){
            return unserialize($_SESSION[Sesion::REGISTRO]);
        }

        public static function crear($aula){
            $_SESSION[Sesion::REGISTRO] = serialize($aula);
        }
    }