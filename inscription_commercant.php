<?php
    require('libraries/User.php');
    $msg = '';
    $error = false;
    if(isset($_POST['button_register'])){

        if($_POST['prenom'] != '' && $_POST['nom'] != '' && $_POST['raison_social'] != '' && $_POST['telephone'] != '' && $_POST['siret'] != '' && $_POST['mail'] != '' && $_POST['id_categorie'] != '' && $_POST['password'] != '' && $_POST['cpassword'] != '' && $_POST['adresse_magasin'] != '' && $_POST['code_postal_magasin'] != '' && $_POST['ville_magasin'] != '' && $_POST['adresse_siege'] != '' && $_POST['code_postal_siege'] != '' && $_POST['ville_siege'] != ''){

            if(strlen($_POST['password']) >= 6){

                $user = new User;
                $msg = $user->registerc($_POST['prenom'], $_POST['nom'], $_POST['raison_social'], $_POST['telephone'], $_POST['siret'], $_POST['mail'], $_POST['id_categorie'], $_POST['password'], $_POST['cpassword'], $_POST['adresse_magasin'], $_POST['code_postal_magasin'], $_POST['ville_magasin'], $_POST['adresse_siege'], $_POST['code_postal_siege'], $_POST['ville_siege'], $_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name'], $_POST['description']);
                $user = null;
            }
            else{
                $msg = "Votre mot de passe doit contenir au moins 6 caractères";
            }
        }
        else{
            $msg = "Veuillez remplir tous les champs";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inscription Professionnel</title>
</head>
<body class="body-pro-form">
    <header>
			<?php include('header.php'); ?>
		</header>
    <main class="main-pro-form">

        <section class="first-section"> 
            <section class="connect">
                <h1>Inscription Professionnel</h1>

                <form method="POST" class="pro-form" enctype="multipart/form-data">
                    <div>
                        <input  type="text" name="nom" id="" placeholder="Nom" required>
                        <input type="text" name="prenom" id="" placeholder="Prénom" required>
                    </div>
            
                    <input  type="text" name="raison_social" id="" placeholder="Raison Sociale" required>
            		<input type="text" name="description" placeholder="Description" required/>
                    <div>
                    <input type="tel" id="" name="telephone" placeholder="Votre Téléphone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="06-XX-XX-XX-XX" >
                    <input type="number" id="" name="siret" placeholder="N° de SIRET">
                    </div>

                    <div>
            
                        <input type="email" name="mail" id="" placeholder="Email" required>
                        <select name="id_categorie" id="" width="4%" height="31px" required>
                            <option value="">--Catégorie--</option>
                            <option value="1">Alimentaire</option>
                            <option value="2">Bricolage</option>
                            <option value="3">Textile</option>
                        </select>

                    </div>
					<input type="file" name="image" accept="image/png, image/jpeg, image/jpg" required/>
                    <div>
                        <input  type="password" name="password" id="" placeholder="Mot de passe" required>
                        <input type="password" name="cpassword" id="" placeholder="Confirmation de mot de passe" required>
                    </div>
       
            
                    <input type="text" id="address" name="adresse_magasin" placeholder="Adresse du magasin" >
            
                    <div>
                        <input type="number" id="code_postal" name="code_postal_magasin" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                        <input type="text" id="" name="ville_magasin" placeholder="Ville" required> 
                    </div>
            
                    <input type="text" id="address" name="adresse_siege" placeholder="Adresse siège social" >
            
                    <div>
                        <input type="number" id="code_postal" name="code_postal_siege" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                        <input type="text" id="" name="ville_siege" placeholder="Ville" required> 
                    </div>

                    <button class="valider" type="submit" name="button_register">Valider</button>
        

                </form>
            </section>

            <section class="index-image-shop">
                <img src="src/images/marseilleshop.png" alt="Photo illustration">
            </section>
        </section>


     
    </main>
   
	<footer>
			<?php include('footer.php'); ?>
		</footer>
</body>
</html>