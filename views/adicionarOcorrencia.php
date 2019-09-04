<?php

	require "../controller/listasController.php";
	$listasController = new listasController();
	$arrayTipos= $listasController->arrayTipo();
	$arrayLocais= $listasController->arrayLocal();
	$loguin = $_GET['loguin'];
?>
<html>
	<head>
		<?php include ("../componentes/header.php");
		$_SESSION['logado']=true; ?>
		<title>Adicionar ocorrencias</title>
	</head>

	<body>
		<?php include("../componentes/navbar.php");?>
		
		<div class="container-fluid p-0">

	      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
	        <div class="my-auto">
	          	<h1 class="mb-0">ADICIONAR OCORRENCIA
	          	</h1>

	          	<div class="subheading mb-5"><br/>Informe a ocorrencia<br/><br/>
		          <form action="../controller/ocorrenciaController.php?loguin=<?php echo $loguin; ?>" method="POST" style="max-width: 18rem;">
		            <div  class="form-group" >
		                <select class="form-control" name="tipo">
						    <option value="">Selecione o Tipo</option>
						    <?php 

						    	foreach($arrayTipos as $tipo){ ?>
		         					<option value="<?php echo $tipo; ?>"><?php echo $tipo; ?></option>

	      					<?php	
	      						}

						    ?>
						    
						</select>
		            </div>
		            <br/>
		            <div  class="form-group" >
		                <select class="form-control" name="local">
						    <option value="">Selecione o Bairro</option>
						    <?php 

						    	foreach($arrayLocais as $local){ ?>
		         					<option value="<?php echo $local; ?>"><?php echo $local; ?></option>

	      					<?php	
	      						}

						    ?>
						    
						</select>
		            </div>
		            <br/>
		            <div>
						<input type="text" class="form-control" placeholder="Descrição" name = "descricao"/>
			        </div>
			        <br/>
			        <div>
						<input type="text" class="form-control" placeholder="Detalhes do Local" name = "dtLocal"/>
			        </div>
			        <br/>
			        <div>
						<input type="date" class="form-control" placeholder="data" name = "dia"/>
			        </div>
			        <br/>
			        <div>
						<input type="time" class="form-control" placeholder="hora" name = "hora"/>
			        </div>
			        <br/>
			        <div class="button">
						<button type = "submit" class="btn btn-danger">Cadastrar</button>
			        </div>
			            
			      </form>

	         	<?php
	         	/*foreach($arrayPartidas as $partida){
		         	

	      		}*/?>
				
	        </div>
	      </section>



	</body>
</html>