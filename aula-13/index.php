<!DOCTYPE html>
<html>
<head>
	<title>Ajax - POST</title>
</head>
<body>

	<form>
		<label>Nome: </label><br>
		<input type="text" id="nome" placeholder="Entre com o nome" /><br /><br />

		<label>Email: </label><br>
		<input type="text" id="email" placeholder="Entre com o email" /><br /><br />

		<input type="button" value="Enviar" onclick="ajax_post()"><br><br>
	</form>
	
<div id="info"></div>

<script type="text/javascript">
		
		var resultado = document.getElementById("info");

		function ajax_post() {
			
			var xmlhttp;
			
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}


			var a = document.getElementById("nome").value;
			var b = document.getElementById("email").value;

			console.log(a);
			console.log(b);

			var info_user = "nome=" + a + "&email=" + b;

			console.log(info_user);

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					resultado.innerHTML = xmlhttp.responseText;
				}		
	    	}
			
			xmlhttp.open("POST", "servidor.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send(info_user);
		}

</script>

</body>
</html>

