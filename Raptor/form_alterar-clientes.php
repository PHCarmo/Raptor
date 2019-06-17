<!DOCTYPE HTML>
<html>
<head>
	<title>Raptor - Clientes</title>
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
		
		$sqlconsulta = $pdo->prepare("select * from `bd_convenes`.`tb_clientes` where IDCliente = :codigo;");
		$sqlconsulta->bindParam(':codigo', $_GET['id'], PDO::PARAM_INT);
		$sqlconsulta->execute();
		$dados = $sqlconsulta->fetch(PDO::FETCH_ASSOC);
		$id = $_GET['id'];
		$pdo = null;
	?>
	<center>
	<form name="form" method="post" action="alterar-clientes.php">
			<center><h2>Clientes</h2></center><h3>

			<table cellspacing="20"><tbody><tr><td>
				<table cellspacing="20">

				<tr><td>ID Cliente<br><input type="text" name="idcl" id="campos" placeholder="Ex.: 24" value="<?php echo $dados['IDCliente']; ?>" readonly></td></tr>

				<tr><td>Nome<br><input type="text" name="nome" id="campos" placeholder="Ex.: Júlio César" value="<?php echo $dados['NomeCliente']; ?>"></td></tr>

				<tr><td>Data de Nascimento<br><input type="text" name="dtna" id="campos" placeholder="Ex.: 20/10/1996" value="<?php echo $dados['DtNascCliente']; ?>"></td></tr>

				<?php $sexo = $dados['SexoCliente']; ?>
				<tr><td>Sexo<br>
				<?php 
					if($sexo == 'Masculino'){
						echo "<input type='radio' name='sexo' value='Masculino' checked='checked'>Masculino<br>
							<input type='radio' name='sexo' value='Feminino'>Feminino";
					}
					else if($sexo == 'Feminino'){
						echo "<input type='radio' name='sexo' value='Masculino'>Masculino<br>
							<input type='radio' name='sexo' value='Feminino' checked='checked'>Feminino";
					}
				?>
				</td></tr>
				
				<tr><td>RG<br><input type="text" name="rg" id="campos" placeholder="Ex.: 55.944.700-0" value="<?php echo $dados['RGCliente']; ?>"></td></tr>

				<tr><td>CPF<br><input type="text" name="cpf" id="campos" placeholder="Ex.: 123.456.789-00" value="<?php echo $dados['CPFCliente']; ?>"></td></tr>

				<tr><td>Endereço<br><input type="text" name="ende" id="campos" placeholder="Ex.: Av. José Ribeiro, 2700" value="<?php echo $dados['EnderecoCliente']; ?>"></td></tr>

				<tr><td>Telefone<br><input type="text" name="tele" id="campos" placeholder="Ex.: (11) 4735-6238" value="<?php echo $dados['TelefoneCliente']; ?>"></td></tr>

				<tr><td>E-mail<br><input type="text" name="emai" id="campos" placeholder="Ex.: raptor@exemplo.com" value="<?php echo $dados['EmailCliente']; ?>"></td></tr>

				<?php $tipo = $dados['TipoCliente']; ?>
				<tr><td>Tipo<br>
				<?php 
					if($tipo == 'Pessoa Física'){
						echo "<input type='radio' name='tipo' value='Pessoa Física' checked='checked'>Pessoa Física<br>
							<input type='radio' name='tipo' value='Pessoa Jurídica'>Pessoa Jurídica";
					}
					else if($tipo == 'Pessoa Jurídica'){
						echo "<input type='radio' name='tipo' value='Pessoa Física'>Pessoa Física<br>
							<input type='radio' name='tipo' value='Pessoa Jurídica' checked='checked'>Pessoa Jurídica";
					}
				?>
				</td></tr>

				<tr><td>CNPJ<br><input type="text" name="cnpj" id="campos" placeholder="Ex.: 47.782.996/0001-06" value="<?php echo $dados['CNPJCliente']; ?>"></td></tr>
				</tbody></table>
				</td>

				<td><img src="img/8bit.gif" width="312" height="263"></td></tr></tbody></table>

			<center><input type="reset" value="Limpar" id="botao">
			<input type="submit" value="Enviar" id="botao"></center>
		
	</h3></form></center>
</div>
<div class="espaco"></div>
</center>
</body>
</html>