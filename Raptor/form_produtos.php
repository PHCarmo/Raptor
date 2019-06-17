<!DOCTYPE HTML>
<html>
<head>
	<title>Raptor - Produtos</title>
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
	<center>
		<form name="form" method="post" action="inserir-produtos.php">
			<center><h2>Produtos</h2></center><h3>

			<table cellspacing="20"><tbody><tr><td>
				<table cellspacing="10">
					<tr><td>Id Produto<br><input type="text" name="idpr" min="0" id="campos" placeholder="Ex.: 12"></td></tr>

					<tr><td>Nome<br><input type="text" name="nome" id="campos" placeholder="Ex.: Celular"></td></tr>

					<tr><td>Descrição<br><input type="text" name="desc" id="campos" placeholder="Ex.: Azul, 30cm"></td></tr>

					<tr><td>Validade<br><input type="text" name="vali" id="campos" placeholder="Ex.: 15/04/2018"></td></tr>

					<tr><td>Preço<br><input type="text" name="prec" id="campos" placeholder="Ex.: R$20,00"></td></tr>

					<tr><td>Quantidade<br><input type="text" name="quan" min="0" id="campos" placeholder="Ex.: 12"></td></tr>
					
					<tr><td>Id Fornecedor<br><input type="text" name="idfo" min="0" id="campos" placeholder="Ex.: 12"></td></tr>
				</tbody></table>
				</td>

				<td><img src="img/raptor-gamer.gif"></td></tr></tbody></table>

			<center><input type="reset" value="Limpar" id="botao">
			<input type="submit" value="Enviar" id="botao"></center>
		
	</h3></form></center>
</div>
<div class="espaco"></div>
</center>
</body>
</html>