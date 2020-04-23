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
        <nav>
            <a href="index.php">Accueil</a>
            <a href="profil.php">Profil</a>
            <a href="repertoire_commercant.php">Commerce</a>
            <a href="panier.php">Panier</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
    <main>
        <div class="connexion_div">
            <div>
            <h1>Se connecter</h1>
                <form class="connexion_form" action="">
          
                    <input class="connexion-input" type="text" name="" placeholder="Votre mail" required >
                    <input class="connexion-input" type="password" name="" placeholder=" Mot de passe" required>
                    <input class="connexion-input" type="submit">

                </form>
                <p class="connexion_p">Vous n'avez pas de compte ?</p>
                <p class="connexion_p2">Vous etes un particulier <a href="inscription.php">Cliquer ici</a></p>
                <p class="connexion_p2">Vous etes un particulier <a href="inscription_commercant.php">Cliquer ici</a></p>
            </div>
           
            <img src="src/images/marseilleshop.png" alt="logo">
        </div>

       
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