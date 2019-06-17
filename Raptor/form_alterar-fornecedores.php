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
		
		$sqlconsulta = $pdo->prepare("select * from `bd_convenes`.`tb_fornecedores` where IDFornecedor = :codigo;");
		$sqlconsulta->bindParam(':codigo', $_GET['id'], PDO::PARAM_INT);
		$sqlconsulta->execute();
		$dados = $sqlconsulta->fetch(PDO::FETCH_ASSOC);
		$id = $_GET['id'];
		$pdo = null;
	?>

	<center>
		<form name="form" method="post" action="alterar-fornecedores.php">
			<center><h2>Fornecedores</h2></center><h3>

			<table cellspacing="20"><tbody><tr><td>
				<table cellspacing="20">
				<tr><td>ID Fornecedor<br><input type="text" name="idfo" id="campos" placeholder="Ex.: 32" value="<?php echo $dados['IDFornecedor']; ?>" readonly></td></tr>

				<tr><td>CNPJ<br><input type="text" name="cnpj" id="campos" placeholder="Ex.: 90.132.169/0001-98" value="<?php echo $dados['CNPJFornecedor']; ?>"></td></tr>

				<tr><td>Nome<br><input type="text" name="nome" id="campos" placeholder="Ex.: Samsung" value="<?php echo $dados['NomeFornecedor']; ?>"></td></tr>

				<tr><td>Endereço<br><input type="text" name="ende" id="campos" placeholder="Ex.: Av. José Ribeiro, 2700" value="<?php echo $dados['EnderecoFornecedor']; ?>"></td></tr>

				<tr><td>Telefone<br><input type="text" name="tele" id="campos" placeholder="Ex.: (11) 4735-6238" value="<?php echo $dados['TelefoneFornecedor']; ?>"></td></tr>

				<tr><td>E-mail<br><input type="text" name="emai" id="campos" placeholder="Ex.: raptor@exemplo.com" value="<?php echo $dados['EmailFornecedor']; ?>"></td></tr>

				<tr><td>Inscrição Estadual<br><input type="text" name="insc" id="campos" placeholder="Ex.: 388.108.598.269" value="<?php echo $dados['IEFornecedor']; ?>"></td></tr>
				</tbody></table>
				</td>

				<td><img src="img/raptorcat.gif" width="400" height="300"></td></tr></tbody></table>

			<center><input type="reset" value="Limpar" id="botao">
			<input type="submit" value="Enviar" id="botao"></center>
		
	</h3></form></center>
</div>
<div class="espaco"></div>
</center>
</body>
</html>