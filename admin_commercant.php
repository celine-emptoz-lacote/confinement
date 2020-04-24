<?php
	session_start();
	$_SESSION['id'] = 2;
	if(isset($_SESSION['id'])){}
	else
	{
		header('Location: index.php');
	}
	include('functions/function_profil.php');
	$var = new profil;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/font/fontello/css/fontello.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Page commerçant</title>
</head>
<body>
    
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="profil.php">Profil</a>
            <a href="repertoire_commercant.php">Commerce</a>
            <a href="panier.php">Panier</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
    <main>
    <section class="panier_section">
            <div>
                <h1>Marseille'shop</h1>
                <p>Boutique</p>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </section>
        <h1 class="admin_commercant_h1">Boucherie Jacques</h1>
        <table class="admin_commercant_table">
            <thead>
                <tr>
                    <td>Nom produit</td>
                    <td>Photo</td>
                    <td>Prix</td>
                    <td>Stock restant</td>
                    <td>Supprimer</td>
                </tr>
            </thead>
            <tbody>
				<?php
					$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
					$requete = "SELECT * FROM produit WHERE id_commercant = ".$_SESSION['id']."";
					$sql = mysqli_query($connexion, $requete);
					while($data = mysqli_fetch_array($sql))
					{
				?>
                <tr>
                    <td><?php echo $data['nom']; ?></td>
                    <td><img src="<?php echo $data['dossier_photo'], $data['photo']; ?>" alt="Boeuf"></td>
                    <td><span class="panier_span"><?php echo $data['prix'], " €"; ?></span> le kilo</td>
                    <td><?php echo $data['stock']; ?></td>
                    <td>
						<form method="post">
							<input type="hidden" name="id_produit" value="<?php echo $data['id']; ?>"/>
							<button name="suppr_produit" class="admin_delet"></button>
						</form>
					</td>
                </tr>
				<?php 
					}
					
					if(isset($_POST['suppr_produit']))
					{
						$requete = "DELETE FROM produit WHERE id = ".$_POST['id_produit']."";
						$sql = mysqli_query($connexion, $requete);
						header('location: admin_commercant.php');
					}
				?>
            </tbody>
        </table>
        <form class="admin_commercant_form" action="" method="POST">
            <h3>Ajouter un article</h3>    
        <input type="text" name="" placeholder=" Nom de votre produit" required>
            <input type="file" name=""  required>
            <input type="number" name="" placeholder=" Prix" required>
            <input type="number" name="" placeholder=" Quantité en stock" required>
            <input type="submit" value="Enregistrer">
        </form>
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