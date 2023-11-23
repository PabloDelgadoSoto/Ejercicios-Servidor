<?php

class Escritor{

    const HTML = "Html";
    const MD = "MD";

    const CLIENTE_T = "Cliente: ";
    const DIRECCION_T = "Direccion: ";
    const PRODUCTOS_T = "Productos: ";
    const TRANSPORTE_T = "Transporte: ";
    const TOTAL = "TOTAL: ";

    const TITULO = "Nombre establecimiento";
    const SUBTITULO = "Factura simplificada";
    const LINEA = "#############################";
    const EUROS = "€";

    const ALM = "#";
    const SALTO_LINEA = "<br/>";
    const ESPACIO = " ";

    const H1_ABRIR = "<h1>";
    const H1_CERRAR = "</h1>";
    const H2_ABRIR = "<h2>";
    const H2_CERRAR = "</h2>";
    const P_ABRIR = "<p>";
    const P_CERRAR = "</p>";

    const MENSAJE_ERROR = "Los datos del formulario no han sido introducidos correctamente, vuelva a intentarlo";

    public static function pintar($valor, $cliente, $producto){
        if(isset($valor[Escritor::HTML])){
            Escritor::pintarHtml($cliente, $producto);
        } else if (isset($valor[Escritor::MD])){
            Escritor::pintarMD($cliente, $producto);
        }
    }

    public static function pintarHtml($cliente, $producto){
        echo Escritor::H1_ABRIR. Escritor::TITULO. Escritor::H1_CERRAR. Escritor::SALTO_LINEA;
        echo Escritor::H2_ABRIR. Escritor::SUBTITULO. Escritor::H2_CERRAR. Escritor::SALTO_LINEA;
        echo Escritor::LINEA. Escritor::SALTO_LINEA;

        echo Escritor::P_ABRIR. Escritor::CLIENTE_T. $cliente->getNombre(). Escritor::ESPACIO. $cliente->getApellidos(). Escritor::SALTO_LINEA;
        echo Escritor::DIRECCION_T. $cliente->getDireccion(). Escritor::ESPACIO. $cliente->getMunicipio(). Escritor::ESPACIO. $cliente->getCodigoPostal(). 
        Escritor::P_CERRAR. Escritor::SALTO_LINEA;

        echo Escritor::P_ABRIR. Escritor::PRODUCTOS_T. Escritor::SALTO_LINEA;
        echo $producto->getNombre(). Escritor::ESPACIO. $producto->getPrecio(). Escritor::EUROS. Escritor::SALTO_LINEA;
        echo Escritor::TRANSPORTE_T. $producto->getTransporte(). Escritor::EUROS. Escritor::SALTO_LINEA;
        echo Escritor::TOTAL. $producto->getTotal(). Escritor::EUROS. Escritor::P_CERRAR. Escritor::SALTO_LINEA;

        echo Escritor::LINEA;
    }

    public static function pintarMD($cliente, $producto){
        echo Escritor::ALM. Escritor::ESPACIO. Escritor::TITULO. Escritor::SALTO_LINEA;
        echo Escritor::ALM. Escritor::ALM. Escritor::ESPACIO. Escritor::SUBTITULO. Escritor::SALTO_LINEA;
        echo Escritor::LINEA. Escritor::SALTO_LINEA;

        echo Escritor::CLIENTE_T.$cliente->getNombre(). Escritor::ESPACIO. $cliente->getApellidos(). Escritor::SALTO_LINEA;
        echo Escritor::DIRECCION_T.$cliente->getDireccion(). Escritor::ESPACIO. $cliente->getMunicipio(). Escritor::ESPACIO. $cliente->getCodigoPostal(). 
        Escritor::SALTO_LINEA;

        echo Escritor::PRODUCTOS_T. Escritor::SALTO_LINEA;
        echo $producto->getNombre(). Escritor::ESPACIO. $producto->getPrecio(). Escritor::EUROS. Escritor::SALTO_LINEA;
        echo Escritor::TRANSPORTE_T.$producto->getTransporte(). Escritor::EUROS. Escritor::SALTO_LINEA;
        echo Escritor::TOTAL.$producto->getTotal(). Escritor::EUROS. Escritor::SALTO_LINEA;

        echo Escritor::LINEA;
    }
}