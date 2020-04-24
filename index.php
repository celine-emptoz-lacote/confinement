<<<<<<< HEAD
=======
<?php session_start(); ?>
>>>>>>> Coralie
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<title>Accueil</title>
	</head>

	<body id="index-body">
		<header>
<<<<<<< HEAD
			<nav>
				<a href="#">Accueil</a>
				<a href="#">Profil</a>
				<a href="#">Commerce</a>
				<a href="#">Panier</a>
				<a href="#">Admin</a>
				<a href="#">Se déconnecter</a>
			</nav>
=======
			<?php include('header.php'); ?>
>>>>>>> Coralie
		</header>
		
		<main>
			<section class="first-section"> 
				<section class="connect">
					<h1>Bienvenue sur </h1>
					<h1 class="index-shop-name"> Marseille'shop</h1>
					<a href="# ">Se connecter</a>
				</section>
				<section class="index-image-shop">
					<img src="src/images/marseilleshop.png" alt="Photo illustration">
				</section>
			</section>

			<section class="offres">
				<h1>Nos offres</h1>
				<div class="div_offre">
					<div>
						<img src="src/images/alimentaire.png" alt="">  
						<p class="p1">Alimentaire</p>
					</div>
					<div>
						<img src="src/images/diy.png" alt="">
						<p class="p2">Bricolage</p>
					</div>
					<div>
						<img src="src/images/textile.png" alt="">
						<p class="p3">Textile</p>
					</div>
				</div>
				<a href="#" class="offres_a">Acceder à la boutique</a>
			</section>
		</main>

		<footer>
<<<<<<< HEAD
			<nav class="nav_footer">
				<a href="#">Accueil</a>
				<a href="#">Profil</a>
				<a href="#">Commerces</a>
				<a href="#">Panier</a>
				<a href="#">Admin</a>
				<a href="#">Se déconnecter</a>
			</nav>
=======
			<?php include('footer.php'); ?>
>>>>>>> Coralie
		</footer>
	</body>
</html>