<?php

	require "../controller/ocorrenciaController.php";
	$ocorrenciaController = new ocorrenciaController();
	$ocorrencias = $ocorrenciaController->listarOcorrencias();
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
	          	<h1 class="mb-0">OCORRENCIAS
	          	</h1>
	          	<br/>
	          	<br/>
	          	<br/>
	          	<br/>
				<?php
	         	foreach($ocorrencias as $oco){
	         		if($_SESSION['logado']==true){
	      		?>
			      		<a href="ocorrencia.php?loguin=<?php echo $loguin; ?>&id=<?php echo $oco['id']; ?>"> <?php
			      	}else{ ?>
			      		<a href="ocorrencia.php?id=<?php echo $oco['id']; ?>"> <?php 
			      	} ?>

				          	<div class="subheading mb-5"><h2><?php echo $oco['tipo'].' no bairro '.$oco['localidade'].'('.$oco['dia'].')'; ?></h2>
								
				        	</div>
			        	</a>
		        <?php } ?>
	      </section>



	</body>
</html>