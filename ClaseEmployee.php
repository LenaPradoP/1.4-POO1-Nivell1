<?php
declare(strict_types = 1);

class Employee {

private $nombre = '';
private $sueldo = 0;

    public function initialize($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function print() : string {
        $respuesta = "Nombre: $this->nombre<br>";
        
        if ($this->sueldo > 6000) {
            $respuesta .= "Paga impuestos.<br>";
        } else {
            $respuesta .= "No paga impuestos.<br>";
        }
        return $respuesta;
    }


}

?>