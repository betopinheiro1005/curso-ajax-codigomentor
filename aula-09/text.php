<?php

$cadeia = "los colores primarios";
$resultado1 = substr($cadeia, 5);
echo $resultado1 . "<br>";
$resultado2 = substr($cadeia, 5, 6);
echo $resultado2 . "<br>";
$resultado3 = stristr($cadeia, "res");
echo $resultado3 . "<br>";

if(stristr($cadeia, "res")){
	echo "res foi encontrado!";
} else {
	echo "res não foi encontrado!";
}


?>