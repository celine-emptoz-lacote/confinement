<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mon panier</title>
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
        <section class="panier_section">
            <div>
                <h1>Marseille'shop</h1>
                <p>Panier</p>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </section>

        <section >
            <div class="panier_article">
                <img src="src/images/boeuf1.jpg" alt="Morceau de boeuf">
                <div>
                    <h2>Le boeuf charolais fermier "label rouge"</h2>
                    <p> <em><span class="panier_span"> 30€ </span> par kilo </em></p>
                    <div class="panier_buttons">
                        <button>-</button>
                        <p>0</p>
                        <button>+</button>
                    </div>
                    <input type="submit" value="Supprimer l'article">
                </div>
            </div>   
        </section>
        <section class="panier_total">
            <p>Prix total : <span class="panier_span">30€</span></p>
            <input type="submit" value="Valider le panier">
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
</body>
</html>