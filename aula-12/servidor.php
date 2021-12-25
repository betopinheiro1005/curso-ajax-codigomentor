<?php

require 'conexao.php';

$nome = $_GET['nome'];

if(!empty($nome)){
	$pessoa = mysqli_real_escape_string($con, $nome);
	$resultadoBD = mysqli_query($con, "SELECT * FROM pessoas WHERE nome LIKE '%" . $pessoa . "%'");
}

while($row = mysqli_fetch_assoc($resultadoBD))
{
	echo "<div class='lista'>" . $row['nome'] . "</div>";
}

mysqli_close($con);

?>