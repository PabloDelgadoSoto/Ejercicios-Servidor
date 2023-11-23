<?php
include_once "Cliente.php";
include_once "Producto.php";
include_once "Navegacion.php";
include_once "Escritor.php";

$request = $_POST;
//hace falta navegacion porque sino al iniciar sale el mensaje de error
if(Navegacion::esComprar($request)){
    if(Cliente::esCorrecto($request)){
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