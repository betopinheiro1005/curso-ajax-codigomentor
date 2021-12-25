<?php

require 'conexao.php';

$usuario = $_GET['usuario'];
$usuario = (int)$usuario;

$resultadoBD = mysqli_query($con, "SELECT * FROM pessoas WHERE id = $usuario");
$usuariosBD = "";

$usuariosBD .= "<table>";
$usuariosBD .= "<tr>";
$usuariosBD .= "<th>Nome</th>";
$usuariosBD .= "<th>Email</th>";
$usuariosBD .= "</tr>";

while($row = mysqli_fetch_assoc($resultadoBD))
{
	$usuariosBD .= "<tr>";
	$usuariosBD .= "<td>" . $row['nome'] . "</td>";
	$usuariosBD .= "<td>" . $row['email'] . "</td>";
	$usuariosBD .= "</tr>";
}

$usuariosBD .= "</table>";

echo $usuariosBD;
mysqli_close($con);

?>