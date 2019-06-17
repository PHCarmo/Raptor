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
	<h2>Produtos</h2><br>
	<div id="tabela">
	<?php
	include_once('conexao.php');

	// ajustando a instrução select para ordenar por produto
	$query = $pdo->query("select * from `bd_convenes`.`tb_produto` order by NomeProduto;");

	echo "<table border='1px' bgcolor='FFFFFF'>";
	echo "<tr><th width='30px' align='center'>Id</th><th width='150px'>Produto</th><th width='250px'>Descrição</th><th>Quantidade</th><th width='100px'>Data de Validade</th><th width='70px'>Valor</th><th>Fornecedor</th><th>Alterar</th><th>Excluir</th><tr>";

	while($dados = $query->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
		echo "<td align='center'>". $dados['IDProduto']."</td>";
		echo "<td align='center'>". $dados['NomeProduto']."</td>";	
		echo "<td align='center'>". $dados['DescricaoProduto']."</td>";
		echo "<td align='center'>". $dados['QtdProduto']."</td>";
		echo "<td align='center'>". $dados['DTValProduto']."</td>";
		echo "<td align='center'> R$ ". $dados['PrecoProduto']."</td>";	
		echo "<td align='center'>". $dados['IDFornecedor']."</td>";

		$id = $dados['IDProduto'];

		echo "<td align='center'><a href='form_alterar-produtos.php?id=$id'><input type='button' id='lapis' value='✏'></a></td>";
		echo "<td align='center'><a href='deletar-produtos.php?id=$id'><input type='button' id='tesoura' value='✂'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
	
	$pdo = null;
	?>
	</div>
	<br>
	<a href="form_produtos.php"><input type="button" name="add" value="Adicionar" id="botao"></a>
</div>
<div class="espaco"></div>
</center>
</body>
</html>