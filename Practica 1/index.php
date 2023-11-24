<?php
include_once "Cliente.php";
include_once "Producto.php";
include_once "Navegacion.php";
include_once "Escritor.php";

$request = $_POST;

if(Navegacion::esComprar($request)){
    //validacion en el cliente
    if(Cliente::esCorrecto($request) && Escritor::esCorrecto($request) && Producto::esCorrecto($request)){
        //valido todo incluso producto por si se modifica algo en el select del formulario
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