<?php

class Navegacion{

    const COMPRAR = "Comprar";

    public static function esComprar($valor){
        if($valor[Navegacion::COMPRAR]){
            return true;
        }
        return false;
    }
}