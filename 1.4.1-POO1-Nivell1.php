<?php

require("ClaseEmployee.php");

echo "Ejercicio 1.4.1".PHP_EOL;

$empleado1 = new Employee;
$empleado1->initialize('Laura', 8000);
echo $empleado1->print() .PHP_EOL;

$empleado2 = new Employee;
$empleado2->initialize('Javier', 5000);
echo $empleado2->print();

?>