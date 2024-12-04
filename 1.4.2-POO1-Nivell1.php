<?php
declare(strict_types = 1);
require_once("ClassRectangle.php");
require_once("ClassTriangle.php");

echo "<h1><u> Ejercicio 1.4.2 </u></h1>";

$triangle1 = new Triangle(12.5, 9);
echo "El triángulo tiene un area de " . $triangle1->calculateArea() . "cm².<br>";
$rectangle1 = new Rectangle(24, 6.2);
echo "El rectángulo tiene un area de " . $rectangle1->calculateArea() . "cm².<br>";

 ?>