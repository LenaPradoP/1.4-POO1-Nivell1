<?php
declare(strict_types = 1);
require_once("ClassShape.php");

class Rectangle extends Shape {

    public function calculateArea() {
        
        return $this->length * $this->height;
    }

}




 ?>