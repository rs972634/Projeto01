<?php

 require_once 'usuario.php';
 $u = new Usuario;


?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>Rehtec Informatica</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
		<link rel="stylesheet" href="css/rehtec.css">
		<link rel="stylesheet" href="css/rehtec-mobile.css">

		<script src="lib/angularjs/angular.min.js"></script>

	</head>
	<body>
<header>
			
			<div id="menu-mobile-mask" class="visible-xs"></div>

			<div id="menu-mobile" class="visible-xs">
				
				<ul class="list-unstyled">
					
					<li><a href="#">Login</a></li>
					<li><a href="#">Cadastro</a></li>
					<li><a href="#">Loja</a></li>
				</ul>

				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
				</div>

			</div>
			
			<div class="container">
				<a href="index.php">
				<img id="logotipo" src="img/rehtec-logo.png" alt="Logotipo">
				</a>
			</div>

			<div class="header-black">
				
				<div class="container">

					<input type="search" id="input-search-mobile" class="visible-xs" placeholder="search...">
				
					<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
					<button id="btn-search" type="button"><i class="fa fa-search"></i></button>

					<ul class="pull-right">
						
					</ul>

				</div>

			</div>

			<div class="container">
				
				<div class="row">
					
					<nav id="menu" class="pull-right">
						<ul>
							
							<li><a href="login.php">Login</a></li>
							<li><a href="cadastro.php">Cadastro</a></li>
							<li><a href="shop">Loja</a></li>
							<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="search" id="input-search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
					</nav>

				</div>

			</div>			

		</header>


		<section>
			
			<div id="call-to-action">
				
				<div class="container">

					<div class="row text-center">
						<h2>Login</h2>
							
					</div>

					<div class="row">
						
					<div class="container" >
					    <a class="links" id="cadastro.html"></a>
					    <a class="links" id="paralogin"></a>
					    
					    <div class="content">      
					      <!--FORMULÁRIO DE LOGIN-->
					      <div id="login">
    
				<form method="post" >

							<fieldset>

								<input class="form-control" placeholder="Digite sua Email"  type="email" name="email" required ><br>

							
								<input class="form-control" placeholder="Digite sua Senha"  type="password" name="senha" maxlength="8"><br>
								
								<button type="submit" class="btn btn-lg btn-custon btn-success " style="margin-left:10px; margin-bottom:25px;
								padding: 8px 30px;text-transform: none;">Entrar </button><br>

						
                            </fieldset>

                            <?php

								//verificar se clicou no botao

								if(isset($_POST['email'])) {

									$email = addslashes($_POST['email']);
									$senha = addslashes($_POST['senha']);

								//verificar se esta preenchido

									if (!empty($email) && !empty($senha)) {

										if ($u->msgErro == "") {

											$u->conectar("teste","localhost","root","");

											if ($u->login($email,$senha)) {
												header("location: info.php");
												
											}else{
												?>
												<div class=" text-danger"><h6 class="text-center">Email ou senha incorreto!</h6></div>
												<?php
											}

										}else{
												?>
												<div class=" text-danger"><h6 class="text-center"><?php echo "Erro: ".$u->msgErro;?></h6></div>
												<?php

												
											
										}

									}else{
											?>
												<div class=" text-danger"><h6 class="text-center">Preencha todos os campos!</h6></div>
												<?php

									}
								}
?>   

                            

                            <h4 style="margin-top:25px; text-align: center;">Não tem conta?</h4><br>

                            <a href="cadastro.php" class="btn btn-lg btn-custon btn-primary " style="margin-left:15px;  padding-right:50px; padding-left: 50px; text-transform: none;">Cadastra-se</a> 



						</form>
	      </div>
	    </div>
	  </div> 

						</div>

					</div>

				</div>

			</section>

<footer>
			
			<div class="row row-cinza-claro">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-2 text-center hidden-xs">
							
							<img class="logotipo" src="img/rehtec-logo.png" alt="Logotipo">

						</div>
						<div class="col-md-10">
							
							<div class="row row-cols">
								<div class="col-md-4 col-popular-post hidden-xs">
									
									<h4>POPULAR POST</h4>

									<ul class="list-unstyled">
										<li>
										<h5>Microsoft envia alerta</h5>
											<time>Abril 03, 2020</time>
										</li>
										<li>
											<h5>Dicas para evitar fraudes</h5>
											<time>Abril 06, 2020</time>
										</li>

									</ul>

								</div>
								<div class="col-md-4 col-links hidden-xs">
									
									<h4>LINKS</h4>

									<ul class="list-unstyled">
										<li><a href="login.php"><i class="fa fa-angle-right"></i>Login</a></li>
										<li><a href="cadastro.php"><i class="fa fa-angle-right"></i>Cadastro</a></li>
										<li><a href="shop"><i class="fa fa-angle-right"></i>Loja</a></li>
									</ul>

								</div>
								<div class="col-md-4 col-get-in-touch">
									
									<h4 class="hidden-xs">GET IN TOUCH</h4>

									<address class="hidden-xs">
										<i class="fa fa-map-marker"></i> <span>Rua José Prefeito<br/>Vitória Santo Antão</span>
									</address>

									<p class="hidden-xs"><a href="tel:1855ORLCITY"><i class="fa fa-phone"></i>81 99136-8977</a></p>
									
									<div class="row-fluid visible-xs">
										<div class="col-xs-6">
											<a href="#" class="btn btn-footer "><i class="fa fa-map-marker"></i>Location</a>
										</div>
										<div class="col-xs-6">
											<a href="#" class="btn btn-footer"><i class="fa fa-phone"></i>Call</a>
										</div>
									</div>

									<ul class="list-unstyled list-socials">
										<li>
											<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
										</li>
										<li class="page-up">
											<a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>

								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="row row-cinza-escuro">
				
				<div class="container copyright-mobile">
					
					<p class="pull-left">Copyright © Rehtec. All rights reserved.</p>
					<p class="pull-right text-roxo">Created by Renata e Amanda</p>

				</div>

			</div>

		</footer>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/raty/lib/jquery.raty.js"></script>
		<script src="js/efeitos.js"></script>

	</body>
</html>