<!DOCTYPE html>
<html>
<head>
	<title>Projeto de Ajax</title>
	<style type="text/css">
		button{
			padding: 15px;
			margin-left: 42%;
			font-size: 14px;
			cursor: pointer;
		}
		div#overlay{
			display: none;
			z-index: 2;
			background: #000000;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 10px;
			left: 10px;
			text-align: center;
		}
		div#info_user{
			display: none;
			z-index: 3;
			margin: 100px auto 0px auto;
			background: #ffffff;
			color: #000000;
			position: relative;
			width: 400px;
			height: 250px;
			border: 4px solid #cccccc;
			font-size: 18px;
		}
		div#wrapper{
			position: absolute;
			top: 40px;
		}
		#info{
			padding: 20px;
		}
		#titulo{
			width: 100%;
			height: 12%;
			background: #e9e9e9;
			padding: -20px;
			text-align: center;
			font-family: arial;
			font-size: 18px;
			padding-top: 15px;
		}
	</style>
</head>
<body onload="mostrarClientes()">

<label>Buscar cliente: </label> 
<input type="text" id="nome" placeholder="Entre com o nome" onkeyup="buscarUsuario(this.value)" /><br /><br />

<div id="wrapper">
	<div id="mostrar"></div>
</div>
	
<div id="overlay"></div>

<div id="info_user">
	<div id="titulo">Informação pessoal</div>
	<p id="info"></p>
	<button onclick="toggleOverlay(this)">Fechar</button>
</div>

<script type="text/javascript">
		
	var resultado = document.getElementById("mostrar");

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

	function toggleOverlay(elemento){
		var overlay = document.getElementById("overlay");
		var info_user = document.getElementById("info_user");
		var info = document.getElementById("info");

		overlay.style.opacity = .6;

		if(overlay.style.display == "block"){
			overlay.style.display = "none";
			info_user.style.display = "none";
		} else {
			overlay.style.display = "block";
			info_user.style.display = "block";
		}

		var nome = elemento.innerHTML;
		var email = elemento.nextSibling.value;
		// console.log(nome);
		// console.log(email);
		info.innerHTML = "<strong>Nome: </strong>" + nome + "<br />" + 
						"<strong>Email: </strong>" + email + "<br />";	

	}

</script>

</body>
</html>

