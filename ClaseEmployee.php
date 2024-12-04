<?php

class Employee {

private $nombre = '';
private $sueldo = 0;

    public function initialize($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function print() {
        echo "Nombre: $this->nombre<br>";
        
        if ($this->sueldo > 6000) {
            echo "Paga impuestos.<br>";
        } else {
            echo "No paga impuestos.<br>";
        }
    }
}

?>