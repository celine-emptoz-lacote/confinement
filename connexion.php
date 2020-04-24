<?php
    require('libraries/User.php');
    $msg = '';
    $error = false;

    if(isset($_POST['button_login'])){
        $user = new User;
        if($_POST['mail'] != '' && $_POST['password'] != ''){
            $error = $user->login($_POST['mail'], $_POST['password']);
            if($error == false){
				session_start();
                $_SESSION['user'] = $user;
				var_dump($user);
                header('Location: profil.php');
            }
            else{
                $user = null;
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
    <title>Connexion</title>
</head>
<body>
    
    <header>
			<?php include('header.php'); ?>
		</header>

    <main>

        <div class="connexion_div">

            <div>

            <h1>Se connecter</h1>

                <form class="connexion_form" method="post">
          
                    <input class="connexion-input" type="text" name="mail" placeholder="Votre mail" required >
                    <input class="connexion-input" type="password" name="password" placeholder=" Mot de passe" required>
                    <input class="connexion-input" type="submit" name="button_login">
                    <?php if($error || $msg != ''){
                        if($error){
                        ?>
                        <p class="error">Identifiant ou mot de passe incorrect</p>
                        <?php }elseif($msg != ''){ ?>
                        <p class="error"><?php echo $msg; ?></p>
                    <?php } }?>

                </form>

                <p class="connexion_p">Vous n'avez pas de compte ?</p>
                <p class="connexion_p2">Vous êtes un particulier <a href="inscription.php">Cliquer ici</a></p>
                <p class="connexion_p2">Vous êtes un professionnel <a href="inscription_commercant.php">Cliquer ici</a></p>

            </div>
           
            <img src="src/images/marseilleshop.png" alt="logo">
        </div>

       
    </main>

    <footer>
			<?php include('footer.php'); ?>
		</footer>
</body>
</html>