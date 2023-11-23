<?php

class Producto{

    const MUEBLE = "Mueble";

    const SOFA_3 = "Sofa de 3 plazas";
    const SOFA_4 = "Sofa de 4 plazas";
    const COCINAS = "Cocinas";
    const CANAPE_90 = "Canape de 90";
    const CANAPE_120 = "Canape de 120";
    const CANAPE_150 = "Canape de 150";
    const LAVADORA = "Lavadoras y lavavajillas";

    const DOSCIENTOS = 200;
    const DOSCIENTOS_CINCUENTA = 250;
    const MIL = 1000;
    const CIENTO_CINCUENTA = 150;

    private $nombre;
    private $precio;
    private $transporte = 100;
    private $total;

    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getTransporte(){
        return $this->transporte;
    }

    public function setTransporte($transporte){
        $this->transporte = $transporte;
    }

    public function setTotal($total){
        $this->total = $total;
    }

    public function getTotal(){
        return $this->total;
    }

    public static function crearProductos(){
        $sofa3 = new Producto(Producto::SOFA_3, Producto::DOSCIENTOS);
        $sofa4 = new Producto(Producto::SOFA_4, Producto::DOSCIENTOS_CINCUENTA);
        $cocina = new Producto(Producto::COCINAS, Producto::MIL);
        $canape90 = new Producto(Producto::CANAPE_90, Producto::CIENTO_CINCUENTA);
        $canape120 = new Producto(Producto::CANAPE_120, Producto::DOSCIENTOS);
        $canape150 = new Producto(Producto::CANAPE_150, Producto::DOSCIENTOS_CINCUENTA);
        $lavadora = new Producto(Producto::LAVADORA, Producto::DOSCIENTOS);

        return [$sofa3, $sofa4, $cocina, $canape90, $canape120, $canape150, $lavadora];
    }

    public static function obtenerProducto($valor){
        $productos = Producto::crearProductos();
        if($valor[Producto::MUEBLE] == Producto::SOFA_3){
            return $productos[0];
        } else if($valor[Producto::MUEBLE] == Producto::SOFA_4){
            return $productos[1];
        } else if($valor[Producto::MUEBLE] == Producto::COCINAS){
            return $productos[2];
        } else if($valor[Producto::MUEBLE] == Producto::CANAPE_90){
            return $productos[3];
        } else if($valor[Producto::MUEBLE] == Producto::CANAPE_120){
            return $productos[4];
        } else if($valor[Producto::MUEBLE] == Producto::CANAPE_150){
            return $productos[5];
        } else if($valor[Producto::MUEBLE] == Producto::LAVADORA){
            return $productos[6];
        }
    }

    public function calcularTransporte($cliente){
        //recoge los dos primeros digitos
        $digitos = substr($cliente->getCodigoPostal(), 0, 2);
        //revisa de donde es el cp
        if($digitos == Cliente::CANARIAS_1 || $digitos == Cliente::CANARIAS_2 || $digitos == Cliente::BALEARES || 
        $digitos == Cliente::MELILLA || $digitos == Cliente::CEUTA){
            $this->setTransporte($this->getTransporte() * Cliente::RECARGO);
            //los revisa dentro porque si no están dentro no debería ser revisado en este caso, así se ahorra comprobarlo algunas veces
            if($digitos == Cliente::CANARIAS_1 || $digitos == Cliente::CANARIAS_2){
                $this->setTransporte($this->getTransporte() * Cliente::DESCUENTO);
            }
        }
    }

    public function calcularTotal(){
        $this->setTotal($this->precio + $this->transporte);
    }
}