<?php
require "../model/ocorrenciaDao.php";

	class ocorrenciaController{

		function CadastrarOcorrencia($descricao, $dia, $hora, $tipo, $loguin, $local, $detalhe){
			$ocorrenciaDao = new OcorrenciaDao();
			$ocorrenciaDao->CadastrarOcorrencia($descricao, $dia, $hora, $tipo, $loguin, $local, $detalhe);
				header("Location:../views/adicionarOcorrencia.php?loguin=$loguin");

		}

		function listarOcorrencias(){
			$ocorrenciaDao = new OcorrenciaDao();
			return $ocorrenciaDao->listarOcorrencias();
		}

		function listarOcorrencia($id){
			$ocorrenciaDao = new OcorrenciaDao();
			return $ocorrenciaDao->listarOcorrencia($id);
		}
	}

	$ocoController = new ocorrenciaController();

	if(isset($_GET['loguin']) && isset($_POST['descricao']) && isset($_POST['tipo']) && isset($_POST['dtLocal']) && isset($_POST['dia']) && isset($_POST['hora']) && isset($_POST['local'])){

		$ocoController->CadastrarOcorrencia($_POST['descricao'], $_POST['dia'], $_POST['hora'], $_POST['tipo'], $_GET['loguin'], $_POST['local'], $_POST['dtLocal']);

	}

?>