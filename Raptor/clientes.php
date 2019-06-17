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
<div class="conteudoclientes">
	<h2>Clientes</h2><br>
	<div id="tabela">
	<?php
	include_once('conexao.php');

	// ajustando a instrução select para ordenar por produto
	$query = $pdo->query("select * from `bd_convenes`.`tb_clientes` order by NomeCliente;");

	echo "<table border='1px' bgcolor='FFFFFF'>";
	echo "<tr><th width='30px' align='center'>Id</th><th width='150px'>Nome</th><th width='100px'>Data de Nascimento</th><th>Sexo</th><th width='100px'>RG</th><th width='100px'>CPF</th><th width='100px'>Endereço</th><th width='100px'>Telefone</th><th width='100px'>E-mail</th><th>Tipo</th><th width='100px'>CNPJ</th><th>Alterar</th><th>Excluir</th><tr>";

	while($dados = $query->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
		echo "<td align='center'>". $dados['IDCliente']."</td>";
		echo "<td align='center'>". $dados['NomeCliente']."</td>";	
		echo "<td align='center'>". $dados['DtNascCliente']."</td>";
		echo "<td align='center'>". $dados['SexoCliente']."</td>";
		echo "<td align='center'>". $dados['RGCliente']."</td>";
		echo "<td align='center'>". $dados['CPFCliente']."</td>";	
		echo "<td align='center'>". $dados['EnderecoCliente']."</td>";
		echo "<td align='center'>". $dados['TelefoneCliente']."</td>";
		echo "<td align='center'>". $dados['EmailCliente']."</td>";
		echo "<td align='center'>". $dados['TipoCliente']."</td>";
		echo "<td align='center'>". $dados['CNPJCliente']."</td>";

		$id = $dados['IDCliente'];

		echo "<td align='center'><a href='form_alterar-clientes.php?id=$id'><input type='button' id='lapis' value='✏'></a></td>";
		echo "<td align='center'><a href='deletar-clientes.php?id=$id'><input type='button' id='tesoura' value='✂'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
	
	$pdo = null;
	?>
	</div>
	<br>
	<a href="form_clientes.php"><input type="button" name="add" value="Adicionar" id="botao"></a>
</div>
<div class="espaco"></div>
</center>
</body>
</html>