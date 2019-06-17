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
	<?php
		include_once('conexao.php');

		// criação da linha do INSERT com a utilização de parâmetros de nome
		$sql = "insert into `bd_convenes`.`tb_produto` 
				(IDProduto, NomeProduto, QtdProduto, DTValProduto, PrecoProduto, DescricaoProduto, IDFornecedor) 
				values
				(:IDProduto, :NomeProduto, :QtdProduto, :DTValProduto, :PrecoProduto, :DescricaoProduto, :IDFornecedor)";
		
		// criando o objeto  para inserção
		$sqlinsert = $pdo->prepare($sql);    
	 
		// inclus?dos par?tros 
		// as informa?s est?sendo carregadas diretamente de POST[]
		// para cada entrada observa-se o tipo de dados PDO::PARAM	
		$sqlinsert ->bindParam(':IDProduto', $_POST['idpr'], PDO::PARAM_NULL); 
		$sqlinsert ->bindParam(':NomeProduto', $_POST['nome'], PDO::PARAM_STR);	
		$sqlinsert ->bindParam(':QtdProduto', $_POST['quan'], PDO::PARAM_STR);       
		$sqlinsert ->bindParam(':DTValProduto', $_POST['vali'], PDO::PARAM_STR);    
		$sqlinsert ->bindParam(':PrecoProduto', $_POST['prec'], PDO::PARAM_STR);
		$sqlinsert ->bindParam(':DescricaoProduto', $_POST['desc'], PDO::PARAM_STR); 
		$sqlinsert ->bindParam(':IDFornecedor', $_POST['idfo'], PDO::PARAM_STR); 
		
		// executa o objeto
		$sqlinsert->execute(); 
		
		$pdo = null;
	?>
	<h2>Produtos</h2><br>
	<h3> Incluido com Sucesso!</h3><br>
	<img src="img/rexcat.gif"><br>
	<a href="produtos.php"><input type="button" value="Voltar" id="botao"></a>
	</center>
</div>
<div class="espaco"></div>
</center>
</body>
</html>