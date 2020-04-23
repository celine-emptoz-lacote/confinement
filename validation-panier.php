<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <header>
		<nav>
			<a href="index.php">Accueil</a>
			<a href="profil.php">Profil</a>
			<a href="repertoire_commercant.php">Commerce</a>
			<a href="panier">Panier</a>
			<a href="administration_commercant.php">Admin</a>
			<a href="#">Se déconnecter</a>
		</nav>
	</header>
    <main class="main-validation">
        <h1>Validation</h1>
        <section class="validation-panier">
        <div class="validation-title2">
                <h1>Panier</h1>
            </div>
            <div class="validation-image">
                <img src="src/images/viandes/boeuf1.JPG" alt="Photo produit">
            </div>
            <div class="validation-description">
                <h2>Boeuf</h2>
                <p>Quantité 2kg</p>
            </div>
            <p>30€</p>

        </section>
        <section class="validation-address">
            <div class="validation-title">
                <h1>Adresse de livraison</h1>
            </div>
            <div class="customer-address">
                <ul>
                    <li>Monsieur/Madame</li>
                    <li>Rue de lorem</li>
                    <li>MARSEILLE, 13000</li>
                    <li><a href="#">Ajouter des instructions de livraison</a></li>
                </ul>
            </div>

        </section>
        <section class="validation-pay">
            <div class="validation-title">
                <h1>Mode de paiement</h1>
            </div>
            <div class="pay">
                <p>VISA</p>
                <p>Adresse de facturation: identique à l'adresse de livraison</p>
            </div>  

        </section>
        <button class="valider" type="submit">Passer commande</button>




    </main>
    
	
    <footer>
		<nav class="nav_footer">
			<a href="index.php">Accueil</a>
			<a href="profil.php">Profil</a>
			<a href="repertoire_commercant.php">Commerces</a>
			<a href="panier.php">Panier</a>
			<a href="administration_commercant.php">Admin</a>
			<a href="#">Se déconnecter</a>
		</nav>
	</footer>
    
    
</body>
</html>