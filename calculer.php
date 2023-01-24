<?php
declare(strict_types = 1);

require_once("./classes/Math.class.php");

$num1 = $operation = $num2 = "";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $num1 = $_POST["number1"];
    $operation = $_POST["operator"];
    $num2 = $_POST["number2"];
}

$cal = new Math((int) $num1, $operation, (int) $num2);
echo $cal->calculate() . "<br>";
?>