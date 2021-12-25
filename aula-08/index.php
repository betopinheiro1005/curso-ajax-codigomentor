<!DOCTYPE html>
<html>
<head>
	<title>Calculadora JSON</title>
	<style type="text/css">
		tr:nth-child(even){
			background-color: #E8ECED;
		}
	</style>

</head>
<body>

	<label>Primeiro número: </label><br />
	<input type="text" id="n1"><br /><br />

	<label>Segundo número: </label><br />
	<input type="text" id="n2"><br /><br />

	<button onclick="executarAjax()">Clicar</button>

<br /><br />

<div id="info"></div>

<script type="text/javascript">
		var resultado = document.getElementById("info");

		function executarAjax() {
			
			var xmlhttp;
			
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var a = document.getElementById("n1").value;
			var b = document.getElementById("n2").value;

			console.log(a);
			console.log(b);

			var cadeia = "num1=" + a + "&num2=" + b;

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					resultado.innerHTML = xmlhttp.responseText;
		    	}
		    }	
			xmlhttp.open("GET", "servidor.php?" + cadeia, true);
			xmlhttp.send();
		}	

</script>


</body>
</html>

