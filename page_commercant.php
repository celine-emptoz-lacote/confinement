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
    <title>Page commerçant</title>
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
                <p>Boutique</p>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </section>
<<<<<<< HEAD

        <h1 class="page_commercant_h1">Boucherie Jacques</h1>

        <section class="page_commercant_section_produits">
            <div>
                <img src="src/images/boeuf1.jpg" alt="Boeuf fermier">
                <p>Le bouef Charolais fermier "label rouge"</p>
                <p><em><span class="panier_span">30€</span> par kilo</em></p>
                <button>Ajouter au panier</button>
            </div>
            <div>
                <img src="src/images/porc-fermier.jpg" alt="Porc fermier">
                <p>Le porc fermier "label rouge"</p>
                <p><span class="panier_span">20€</span> par kilo</p>
                <button>Ajouter au panier</button>
            </div>
            <div>
                <img src="src/images/agneau.jpg" alt="Agneau">
                <p>L'agneau fermier</p>
                <p><span class="panier_span">30€</span> par kilo</p>
                <button>Ajouter au panier</button>
            </div>
           
        </section>

=======
			<?php
			
			$connexion = mysqli_connect('localhost','root','','confinement');
			$categories = "SELECT *  FROM utilisateurs_commercants WHERE id='".$_GET['id']."'";
			$reg = mysqli_query($connexion, $categories);
			$resultat = mysqli_fetch_all($reg);
		
			foreach($resultat as $articles)
			{
			?>
			  <h1 class="page_commercant_h1"><?php echo $articles[3]?></h1>
			<?php 
			} 
			?>
			
			<section class="page_commercant_section_produits">
		
			<?php
				$categories2 = "SELECT * FROM produit WHERE id_commercant='".$_GET['id']."'";
				$reg2 = mysqli_query($connexion, $categories2);
				$resultat2 = mysqli_fetch_all($reg2);
		
				foreach($resultat2 as $articles2)
				{
			?>
        
            <div>
                <img src="<?php echo $articles2[4],$articles2[5]?>" alt="Boeuf fermier">
                <p><?php echo $articles2[2]; ?></p>
                <p><em><span class="panier_span"><?php echo $articles2[3], " €"; ?></span> par kilo</em></p>
				<form method="post">
					<input type="hidden" name="id" value="<?php echo $articles2[0]; ?>"/>
				   <input class="connexion-input" type="submit" name="submit" value="Ajouter au panier"/>
				</form>
				<br/>
				<br/>
				<br/>
            </div>
           
        
			<?php	
				}
					if(isset($_POST['submit']))
					{	
						$requete = "INSERT INTO panier (id_utilisateur, id_produit) VALUES (".$_SESSION['id'].",".$_POST["id"].")";
						$query = mysqli_query($connexion, $requete);
						header('location: panier.php');
					}
				
			?>
		</section>
>>>>>>> Coralie
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