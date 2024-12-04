<?php

require("ClaseEmployee.php");

echo "<h1><u> Ejercicio 1.4.1 </u></h1>";
$empleado1 = new Employee;
$empleado1->initialize('Laura', 8000);
echo $empleado1->print() . "<br>";

$empleado2 = new Employee;
$empleado2->initialize('Javier', 5000);
echo $empleado2->print();

?>