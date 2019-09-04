<?php

	require "../controller/ocorrenciaController.php";
	$ocorrenciaController = new ocorrenciaController();
	$ocorrencia = $ocorrenciaController->listarOcorrencia($_GET['id']);
	echo $ocorrencia->id;

	if(isset($_GET['loguin'])){
		$loguin = $_GET['loguin'];
		$_SESSION['logado']=true;
	}else{
		$_SESSION['logado']=false;
	}
	
?>
<html>
	<head>
		<?php include ("../componentes/header.php");
		 ?>
		<title>Adicionar ocorrencias</title>
	</head>

	<body>
		<?php include("../componentes/navbar.php");?>
		
		<div class="container-fluid p-0">

	      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
	        <div class="my-auto">
	          	<h1 class="mb-0"><?php echo $ocorrencia->tipo." no bairro ".$ocorrencia->localidade."(".$ocorrencia->dia.")"; ?>
	          	</h1>
	          	<br/>
	          	<br/>

	          	<?php echo $ocorrencia->descricao.".".$ocorrencia->detalheLocal." no bairro ".$ocorrencia->localidade.". No data ".$ocorrencia->dia." às ".$ocorrencia->hora." horas.";  ?>
	          	<br/>
	          	<br/>
	          	<br/>
	          	<br/>
	          	<br/>
	          	<?php echo "denúncia feita por ".$ocorrencia->usuario_loguin;?>
	         </div> 	
	      </section>
		
	  </div>

	</body>
</html>

