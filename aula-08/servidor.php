<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$resposta = "";

if (!ctype_digit($num1) || !ctype_digit($num2)){
	$resposta .= "<h5>Por favor, entre com dois números!</h5>";	
} else {
	$resposta .= "<table>";
	$resposta .= "<tr><td>" . $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "</td></tr>";
	$resposta .= "<tr><td>" . $num1 . " - " . $num2 . " = " . ($num1 - $num2) . "</td></tr>";
	$resposta .= "<tr><td>" . $num1 . " * " . $num2 . " = " . ($num1 * $num2) . "</td></tr>";
	$resposta .= "<tr><td>" . $num1 . " / " . $num2 . " = " . ($num1 / $num2) . "</td></tr>";
	$resposta .= "</table>";
}

echo $resposta;

?>