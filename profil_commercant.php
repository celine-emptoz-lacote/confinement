<?php
	session_start();
	
$_SESSION['login'] = test;
$_SESSION['password'] = test;
	
	if(isset($_SESSION['login']) || isset($_SESSION['password'])){}
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
    <link rel="stylesheet" href="css/styles.css">
    <title>Profil Professionnel</title>
</head>
	
<body>
    <header>
		<header>
			<?php include('header.php'); ?>
		</header>
	</header>
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
			<?php 
				
			?>
            <form action="" method="" class="pro-form">
                <div>
                    <input  type="text" name="" id="" placeholder="Nom" required>
                    <input type="text" name="" id="" placeholder="Prénom" required>
                </div>
            
            
                <input  type="text" name="" id="" placeholder="Raison Sociale"   required>
            
                <div>
                    <input type="tel" id="" name="" placeholder="Votre Téléphone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="06-XX-XX-XX-XX" >
                    <input type="number" id="" name="" placeholder="N° de SIRET">
                </div>

                <div>
            
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