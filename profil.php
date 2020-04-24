<?php
	session_start();
$_SESSION['id'] = '1';
$_SESSION['id_droit'] = '1';
	if(isset($_SESSION['id'])){}
	else
	{
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mon profil</title>
</head>
<body>
    
    <header>
		<header>
			<?php include('header.php'); ?>
		</header>
    </header>
    <main>
        <div class="profil_main_header">
            <div>
                <h1>Marseille'shop</h1>
                <h2>Profil</h2>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </div>
		
        <section class="profil_section">
			<?php 
				$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
				$requete = "SELECT * FROM utilisateurs WHERE id = ".$_SESSION['id']."";
				$sql = mysqli_query($connexion, $requete);
				$data = mysqli_fetch_array($sql);
			?>
            <h2>Modifier vos informations</h2>
            <form action="" method="POST">
                <div >
                    <input type="text"  name="prenom" placeholder=" Votre prénom" value="<?php echo $data['prenom'] ?>" required>
                    <input type="text"  name="nom" placeholder=" Votre nom" value="<?php echo $data['nom'] ?>" required>
                </div>
                <div> 
                    <input type="email"  name="mail" placeholder=" Votre email" value="<?php echo $data['mail'] ?>" required>
                    <input type="tel" name="telephone" placeholder=" 06XXXXXXXX" value="<?php echo $data['telephone'] ?>">
                </div>
                <div>
                    <input type="password" name="password" placeholder=" Votre mot de passe" value="<?php echo $data['password'] ?>" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial." required>
                    <input type="password" name="password" placeholder=" Confirmer votre mot de passe" value="<?php echo $data['password'] ?>" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial." required>
                </div>
                <input type="text"  name="adresse" placeholder=" Votre adresse" value="<?php echo $data['adresse'] ?>" required>  
                <div>
                    <input type="number"  name="code_postal" placeholder=" Votre code postal" value="<?php echo $data['code_postal'] ?>" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text"  name="ville" placeholder=" Votre ville"  value="<?php echo $data['ville'] ?>" required>
                </div>
                <input type="submit" name="modif_profil" value="Modifier">
            </form>
			<?php
				if(isset($_POST['modif_profil']))
				{
					$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
					$requete = "UPDATE utilisateurs SET nom = '".$_POST['nom']."', prenom = '".$_POST['prenom']."', telephone = '".$_POST['telephone']."', mail = '".$_POST['mail']."', password = '".$_POST['password']."', adresse = '".$_POST['adresse']."', code_postal = '".$_POST['code_postal']."', ville = '".$_POST['ville']."' WHERE id = ".$_SESSION['id']."";
					$sql = mysqli_query($connexion, $requete);
					header('location: profil.php');
				}
			?>
        </section>
		
        <section>
            <h1>Mes commandes</h1>
            <table class="profil_table">
                <thead>
                    <tr>
                        <td>Commandes</td>
                        <td>Addresse</td>
                        <td>Date D'achat</td>
                        <td>Prix total</td>
                        <td>Paiement</td>
                    </tr>
                </thead>
                <tbody>
					<?php
						$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
						$requete = "SELECT * FROM commande WHERE id_utilisateur = ".$_SESSION['id']."";
						$sql = mysqli_query($connexion, $requete);
						while($data = mysqli_fetch_array($sql))
						{
					?>
                    <tr>
                        <td><?php echo $data['numero_commande']; ?></td>
                        <td><?php echo $data['adresse']; ?></td>
                        <td><?php echo $data['date']; ?></td>
                        <td><?php echo $data['prix'], ' €'; ?></td>
                        <td><?php echo $data['paiement']; ?></td>
                    </tr>
					<?php } ?>
                </tbody>
            </table>
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