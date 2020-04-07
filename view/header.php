<!DOCTYPE html>
<html ng-app="shop">
<html ng-app="cadastro">
<html ng-app="login">
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
										<li><a href="login.php"><i class="fa fa-angle-right"></i>Login</a></li>
										<li><a href="cadastro.php"><i class="fa fa-angle-right"></i>Cadastro</a></li>
										<li><a href="shop"><i class="fa fa-angle-right"></i>Loja</a></li>
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
