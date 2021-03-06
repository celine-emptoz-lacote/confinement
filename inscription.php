<?php
    require('libraries/User.php');
    $msg = '';
    $error = false;
    if(isset($_POST['button_register'])){

        if($_POST['prenom'] != '' && $_POST['nom'] != '' && $_POST['mail'] != '' && $_POST['telephone'] != '' && $_POST['password'] != '' && $_POST['cpassword'] != '' && $_POST['adresse'] != '' && $_POST['code_postal'] != '' && $_POST['ville'] != ''){

            if(strlen($_POST['password']) >= 6){

                $user = new User;
                $msg = $user->register($_POST['prenom'], $_POST['nom'], $_POST['mail'], $_POST['telephone'], $_POST['password'], $_POST['cpassword'], $_POST['adresse'], $_POST['code_postal'], $_POST['ville']);
                $user = null;
                header('Location: connexion.php');
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
    <title>Inscription particuliers</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
	
<body class="inscription-body">
    <header>
			<?php include('header.php'); ?>
		</header>

    <main class="inscription-main">

        <div class="inscription-main-div">

            <h1>S'inscrire</h1>

            <form method="POST">
                
                <div >
                    <input type="text"  name="prenom" placeholder=" Votre prénom" required>
                    <input type="text"  name="nom" placeholder=" Votre nom" required>
                </div>
                
                <div> 
                    <input type="email"  name="mail" placeholder=" Votre email" required>
                    <input type="tel"  name="telephone" placeholder=" 06XXXXXXXX">
                </div>

                <div>
                    <input type="password" name="password" placeholder=" Votre mot de passe" size = 15 pattern=".{6}" title="Le mot de passe doit contenir au moins 6 caractères." required>
                    <input type="password" name="cpassword" placeholder=" Confirmer votre mot de passe" size = 15 pattern=".{6}" title="Le mot de passe doit contenir au moins 6 caractères." required>
                </div>

                <input type="text"  name="adresse" placeholder=" Votre adresse" required>
                    
                <div>
                    <input type="number"  name="code_postal" placeholder=" Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text"  name="ville" placeholder=" Votre ville" required>
                </div>

                <input type="submit" name="button_register">
            </form>
        </div>
        <img src="src/images/marseilleshop.png" alt="logo">
    </main>
    <footer>
			<?php include('footer.php'); ?>
		</footer>
</body>
</html>