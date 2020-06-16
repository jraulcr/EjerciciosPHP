
<?php

class MisClases {

    public $cantidad = 5;
    public $nombre = "Jesus";
    public $edad = 12;

    public function MisClases() {
        
    }

    public function setCantidad($nueva_cantidad) {
        $this->cantidad = $nueva_cantidad;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function dame_string() {
        $retorno = "La cantidad es: " . $this->cantidad
                . " || Nombre es: " . $this->nombre
                . " || Edad es: " . $this->edad;
        return $retorno;
    }

    public function es_mayor_edad() {
        if ($this->edad > 18) {
            return true;
        } else {
            return false;
        }
    }

}
?>
