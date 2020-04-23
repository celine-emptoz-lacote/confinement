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
        <nav>
            <a href="index.php">Accueil</a>
            <a href="profil.php">Profil</a>
            <a href="repertoire_commercant.php">Commerce</a>
            <a href="panier.php">Panier</a>
            <a href="admin_commercant.php">Admin</a>
            <a href="#">Se déconnecter</a>
        </nav>
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
            <h2>Modifier vos informations</h2>
            <form action="" method="POST">
                <div >
                    <input type="text"  name="" placeholder=" Votre prénom" required>
                    <input type="text"  name="" placeholder=" Votre nom" required>
                </div>
                <div> 
                    <input type="email"  name="" placeholder=" Votre email" required>
                    <input type="tel"  name="" placeholder=" 06XXXXXXXX">
                </div>
                <div>
                    <input type="password" name="" placeholder=" Votre mot de passe" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial." required>
                    <input type="password" name="" placeholder=" Confirmer votre mot de passe" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial." required>
                </div>
                <input type="text"  name="" placeholder=" Votre adresse" required>  
                <div>
                    <input type="number"  name="" placeholder=" Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text"  name="" placeholder=" Votre ville" required>
                </div>
                <input type="submit" value="Modifier">
            </form>
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
                        <td>Payement</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>234567789O</td>
                        <td>Lorem ipsum dolor sit ame</td>
                        <td>20/04/2020</td>
                        <td>54€99</td>
                        <td>Mastercard</td>
                    </tr>
                    <tr>
                        <td>234567789O</td>
                        <td>Lorem ipsum dolor sit ame</td>
                        <td>23/04/2020</td>
                        <td>154€99</td>
                        <td>Paypal</td>
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