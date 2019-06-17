<?php
    // Nas linhas abaixo você poderá colocar as informações do Banco de Dados.
    $host = "localhost:3309"; 	// Nome ou IP do Servidor
    $user = "root"; 			// Usuário do Servidor MySQL
    $senha = "1234"; 			// Senha do Usuário MySQL
    $banco = "bd_convenes"; 	// Nome do seu Banco de Dados
	
		try {
			// Instancia o objeto PDO
			$pdo = new PDO('mysql:host='.$host.';dbname='.$banco, $user, $senha);
			// define para que o PDO lance exceções caso ocorra erros
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if (!$pdo) {
				echo "Problemas na conexão!";
				exit;
			}
		} catch (PDOException $exc) {
			echo "Problemas na conexão!";
			echo $exc->getMessage();
			exit;
		}
?>