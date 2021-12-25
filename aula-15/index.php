<!DOCTYPE html>
<html>
<head>
	<title>Projeto de Ajax</title>
</head>
<body onload="mostrarClientes()">

<label>Buscar cliente: </label> 
<input type="text" id="nome" placeholder="Entre com o nome" onkeyup="buscarUsuario(this.value)" /><br /><br />
	
<div id="info"></div>

<script type="text/javascript">
		
	var resultado = document.getElementById("info");

	function mostrarClientes() {
			
		var xmlhttp;
			
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				resultado.innerHTML = xmlhttp.responseText;
			}		
	   	}
			
		xmlhttp.open("GET", "servidor.php?nome=", true);
		xmlhttp.send();
	}


	function buscarUsuario(nome){

		var xmlhttp;
			
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}


		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				resultado.innerHTML = xmlhttp.responseText;
			}		
	   	}

		xmlhttp.open("GET", "servidor.php?nome=" + nome, true);
		xmlhttp.send();

	}

</script>

</body>
</html>

