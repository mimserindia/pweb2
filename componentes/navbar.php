
			<!-- Bootstrap core JavaScript -->
				<script src="../vendor/jquery/jquery.min.js"></script>
				<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

				<!-- Plugin JavaScript -->
				<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

				<!-- Custom scripts for this template -->
				<script src="../js/resume.min.js"></script>

				<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
				  <a class="navbar-brand js-scroll-trigger" href="#page-top">
					<span class="d-block d-lg-none"> </span>
					<span class="d-none d-lg-block">
					</span>
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<?php if($_SESSION['logado'] == true){ 
						?>
					  <li class="nav-item">
					  	<?php if(isset($_GET['loguin'])){ ?>
						<a class="nav-link js-scroll-trigger" href="adicionarOcorrencia.php?loguin=<?php echo $_GET['loguin'] ?>">Adicionar Ocorrência</a>
						<?php }else{ ?>
						<a class="nav-link js-scroll-trigger" href="adicionarOcorrencia.php">Adicionar Ocorrência</a>
						<?php } ?>
					  </li>
					<?php }else{ ?>
					  <li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="index.php">Login</a>
					  </li>
					<?php } ?>
					  <li class="nav-item">
					  	<?php if(isset($_GET['loguin'])){ ?>
						<a class="nav-link js-scroll-trigger" href="ocorrencias.php?loguin=<?php echo $_GET['loguin'] ?>">Ocorrências</a>
						<?php }else{ ?>
						<a class="nav-link js-scroll-trigger" href="ocorrencias.php">Ocorrências</a>
						<?php } ?>
					  </li>
					  <?php if($_SESSION['logado'] == true){ 
						?>
					  <li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="index.php">Sair da Conta</a>
					  </li>
					<?php }else{} ?>
					</ul>
				  </div>
				</nav>