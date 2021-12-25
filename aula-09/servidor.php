<?php

$pessoas = array("Ana", "Alberto", "Beto", "Cindy", "David", "Esteban", "Fiorela", "Guisela", "Henry", "Irma", 
				 "Jeferson", "Kathy", "Liz", "Nancy", "Oscar", "Pedro", "Amelia", "Rocio", "Doris", "Erica",
				 "Emilia", "Susan", "Teresa", "Ursula", "Victor", "Liliana", "Ernesto", "Willy", "Viviana");

$nome = $_GET['nome'];

$sugestao = "";

if ($nome !== "") {
	$nome = strtolower($nome);
	$quantCaracteres = strlen($nome);
	foreach($pessoas as $pessoa){
		$nomeNoServidor = substr($pessoa, 0, $quantCaracteres);
		if(stristr($nome, $nomeNoServidor) !== false){
			if($sugestao === ""){
				$sugestao = $pessoa;
			} else {
				$sugestao .= ", $pessoa";
			}
		}
	}
} 

echo $sugestao === "" ? "Não foi encontrado" : $sugestao;

?>