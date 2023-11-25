<?php
include_once "Cliente.php";
include_once "Producto.php";
include_once "Navegacion.php";
include_once "Escritor.php";

$request = $_POST;
//uso navegacion para que al iniciar la aplicación por primera vez no aparezca el mensaje de error
if(Navegacion::esComprar($request)){
    //validacion en el cliente
    //valido todo incluso producto por si se modifica algo en el select del formulario
    if(Cliente::esCorrecto($request) && Escritor::esCorrecto($request) && Producto::esCorrecto($request)){
        $cliente = Cliente::crear($request);
        $producto = Producto::obtenerProducto($request);
        $producto->calcularTransporte($cliente);
        $producto->calcularTotal();
        Escritor::pintar($request, $cliente, $producto);
        include_once "ticket.php";
    } else {
        include_once "formulario.php";
        echo Escritor::MENSAJE_ERROR;
    }
} else {
    include_once "formulario.php";
}