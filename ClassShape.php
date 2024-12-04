<?php
declare(strict_types = 1);

class Shape {

    protected $length;
    protected $height;

    public function __construct(int $length, int $height) {
        $this->length = $length;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0;
    }

}

 ?>