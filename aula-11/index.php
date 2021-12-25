<!DOCTYPE html>
<html>
<head>
	<title>Ajax - MySQL</title>
	<style type="text/css">
		table {
			width: 30%;
			border-collapse: collapse;
			-webkit-box-shadow: 7px 7px 23px -4px rgba(0, 0, 0, 0.75);
			-moz-box-shadow: 7px 7px 23px -4px rgba(0, 0, 0, 0.75);
			box-shadow: 7px 7px 23px -4px rgba(0, 0, 0, 0.75);
		}
		table, td, th {
			border: 1px solid #cccccc;
			padding: 5px;
		}
		th {
			text-align: left;
		}
		tr:nth-child(even){
			background-color: #E8ECED;
		}
	</style>
</head>
<body>

<form>
	<select onchange="mostrarUsuario(this.value)">
		<option value="">Selecione uma pessoa</option>
		<option value="1">Beto</option>
		<option value="2">Maria</option>
		<option value="3">Steve</option>
		<option value="4">Ana</option>
		<option value="5">Luis</option>
		<option value="6">Carmen</option>
		<option value="7">Boris</option>
		<option value="8">Gustavo</option>
	</select>
</form>

<br>

<div id="info"></div>

<script type="text/javascript">
		
		var resultado = document.getElementById("info");

		function mostrarUsuario(usuarioSelecionado) {
			
			var xmlhttp;
			
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			if(usuarioSelecionado === ""){
				resultado.innerHTML = "";
			} else {
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						resultado.innerHTML = xmlhttp.responseText;
					}		
		    	}
   				xmlhttp.open("GET", "servidor.php?usuario=" + usuarioSelecionado, true);
				xmlhttp.send();
			}
		}	

</script>

</body>
</html>

