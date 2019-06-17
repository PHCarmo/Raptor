<!DOCTYPE HTML>
<html>
<head>
	<title>Raptor - Ínicio</title>
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
		<h2>RAPTOR</h2><br>
		
		<center>

		<table><tbody><tr><td>
		<form name="form" method="post" action="">
			<center><h2>Login</h2></center><h3>

			<table cellspacing="20"><tbody><tr><td>
				<table cellspacing="20">
				<tr><td>Usuário<br><input type="text" name="user" id="campos" placeholder="Ex.: Aluno"></td></tr>

				<tr><td>Senha<br><input type="text" name="pass" id="campos" placeholder="Ex.: 1234"></td></tr>

				</tbody></table>
				</td></tr></tbody></table>

			<center><input type="reset" value="Limpar" id="botao">
			<input type="submit" value="Entrar" id="botao"></center>
		</h3></form></center><td>

		<img src="img/jurassicworld.gif" width="400" height="300"><td>
		
		<form name="form2" method="post" action="">
			<center><h2>Cadastro</h2></center><h3>

			<table cellspacing="20"><tbody><tr><td>
				<table cellspacing="20">
				<tr><td>Usuário<br><input type="text" name="user" id="campos" placeholder="Ex.: Aluno"></td></tr>

				<tr><td>Senha<br><input type="text" name="pass" id="campos" placeholder="Ex.: 1234"></td></tr>

				<tr><td>Confirmar Senha<br><input type="text" name="pass" id="campos" placeholder="Ex.: 1234"></td></tr>

				</tbody></table>
				</td></tr></tbody></table>

			<center><input type="reset" value="Limpar" id="botao">
			<input type="submit" value="Cadastrar" id="botao"></center>
	</h3></form></center>
	</td></td></tr></tbody></table>
	</center>
</div>
<div class="espaco"></div>
</center>
</body>
</html>