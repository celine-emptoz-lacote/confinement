<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Accueil</title>
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
        <section id="first-section"> 
            <section id="connect">
                <h1>Bienvenue sur </h1>
                <h1 id="shop-name"> Marseille'shop</h1>
                <a href="# ">Se connecter</a>
            </section>
            <section id="image-shop">
                <img src="https://picsum.photos/300/300" alt="Photo illustration">
            </section>
        </section>
    

    <section class="offres">
        <h1>Nos offres</h1>
        <div class="div_offre">
            <div>
                <img src="src/images/alimentaire.png" alt="">  
                <p class="p1">Alimentaire</p>
            </div>
            <div>
                <img src="src/images/diy.png" alt="">
                <p class="p2">Bricolage</p>
            </div>
            <div>
                <img src="src/images/textile.png" alt="">
                <p class="p3">Textile</p>
            </div>
        </div>
        <a href="repertoire_commercant.php" class="offres_a">Acceder à la boutique</a>
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