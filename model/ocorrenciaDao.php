<?php
	Class OcorrenciaDao{
		

		function CadastrarOcorrencia($descricao, $dia, $hora, $tipo, $loguin, $local, $detalhe){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);

			$stmt = $conn->prepare(
				    "INSERT INTO ocorrencia (descricao, dia, hora,tipo, usuario_loguin, localidade, detalheLocal ) VALUES (?, ?, ?, ?, ?, ?, ?);"
				);
				
				$stmt->execute([$descricao,$dia,$hora,$tipo,$loguin,$local,$detalhe]);

		}

		function listarOcorrencias(){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);
			$stmt = $conn->query("SELECT * FROM ocorrencia;");
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$ocorrencias = array();

			foreach ($result as $ocor) {
				array_push($ocorrencias, $ocor);
			}
			
			return $ocorrencias;
			
		}

		function listarOcorrencia($id){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);
			$stmt = $conn->query("SELECT * FROM ocorrencia where id= $id;");
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			$ocorrencia = $result;
			return $ocorrencia;
			

		}



	}

?>