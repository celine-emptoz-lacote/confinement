<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Page commerçant</title>
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
        <section class="panier_section">
            <div>
                <h1>Marseille'shop</h1>
                <p>Boutique</p>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </section>

        <h1 class="page_commercant_h1">Boucherie Jacques</h1>

        <section class="page_commercant_section_produits">
            <div>
                <img src="src/images/boeuf1.jpg" alt="Boeuf fermier">
                <p>Le bouef Charolais fermier "label rouge"</p>
                <p><em><span class="panier_span">30€</span> par kilo</em></p>
                <button>Ajouter au panier</button>
            </div>
            <div>
                <img src="src/images/porc-fermier.jpg" alt="Porc fermier">
                <p>Le porc fermier "label rouge"</p>
                <p><span class="panier_span">20€</span> par kilo</p>
                <button>Ajouter au panier</button>
            </div>
            <div>
                <img src="src/images/agneau.jpg" alt="Agneau">
                <p>L'agneau fermier</p>
                <p><span class="panier_span">30€</span> par kilo</p>
                <button>Ajouter au panier</button>
            </div>
           
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