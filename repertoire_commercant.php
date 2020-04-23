<?php
	session_start();
?>
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
			<?php include('header.php'); ?>
		</header>
    <main>
        <section class="first-section"> 
            <section class="connect">
                <h1 class="index-shop-name"> Marseille'shop</h1>
                <h2>Boutique</h2>
               
            </section>
            <section class="index-image-shop">
                <img src="src/images/marseilleshop.png" alt="Photo illustration">
            </section>
            
        </section>
		<br/>
		<br/>
		<br/>
		<br/>
		  <h1>Commerces Alimentaires</h1>
		<?php
			
			$connexion = mysqli_connect('localhost','root','','confinement');
			$categories = "SELECT *  FROM utilisateurs_commercants";
			$reg = mysqli_query($connexion, $categories);
			$resultat = mysqli_fetch_all($reg);
		
			foreach($resultat as $articles)
			{
		?>
        <section class="repertoire-shop">
            <section class="list-shop">
                <div class="repertoire-image">
                    <img src="<?php echo $articles[16],$articles[17]?>" alt="Photo boucherie">
                </div>
                <div class="repertoire-presentation">
                    <h2><?php echo $articles[3]?></h2>
                    <p><?php echo $articles[18]?></p>
                <div>
					<br/>
					<br/>
					<a class="connexion-input" href="page_commercant.php?id=<?php echo $articles[0] ?>">Voir la boutique</a>
            </section>
        </section>

		<?php
			
			}
		
		?>
      

    </main>

    
	<footer>
		<nav class="nav_footer">
			<a href="index.php">Accueil</a>
			<a href="profil.php">Profil</a>
			<a href="repertoire_commercant.php">Commerces</a>
			<a href="panier.php">Panier</a>
			<a href="admin_commercant.php">Admin</a>
			<a href="#">Se déconnecter</a>
		</nav>
	</footer>
</html>