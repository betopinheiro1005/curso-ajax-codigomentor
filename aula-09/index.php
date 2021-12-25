<!DOCTYPE html>
<html>
<head>
	<title>Busca de usuário em servidor</title>
</head>
<body>

	<form>
		<label>Buscar pessoa: </label>
		<input type="text" onkeyup="mostrarSugestao(this.value)"><br /><br />
	</form>
	
	<label>Sugestões: </label>
	<span id="info"></span>


<script type="text/javascript">
		
		var resultado = document.getElementById("info");

		function mostrarSugestao(usuario) {
			
			var xmlhttp;
			
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			if(usuario.length === 0){
				document.getElementById("info").innerHTML = "";
			} else {
				xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					resultado.innerHTML = xmlhttp.responseText;
				}		
		    };

   			xmlhttp.open("GET", "servidor.php?nome=" + usuario, true);
			xmlhttp.send();
	
			}
		}	

</script>

</body>
</html>

