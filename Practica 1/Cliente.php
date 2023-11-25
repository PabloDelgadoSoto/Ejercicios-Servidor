<?php

class Cliente {

    const NOMBRE = "Nombre";
    const APELLIDOS = "Apellidos";
    const DIRECCION = "Direccion";
    const MUNICIPIO = "Municipio";
    const CODIGO_POSTAL = "CodigoPostal";
    //codigos postal con comportamiento diferente
    const BALEARES = "07";
    const CANARIAS_1 = "35";
    const CANARIAS_2 = "38";
    const MELILLA = "52";
    const CEUTA = "51";

    const DESCUENTO = "0.8";
    const RECARGO = "1.05";
    
    private $nombre;
    private $apellidos;
    private $direccion;
    private $municipio;
    private $codigoPostal;

    public function __construct($nombre, $apellidos, $direccion, $municipio, $codigoPostal){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->municipio = $municipio;
        $this->codigoPostal = $codigoPostal;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getMunicipio(){
        return $this->municipio;
    }

    public function getCodigoPostal(){
        return $this->codigoPostal;
    }

    public static function esCorrecto($valor){
        $sonCorrectos = true;
        if(isset($valor[Cliente::NOMBRE]) && isset($valor[Cliente::APELLIDOS]) &&
        isset($valor[Cliente::DIRECCION]) && isset($valor[Cliente::MUNICIPIO]) &&
        isset($valor[Cliente::CODIGO_POSTAL])){

            $nombre = $valor[Cliente::NOMBRE];
            $apellidos = $valor[Cliente::APELLIDOS];
            $direccion = $valor[Cliente::DIRECCION];
            $municipio = $valor[Cliente::MUNICIPIO];
            $codigoPostal = $valor[Cliente::CODIGO_POSTAL];

            if(empty($nombre) || empty($apellidos) || empty($direccion) || empty($municipio) || empty($codigoPostal)){
                $sonCorrectos = false;
            }
        } else {
            $sonCorrectos = false;
        }
        return $sonCorrectos;
    }

    public static function crear($valor){
        $nombre = $valor[Cliente::NOMBRE];
        $apellidos = $valor[Cliente::APELLIDOS];
        $direccion = $valor[Cliente::DIRECCION];
        $municipio = $valor[Cliente::MUNICIPIO];
        $codigoPostal = $valor[Cliente::CODIGO_POSTAL];
    
        return new Cliente($nombre, $apellidos, $direccion, $municipio, $codigoPostal);
    }
}