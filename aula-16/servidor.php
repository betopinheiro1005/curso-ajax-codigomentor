<?php

require "conexao.php";

$resultado = mysqli_query($con, "SELECT * FROM pessoas");

while($row = mysqli_fetch_assoc($resultado))
{
	echo  "<div style = 'color: blue;'>" . $row['nome'] . "</div>";
	echo  "<input type='hidden' value = '" . $row['email'] . "'>";
}


mysqli_close($con);

?>