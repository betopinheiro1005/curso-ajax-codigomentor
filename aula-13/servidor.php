<?php

require "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];

if( empty($nome) || empty($email) ){
	echo "<span style = 'color: red;'>Por favor, entre com nome e email</span>";
} else {
	$resultadoBD = mysqli_query($con, "INSERT INTO pessoas(nome, email) VALUES ('$nome', '$email')");
	echo "<span style = 'color: green;'>Obrigado " . $nome . " - " . $email . "</span>";
}

mysqli_close($con);

?>