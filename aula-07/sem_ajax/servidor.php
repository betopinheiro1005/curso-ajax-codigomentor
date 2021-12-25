<style type="text/css">
.ok{
	color: green;
	font-size: 16px;
	font-family: 'Arial';
	margin: 10px;
}
.erro{
	color: red;
	font-size: 16px;	
	font-family: 'Arial';
	margin: 10px;
}
</style>

<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

if(empty($nome) || empty($sobrenome)){
	echo "<h5 class='erro'>Por favor, entre com seu nome e sobrenome!</h5>";	
} else {
	echo "<h5 class='ok'\>Muito obrigado, " . $nome . " " . $sobrenome . "!</h5>";
}

?>