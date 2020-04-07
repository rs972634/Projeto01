<?php
 require_once 'usuario.php';
 $u = new Usuario;


?>
<!DOCTYPE html>
<html>
		<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
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
						<h2>Cadastro</h2>
						
					</div>

					<div class="row">
						
	
 <body>
 	<div class="container align-self-center">
 
 		<div class="ml-auto mr-auto mt-3 form-group">
            <form method="post">
              
              <input class="form-control"  type="text" name="nome" placeholder="Seu nome"maxlength="50" required><br>

              
              <input class="form-control" type="email" name="email" placeholder="Seu E-mail" maxlength="60"required ><br>

              
              <input class="form-control" type="password" name="senha" placeholder="Senha" maxlength="8" required ><br>

              
              <input class="form-control" type="password" name="confsenha" placeholder="Confirmar senha" maxlength="8" required><br>

                            <?php

//verificar se clicou no botao

					if(isset($_POST['nome'])) {

					    $nome = addslashes($_POST['nome']);
					    $email = addslashes($_POST['email']);
					    $senha = addslashes($_POST['senha']);
					    $confsenha = addslashes($_POST['confsenha']);


					//verificar se esta preenchido


					    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confsenha)) {
					        
					        $u->conectar("teste","localhost","root","");

					        if ($u->msgErro == "") {

					            if ($senha == $confsenha) {

					                if ($u->cadastrar($nome,$email,$senha)) {

					                    ?>
					                    <div class=" text-success"><h6 class="text-center">Cadastrado com sucesso! Acesse para entrar!</h6></div>
					                    <?php

                    
						                }else{

						                     ?>
						                    <div class=" text-danger"><h6 class="text-center">Email já cadastrado!</h6></div>
						                    <?php

						            
						                }
						                

						            } else {

						                    ?>
						                    <div class=" text-danger"><h6 class="text-center">Senha e confirmar senha não corresponde!</h6></div>
						                    <?php

						              
						            }
						            

						        }else{

						             ?>
						             <div class=" text-danger"><h6 class="text-center"><?php echo "Erro: ".$u->msgErro;?></h6></div>
						             <?php


						        }

						    } else {

						            ?>
						            <div class=" text-danger"><h6 class="text-center">Preencha todos os campos</h6></div>
						            <?php

						        
						    }
						    
						}

						?>



			              <button type="submit" class="btn btn-lg btn-custon btn-success " style="padding-top: 5px; margin-left:60px; margin-top:15px; margin-bottom:0px;padding-right:80px; padding-left: 80px; text-transform: none;">Cadastre-se</button>

			               <button type="submit" class="btn btn-lg btn-custon btn-success " style="padding-top: 5px; margin-left:60px;  margin-top:15px; margin-bottom:0px;padding-right:80px; padding-left: 80px; text-transform: none;"><a><a href="login.php" style="color: white;">Faça o Login</a></button>

			            </form>
          

    



						</form>
										</div>
									</div>
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

									<	<ul class="list-unstyled">
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