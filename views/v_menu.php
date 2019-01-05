<body>

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"></i></a>

		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">

				<ul id="nav">

					<li><a href="../">Accueil</a></li>

					<li><a href="?page=about">A propos</a></li>

					<li><a href="?page=contact">Contact</a></li>

					<li><a href="?page=tarifs">Tarifs</a></li>

					<?php
						if(isset($_SESSION['connect'])){
					?>
					<li class="slidedown">
						<a href="#">Gestion du site</a>
						<ul>
							<li><a href="?page=edit">Gérer les photos</a></li>
							<li><a href="?page=editModele">Gérer les modèles</a></li>
						</ul>
					</li>

					<li><a href="?page=deconnexion">Déconnexion</a></li>

					<?php
						}
					?>

				</ul>

			</nav>
		</div>

		<div class="overlay-navigation-footer">

			<div class="container">

				<div class="row">

					<div class="col-sm-12 text-center">
						<p class="copyright font-alt m-b-0">© <?= date('Y') ?> Emilie Nguyen, All Rights Reserved.</p>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- /OVERLAY MENU -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- NAVIGATION -->
		<nav class="navbar navbar-custom navbar-transparent navbar-light navbar-fixed-top">

			<div class="container">

				<div class="navbar-header">
					<!-- YOU LOGO HERE -->
					<a class="navbar-brand" href="../">
						<!-- IMAGE OR SIMPLE TEXT -->
						<img src="assets/images/logo.svg" width="95" alt="emilie nguyen">
					</a>
				</div>

				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->

				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><a href="../" title="Home">Accueil</a></li>
					<li><a href="?page=about" title="About">A Propos</a></li>
					<li><a href="?page=contact" title="Contact">Contact</a></li>
					<li><a href="?page=tarifs" title="Tarifs">Tarifs</a></li>
				</ul>

			</div>

		</nav>
		<!-- /NAVIGATION -->
