<nav>
	<a href="index.php">Accueil</a>
	<a href="profil.php">Profil</a>
	<a href="repertoire_commercant.php">Commerce</a>
	<a href="panier">Panier</a>
	<a href="admin_commercant.php">Admin</a>
	<a href="#">Se déconnecter</a>
</nav>
<?php
	if(isset($_SESSION['id']) && $_SESSION['id_droit'] == 50)
	{
		
	}
?>