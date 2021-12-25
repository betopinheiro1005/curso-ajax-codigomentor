<?php

require "conexao.php";

$nome = $_GET['nome'];	

if(!empty($nome)){
	$cliente = mysqli_real_escape_string($con, $nome);
	$resultado = mysqli_query($con, "SELECT * FROM pessoas WHERE nome LIKE '%" . $cliente . "%'");

	while($row = mysqli_fetch_assoc($resultado)) {
		echo  "<div style = 'color: blue;' onclick='toggleOverlay(this)'>" . $row['nome'] . "</div>";
		echo  "<input type='hidden' value = '" . $row['email'] . "'>";
	}
	mysqli_close($con);
} else {
	mostrarUsuarios();
}

function mostrarUsuarios(){

	require "conexao.php";

	$resultado = mysqli_query($con, "SELECT * FROM pessoas");

	while($row = mysqli_fetch_assoc($resultado))
	{
		echo  "<div style = 'color: blue;' onclick='toggleOverlay(this)'>" . $row['nome'] . "</div>";
		echo  "<input type='hidden' value = '" . $row['email'] . "'>";
	}

	mysqli_close($con);

}

?>
