<?php
require "../model/listasDao.php";

	class listasController{

		function arrayLocal(){
			$listasDao = new listasDao();
			return $listasDao->arrayLocal();
			
		}
		function arrayTipo(){
			$listasDao = new listasDao();
			return $listasDao->arrayTipo();
			
		}

	}


?>