<?php
	Class ListasDao{

		function arrayLocal(){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);
			$stmt = $conn->query("SELECT * FROM localidade");
			$locais = array();
			$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach ($array as $local) {
				array_push($locais, $local['localidade']);
			}

			return $locais;

		}


		function arrayTipo(){
			$conn = new PDO(
			    'mysql:host=localhost;dbname=projeto_criminal', 'root', ''
			);
			$stmt = $conn->query("SELECT * FROM tipo");
			$tipos = array();
			$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach ($array as $tipo) {
				array_push($tipos, $tipo['tipo']);
			}

			return $tipos;
		}
	}


?>