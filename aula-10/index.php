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

<button onclick="mostrarUsuarios();">Mostrar usuários</button><br><br>

<div id="info"></div>

<script type="text/javascript">
		
		var resultado = document.getElementById("info");

		function mostrarUsuarios() {
			
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
		    };

   			xmlhttp.open("GET", "servidor.php", true);
			xmlhttp.send();
	
		}	

</script>

</body>
</html>

