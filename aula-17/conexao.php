<?php

$mysql_host = 'localhost';
$mysql_db = 'Usuarios';
$mysql_user = 'root';
$mysql_password = '';

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(mysqli_connect_errno()){
	echo "Erro na conexão: " . mysqli_connect_error();
} 

?>