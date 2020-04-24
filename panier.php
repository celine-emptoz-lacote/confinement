<<<<<<< HEAD
=======
<?php
	session_start();
	$_SESSION['id'] = 1;
?>

>>>>>>> Coralie
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mon panier</title>
</head>
<body>
    
<<<<<<< HEAD
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="profil.php">Profil</a>
            <a href="repertoire_commercant.php">Commerce</a>
            <a href="panier.php">Panier</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
=======
	<header>
		<?php include('header.php'); ?>
	</header>
>>>>>>> Coralie
    <main>
        <section class="panier_section">
            <div>
                <h1>Marseille'shop</h1>
                <p>Panier</p>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </section>

<<<<<<< HEAD
        <section >
            <div class="panier_article">
                <img src="src/images/boeuf1.jpg" alt="Morceau de boeuf">
                <div>
                    <h2>Le boeuf charolais fermier "label rouge"</h2>
                    <p> <em><span class="panier_span"> 30€ </span> par kilo </em></p>
                    <div class="panier_buttons">
                        <button>-</button>
                        <p>0</p>
=======
        <section>
		<?php
			
			$connexion = mysqli_connect('localhost','root','','confinement');
			$panier = "SELECT *  FROM panier WHERE id_utilisateur='".$_SESSION['id']."'";
			$reg = mysqli_query($connexion, $panier);
			$resultat = mysqli_fetch_all($reg);
		
			foreach($resultat as $articles)
			{
				$produit = "SELECT *  FROM produit WHERE id= $articles[2]";
				$reg2 = mysqli_query($connexion, $produit);
				$resultat2 = mysqli_fetch_all($reg2);
		
				foreach($resultat2 as $articles2)
				{
		?>
            <div class="panier_article">
                <img src="<?php echo $articles2[4],$articles2[5]?>" alt="Morceau de boeuf">
                <div>
                    <h2><?php echo $articles2[2]?></h2>
                    <p> <em><span class="panier_span"><?php echo $articles2[3]?>€ </span> par kilo </em></p>
                    <div class="panier_buttons">
                        <button>-</button>
                        <p>1</p>
>>>>>>> Coralie
                        <button>+</button>
                    </div>
                    <input type="submit" value="Supprimer l'article">
                </div>
            </div>   
        </section>
<<<<<<< HEAD
        <section class="panier_total">
            <p>Prix total : <span class="panier_span">30€</span></p>
=======
		 <?php
				}
			}
		?>
		
        <section class="panier_total">
>>>>>>> Coralie
            <input type="submit" value="Valider le panier">
        </section>
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
</body>
</html>