<?php
	Class LoguinDao{
		
		function ConfirmarLoguin($loguin, $senha){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);
			$c=0;
			$stmt = $conn->query("SELECT * FROM usuario where loguin = '$loguin' and senha = '$senha';");
			$resultado = $stmt->fetchAll();
			if(count($resultado)==1)
			{
				return true;
			}else{
				return false;
			}
		}

	}

?>