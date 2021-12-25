<?php

require 'conexao.php';

$resultadoBD = mysqli_query($con, "SELECT * FROM pessoas");
$usuariosBD = "";

$usuariosBD .= "<table>";
$usuariosBD .= "<tr>";
$usuariosBD .= "<th>Nome</th>";
$usuariosBD .= "<th>Email</th>";
$usuariosBD .= "</tr>";

while($row = mysqli_fetch_assoc($resultadoBD)){
	$usuariosBD .= "<tr>";
	$usuariosBD .= "<td>" . $row['nome'] . "</td>";
	$usuariosBD .= "<td>" . $row['email'] . "</td>";
	$usuariosBD .= "</tr>";
}

$usuariosBD .= "</table>";

echo $usuariosBD;
mysqli_close($con);

?>