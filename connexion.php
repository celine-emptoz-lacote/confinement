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
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerce</a>
            <a href="#">Panier</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
    <main>
        <img class="connexion_icon" src="src/images/icon.png" alt="icon">

        <form  action="">
          <fieldset class="connexion_fieldset">
                <legend class="connexion_legend">Me connecter</legend>
                <input class="connexion-input" type="text" name="" placeholder="Votre speudo" required >
                <input class="connexion-input" type="password" name="" placeholder="Votre mot de passe" required>
                <input class="connexion-input" type="submit">
        </fieldset>
      </form>
        <p class="connexion_p">Vous n'avez pas de compte ?</p>
        <p class="connexion_p2">Vous etes un particulier <a href="inscription.php">Cliquer ici</a></p>
        <p class="connexion_p2">Vous etes un particulier <a href="inscription_commercant.php">Cliquer ici</a></p>
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
</body>
</html>