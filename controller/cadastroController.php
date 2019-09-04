<?php
require "../model/cadastroDao.php";

	class cadastroController{

		function CadastrarUsuario($loguin, $senha){
			$cadastroDao = new cadastroDao();
			$retorno = $cadastroDao->CadastrarUsuario($loguin, $senha);
			if($retorno == true){
				header("Location:../views/index.php?mensagem=usuario cadastrado");
			}else{
				header("Location:../views/index.php?mensagem=usuario já existe, crie outro");
			}
		}

	}

	$cadController = new cadastroController();

	if(isset($_POST['loguin']) && isset($_POST['senha'])){

		$cadController->CadastrarUsuario($_POST['loguin'], $_POST['senha']);

	}

?>