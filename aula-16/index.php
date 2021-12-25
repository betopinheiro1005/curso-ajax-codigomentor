<!DOCTYPE html>
<html>
<head>
	<title>Projeto de Ajax</title>
</head>
<body onload="mostrar_clientes()">

<label>Buscar cliente: </label> 
<input type="text" id="nome" placeholder="Entre com o nome" /><br /><br />
	
<div id="info"></div>

<script type="text/javascript">
		
		var resultado = document.getElementById("info");

		function mostrar_clientes() {
			
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
			
			xmlhttp.open("GET", "servidor.php", true);
			xmlhttp.send();
		}

</script>

</body>
</html>

