<nav>
	<a href="index.php">Accueil</a>
	<?php
		if(isset($_SESSION['id']))
		{
			echo '<a href="profil.php">Profil</a>';
		}
	
		echo '<a href="repertoire_commercant.php">Commerce</a>';
	
		if(isset($_SESSION['id']) && $_SESSION['id_droit'] == 50)
		{
			echo '<a href="admin_commercant.php">Admin Commerçant</a>';
		}
	
		if(isset($_SESSION['id']))
		{
			echo '
			<a href="panier">Panier</a>
			<a href="#">Se déconnecter</a>';
		}
	
		else
		{
			echo '<a href="connexion.php">Se connecter</a>';
		}
	?>
</nav>