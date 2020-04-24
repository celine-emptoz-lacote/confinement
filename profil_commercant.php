<<<<<<< HEAD
=======
<?php
	session_start();
$_SESSION['id'] = '2';
$_SESSION['id_droit'] = '50';
	
	if(isset($_SESSION['id'])){}
	else
	{
		header('Location: index.php');
	}
?>

>>>>>>> Coralie
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
<<<<<<< HEAD
    <title>Inscription Professionnel</title>
</head>
<body>
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
    <title>Profil Professionnel</title>
</head>
	
<body>
    <header>
		<header>
			<?php include('header.php'); ?>
		</header>
	</header>
>>>>>>> Coralie
    <main class="profil-pro">
    <section class="first-section"> 
            <section class="connect">
                <h1 class="index-shop-name"> Marseille'shop</h1>
                <h2>Profil<h2>
               
            </section>
            <section class="index-image-shop">
                <img src="src/images/marseilleshop.png" alt="Photo illustration">
            </section>
        </section>

        <h1>Mon Compte</h1>
        <section>
<<<<<<< HEAD
            <form action="" method="" class="pro-form">
                <div>
                    <input  type="text" name="" id="" placeholder="Nom" required>
                    <input type="text" name="" id="" placeholder="Prénom" required>
                </div>
            
            
                <input  type="text" name="" id="" placeholder="Raison Sociale"   required>
            
                <div>
                    <input type="tel" id="" name="" placeholder="Votre Téléphone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="06-XX-XX-XX-XX" >
                    <input type="number" id="" name="" placeholder="N° de SIRET">
=======
			<?php 
				$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
				$requete = "SELECT * FROM utilisateurs_commercants WHERE id = ".$_SESSION['id']."";
				$sql = mysqli_query($connexion, $requete);
				$data = mysqli_fetch_array($sql);
			?>
			
            <form action="" method="post" class="pro-form">
                <div>
                    <input  type="text" name="nom" id="" placeholder="Nom" value="<?php echo $data['nom'] ?>" required>
                    <input type="text" name="prenom" id="" placeholder="Prénom" value="<?php echo $data['prenom'] ?>" required>
                </div>
            
            
                <input  type="text" name="raison_social" id="" placeholder="Raison Sociale" value="<?php echo $data['raison_social'] ?>"  required>
            
                <div>
                    <input type="tel" id="" name="téléphone" placeholder="Votre Téléphone" value="<?php echo $data['téléphone'] ?>" placeholder="06-XX-XX-XX-XX" >
                    <input type="number" id="" name="siret" placeholder="N° de SIRET" value="<?php echo $data['siret'] ?>">
>>>>>>> Coralie
                </div>

                <div>
            
<<<<<<< HEAD
                    <input type="email" name="" id="" placeholder="Email" required>
                    <input type="text" name="" id="" placeholder="Confirmation Email" required>
                </div>

                <div>
                    <input  type="password" name="" id="" placeholder="Ancien Mot de passe" required>
                    <input type="password" name="" id="" placeholder="Nouveau mot de passe" required>
                </div>
       
            
                <input type="text" id="address" name="" placeholder="Adresse du magasin" >
            
                <div>
                    <input type="number" id="code_postal" name="" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text" id="" name="" placeholder="Ville" required> 
                </div>
            
                <input type="text" id="address" name="" placeholder="Adresse siège social" >
            
                <div>
                    <input type="number" id="code_postal" name="" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text" id="" name="" placeholder="Ville" required> 
                </div>

                <button  class="valider" type="submit">Modifier</button>
            
        

            </form>
        </section >
        <h1>Commandes clients<h1>
        <section>
            <table class="profil_table2">
                <tbody>
                <tr>
                    <th>Commandes</th>
                    <th>Adresse</th>
                    <th>Date d'achat</th>
                    <th>Prix total</th>
                    <th>Paiement</th>
                    <th>Statut</th>
                </tr>  
                <tr>
                    <td>1</td>     
                    <td>Lorem</td>     
                    <td>23/04/2020</td>     
                    <td>€€€</td>     
                    <td>Visa</td>     
                    <td>En cours</td> 
                </tr>    
                <tr>
                    <td>2</td>     
                    <td>lorem</td>     
                    <td>22/04/2020</td>     
                    <td>€€€</td>     
                    <td>Paypal</td>     
                    <td>Terminé</td> 
                </tr> 
            </tbody>   
            </table>
            
        </section>
    </main>
    
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
                    <input type="email" name="mail" id="" placeholder="Email" value="<?php echo $data['mail'] ?>" required>
                    <input type="text" name="mail" id="" placeholder="Confirmation Email" value="<?php echo $data['mail'] ?>" required>
                </div>

                <div>
                    <input  type="password" name="password" id="" placeholder="Ancien Mot de passe"  value="<?php echo $data['password'] ?>" required>
                    <input type="password" name="" id="password" placeholder="Nouveau mot de passe" value="<?php echo $data['password'] ?>" required>
                </div>
       
            
                <input type="text" id="address" name="adresse_magasin" placeholder="Adresse du magasin" value="<?php echo $data['adresse_magasin'] ?>">
            
                <div>
                    <input type="number" id="code_postal" name="code_postal_magasin" placeholder="Votre code postal" value="<?php echo $data['code_postal_magasin'] ?>" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text" id="" name="ville_magasin" placeholder="Ville"  value="<?php echo $data['ville_magasin'] ?>" required> 
                </div>
            
                <input type="text" id="address" name="adresse_siege" placeholder="Adresse siège social" value="<?php echo $data['adresse_siege'] ?>">
            
                <div>
                    <input type="number" id="code_postal" name="code_postal_siege" placeholder="Votre code postal" value="<?php echo $data['code_postal_siege'] ?>" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text" id="" name="ville_siege" placeholder="Ville" value="<?php echo $data['ville_siege'] ?>" required> 
                </div>

                <input class="valider" type="submit" name="modif_profil_commercant" value="Modifier"/>
            
        
				<?php
					if(isset($_POST['modif_profil_commercant']))
					{
						$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
						$requete = "UPDATE utilisateurs_commercants SET nom = '".$_POST['nom']."', prenom = '".$_POST['prenom']."', raison_social = '".$_POST['raison_social']."', téléphone = '".$_POST['téléphone']."', siret = '".$_POST['siret']."', mail = '".$_POST['mail']."', password = '".$_POST['password']."', adresse_magasin = '".$_POST['adresse_magasin']."', code_postal_magasin = '".$_POST['code_postal_magasin']."', ville_magasin = '".$_POST['ville_magasin']."', adresse_siege = '".$_POST['adresse_siege']."', code_postal_siege = '".$_POST['code_postal_siege']."', ville_siege = '".$_POST['ville_siege']."' WHERE id = ".$_SESSION['id']."";
						$sql = mysqli_query($connexion, $requete);
						header('location: profil_commercant.php');
					}
				?>
            </form>
        </section>
    </main>
    
    
	<footer>
		<?php include('footer.php'); ?>
	</footer>
>>>>>>> Coralie
</body>
</html>