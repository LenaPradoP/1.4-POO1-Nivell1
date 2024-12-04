<?php
declare(strict_types = 1);
require_once("ClassShape.php");

class Triangle extends Shape {

    public function calculateArea() : float {

        return ($this->length * $this->height) / 2;
    }

}




 ?>