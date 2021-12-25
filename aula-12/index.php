<!DOCTYPE html>
<html>
<head>
	<title>Ajax - MySQL</title>
	<style type="text/css">
		.lista{
			color: blue;
		}
	</style>
</head>
<body>

	<form>
		<label>Buscar pessoa: </label>
		<input type="text" placeholder="Entre com o nome" onkeyup="mostrarUsuario(this.value)"><br /><br />
	</form>
	
<div id="info"></div>

<script type="text/javascript">
		
		var resultado = document.getElementById("info");

		function mostrarUsuario(nome) {
			
			var xmlhttp;
			
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			if(nome.length === ""){
				resultado.innerHTML = "";
			} else {
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						resultado.innerHTML = xmlhttp.responseText;
					}		
		    	}
   				xmlhttp.open("GET", "servidor.php?nome=" + nome, true);
				xmlhttp.send();
			}
		}	

</script>

</body>
</html>

