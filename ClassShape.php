<?php
declare(strict_types = 1);

class Shape {

    protected $length;
    protected $height;

    public function __construct(float $length, float $height) {
        $this->length = $length;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0;
    }

}

 ?>