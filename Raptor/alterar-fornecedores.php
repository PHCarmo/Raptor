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
		// criação da linha do UPDATE com a utilização de parâmetros de nome
		$sql = "update `bd_convenes`.`tb_fornecedores` set 
						NomeFornecedor = :NomeFornecedor, 
	           			CNPJFornecedor = :CNPJFornecedor, 
	           			IEFornecedor = :IEFornecedor,  
	            		EnderecoFornecedor = :EnderecoFornecedor,  
	            		TelefoneFornecedor = :TelefoneFornecedor,
	            		EmailFornecedor = :EmailFornecedor
	           			where IDFornecedor = :IDFornecedor";

		// criando o objeto para alteração
		$sqlupdate = $pdo->prepare($sql);

		// inclusão dos parâmetros 
		// as informações estão sendo carregadas diretamente de POST[]
		//para cada entrada observa-se o tipo de dados PDO::PARAM  
		$sqlupdate->bindParam(':IDFornecedor', $_POST['idfo'], PDO::PARAM_NULL);                                
		$sqlupdate->bindParam(':NomeFornecedor', $_POST['nome'], PDO::PARAM_STR);       
		$sqlupdate->bindParam(':CNPJFornecedor', $_POST['cnpj'], PDO::PARAM_STR);    
		$sqlupdate->bindParam(':IEFornecedor', $_POST['insc'], PDO::PARAM_STR);
		$sqlupdate->bindParam(':EnderecoFornecedor', $_POST['ende'], PDO::PARAM_STR); 
		$sqlupdate->bindParam(':TelefoneFornecedor', $_POST['tele'], PDO::PARAM_STR); 
		$sqlupdate->bindParam(':EmailFornecedor', $_POST['emai'], PDO::PARAM_STR); 
	 	
		// executa o objeto
		$sqlupdate->execute();	
		
		$pdo = null;
	?>
	
	<h2>Fornecedores</h2><br>
	<h3> Alterado com Sucesso!</h3><br>
	<img src="img/rexcat.gif"><br>
	<a href="fornecedores.php"><input type="button" value="Voltar" id="botao"></a>
	</center>
</div>
<div class="espaco"></div>
</center>
</body>
</html>