<nav>
	<a href="index.php">Accueil</a>
	<?php
		if(isset($_SESSION['id']))
		{
			echo '<a href="profil.php">Profil</a>';
		}
	
		echo '<a href="repertoire_commercant.php">Commerce</a>';
	
		
	
		if(isset($_SESSION['id']))
		{
			echo '
			<a href="panier.php">Panier</a>
			<a href="deconnexion.php">Se déconnecter</a>';
		}
	
		else
		{
			echo '<a href="connexion.php">Se connecter</a>';
		}
	?>
</nav>