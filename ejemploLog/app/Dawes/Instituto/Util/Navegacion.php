<?php

namespace Dawes\Instituto\Util;

require 'vendor/autoload.php';

class Navegacion{

    const AGREGAR = "Agregar";
    const LISTAR = "Listar";

    public static function esAgregar($valor){
        if (isset($valor[Navegacion::AGREGAR])) {
            return true;
        }
        return false;
    }

    public static function esListar($valor){
        if (isset($valor[Navegacion::LISTAR])) {
            return true;
        }
        return false;
    }
}

//esto en verdad es inutil porque no el include funciona solo 1 vez, esta aqui para repaso y ver donde iria
