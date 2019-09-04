<?php
require "../model/loguinDao.php";

	class loguinController{

		function ConfirmarLoguin($loguin, $senha){
			$loguinDao = new loguinDao();
			$retorno = $loguinDao->ConfirmarLoguin($loguin, $senha);
			if($retorno == true){
				$_SESSION['logado'] = true;
				header("Location:../views/adicionarOcorrencia.php?loguin=$loguin");
			}else{
				header("Location:../views/index.php?mensagem=usuario e senha incorretos");
			}
		}

	}

	$logController = new loguinController();

	if(isset($_POST['loguin']) && isset($_POST['senha'])){

		$logController->ConfirmarLoguin($_POST['loguin'], $_POST['senha']);

	}

?>