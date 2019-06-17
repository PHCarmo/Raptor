<!DOCTYPE HTML>
<html>
<head>
	<title>Raptor - Fornecedores</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="img/icon.ico">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>
<body>

		<input type="checkbox" id="check">
		<label id="icone" for="check"><img src="img/garra.png" id="icon-menu"></label>
		<div class="barra">
			<nav>
				<a href=""><div class="link"><center>Menu</center></div></a>
				<a href="index.php"><div class="link"><img src="img/menu-icone1.png" class="icone-menu">&nbsp;Home</div></a>
				<a href="fornecedores.php"><div class="link"><img src="img/menu-icone2.png" class="icone-menu">&nbsp;Fornecedores</div></a>
				<a href="produtos.php"><div class="link"><img src="img/menu-icone3.png" class="icone-menu">&nbsp;Produtos</div></a>
				<a href="clientes.php"><div class="link"><img src="img/menu-icone4.png" class="icone-menu">&nbsp;Clientes</div></a>
				<a href="cartao.php"><div class="link"><img src="img/menu-icone5.png" class="icone-menu">&nbsp;Cartão</div></a>
				<a href="venda.php"><div class="link"><img src="img/menu-icone6.png" class="icone-menu">&nbsp;Vendas</div></a>
			</nav>
		</div>
		<img src="img/raptor-logo.png" id="logo-menu" align="right">
		<div class="menu">
			<h1>menu</h1>
		</div>
<center>
<div class="espaco"></div>
<div class="conteudo">
	<?php
		include_once('conexao.php');

		$sqlconsulta = $pdo->prepare("delete from  `bd_convenes`.`tb_fornecedores` where IDFornecedor = :codigo;");
		$sqlconsulta->bindParam(':codigo', $_GET['id'], PDO::PARAM_INT);
		$sqlconsulta->execute();
		$pdo = null;
	?>
	<h2>Fornecedores</h2><br>
	<h3>Deletado com Sucesso!</h3><br>
	<img src="img/rexcat.gif"><br>
	<a href="fornecedores.php"><input type="button" id="botao" value="Voltar"></a>
</div>
<div class="espaco"></div>
</center>
</body>
</html>