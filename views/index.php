<html>
	<head>
	<?php include ("../componentes/header.php");
		$_SESSION['logado'] = false;
	?>
	<title>início</title>
	</head>

	<body>
		<?php include("../componentes/navbar.php");?>
		
		<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">LOGUIN
          </h1>
          <div class="subheading mb-5"><br/>Faça seu loguin<br/><br/>
          <form action="../controller/loguinController.php" method="POST" style="max-width: 18rem;">
            <div  class="form-group" >
                <input type="text"  class="form-control" placeholder="Nome de usuário"name = "loguin"/>
            </div>
            <br/>
            <div>
				<input type="password" class="form-control" placeholder="Senha" name = "senha"/>
	        </div>
	        <br/>
	        <div class="button">
				<button type = "submit" class="btn btn-danger">Login</button>
	        </div>
	            
	      </form>
	      
	      <?php if(isset($_GET['mensagem'])){
	      	echo $_GET['mensagem'];
	      } ?>

	      <div class="subheading mb-5"><br/>Ou Cadastre-se<br/><br/>
          <form action="../controller/cadastroController.php" method="POST" style="max-width: 18rem;">
            <div  class="form-group" >
                <input type="text"  class="form-control" placeholder="Nome de usuário"name = "loguin"/>
            </div>
            <br/>
            <div>
				<input type="password" class="form-control" placeholder="Senha" name = "senha"/>
	        </div>
	        <br/>
	        <div class="button">
				<button type = "submit" class="btn btn-danger">Cadastre-se</button>
	        </div>
	            
	      </form>
          
      </section>


	</body>
</html>