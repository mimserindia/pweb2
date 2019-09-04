<?php
	Class CadastroDao{
		

		function CadastrarUsuario($loguin, $senha){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);
			$c=0;
			$stmt = $conn->query("SELECT * FROM usuario where loguin = '$loguin';");
			$teste = $stmt->fetchAll();
			if(count($teste)>0)
			{
				return false;
			}else{

				$stmt = $conn->prepare(
				    "INSERT INTO usuario (loguin, senha) VALUES (?, ?)"
				);
				
				$stmt->execute([$loguin,$senha]);
				return true;
			}
		}
	}

?>