<?php
    // Nas linhas abaixo voc� poder� colocar as informa��es do Banco de Dados.
    $host = "localhost:3309"; 	// Nome ou IP do Servidor
    $user = "root"; 			// Usu�rio do Servidor MySQL
    $senha = "1234"; 			// Senha do Usu�rio MySQL
    $banco = "bd_convenes"; 	// Nome do seu Banco de Dados
	
		try {
			// Instancia o objeto PDO
			$pdo = new PDO('mysql:host='.$host.';dbname='.$banco, $user, $senha);
			// define para que o PDO lance exce��es caso ocorra erros
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if (!$pdo) {
				echo "Problemas na conex�o!";
				exit;
			}
		} catch (PDOException $exc) {
			echo "Problemas na conex�o!";
			echo $exc->getMessage();
			exit;
		}
?>