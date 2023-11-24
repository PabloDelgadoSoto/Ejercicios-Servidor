<?php

session_start();

?>

<?php



//http://localhost:8080/ejemploLog/index.php
//http://localhost:8080/ejemploLog/index.php?XDEBUG_SESSION_START=1

require 'vendor/autoload.php';

use Dawes\Instituto\Model\Alumno;
use Dawes\Instituto\Util\Sesion;
use Dawes\Instituto\Model\Aula;
use Dawes\Instituto\Util\Navegacion;

include_once "formulario.php";

$request = $_POST;

if (Navegacion::esAgregar($request)) {
    if (Alumno::esCorrecto($request)) {
        $alumno = Alumno::crear($request);
        if (Sesion::existe()) {
            $aula = Sesion::devolver();
        } else {
            $aula = new Aula();
        }
        $aula->añadirAlumno($alumno);
        Sesion::crear($aula);
    }
} else if (Navegacion::esListar($request)){
    $aula = Sesion::devolver();
    $aula->listar();
    Sesion::eliminar();
}
