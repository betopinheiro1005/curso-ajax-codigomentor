<!DOCTYPE html>
<html>
<head>
	<title>Ajax POST</title>
</head>
<body>


<label>Nome: </label><br />
<input type="text" id="nome" /><br /><br />

<label>Sobrenome: </label><br />
<input type="text" id="sobrenome" /><br /><br />

<input type="submit" value="Enviar" onclick="ajax_post();" />

<br /><br />

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
			var b = document.getElementById("sobrenome").value;

			var info_user = "nome=" + a + "&sobrenome=" + b;

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var mensagem = xmlhttp.responseText;
					resultado.innerHTML = mensagem;
		    	}
		    }	
			xmlhttp.open("POST", "servidor.php", true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
			xmlhttp.send(info_user);
		}	

</script>

</body>
</html>

