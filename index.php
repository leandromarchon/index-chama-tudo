<!doctype html>
<html lang="pt-br">
<head>
	<title>Treinamento PHP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="principal">
	<div id="topo">
		<h1>Website</h1>
	</div>
	<div id="menu">
		<a href="index.php">Página Inicial</a> | <a href="index.php?page=servicos">Serviços</a> | <a href="index.php?page=portfolio">Portfólio</a> | <a href="index.php?page=contato">Contato</a>		
	</div>
	<div id="conteudo">
		<?php
		if(!isset($_REQUEST['page'])){
			include('principal.php');
		}
		else{
			include($_REQUEST['page'].".php");
		}
		?>
	</div>
	<div id="rodape">
		<p>&copy; Copyright - Todos os Direitos Reservados</p>
	</div>
</div>

</body>
</html>