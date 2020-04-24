<<<<<<< HEAD
=======
<?php
	session_start();
?>
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
    
<<<<<<< HEAD
    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerce</a>
            <a href="#">Panier</a>
            <a href="#">Admin</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
=======
		<header>
			<?php include('header.php'); ?>
		</header>
>>>>>>> Coralie
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
<<<<<<< HEAD
        <h1>Commerces Alimentaire</h1>
        <section class="repertoire-shop">
            <section class="list-shop">
                <div class="repertoire-image">
                    <img src="src/images/images-boutiques/beef-1814638_1280.webp" alt="Photo boucherie">
                </div>
                <div class="repertoire-presentation">
                    <h2>Boucherie Jacques</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, temporibus neque commodi accusamus dolores corrupti quaerat recusandae, modi dolorum earum alias, corporis natus ab consectetur numquam maxime non! Inventore, ipsam!</p>
                <div>
            </section>
            <section class="list-shop">
                <div class="repertoire-image">
                    <img src="src/images/images-boutiques/Kaas.jpeg" alt="Photo boucherie">
                </div>
                <div class="repertoire-presentation">
                    <h2>Fromagerie</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, temporibus neque commodi accusamus dolores corrupti quaerat recusandae, modi dolorum earum alias, corporis natus ab consectetur numquam maxime non! Inventore, ipsam!</p>
                <div>
            </section>
            <section class="list-shop">
                <div class="repertoire-image">
                    <img src="src/images/images-boutiques/corbeille-de-fruits.jpg" alt="Photo boucherie">
                </div>
                <div class="repertoire-presentation">
                    <h2>Primeur</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, temporibus neque commodi accusamus dolores corrupti quaerat recusandae, modi dolorum earum alias, corporis natus ab consectetur numquam maxime non! Inventore, ipsam!</p>
                <div>
            </section>
            
        </section>



        </section>

=======
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
                </div>
					<br/>
					<br/>
					<a class="connexion-input" href="page_commercant.php?id=<?php echo $articles[0] ?>">Voir la boutique</a>
            </section>
        </section>

		<?php
			
			}
		
		?>
>>>>>>> Coralie
      

    </main>

<<<<<<< HEAD
    <footer>
        <nav class="nav_footer">
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerces</a>
            <a href="#">Panier</a>
            <a href="#">Admin</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </footer>
=======
    
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
>>>>>>> Coralie
</html>