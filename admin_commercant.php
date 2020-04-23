<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/font/fontello/css/fontello.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Page commerçant</title>
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
                <p>Boutique</p>
            </div>
            <img src="src/images/marseilleshop.png" alt="">
        </section>
        <h1 class="admin_commercant_h1">Boucherie Jacques</h1>
        <table class="admin_commercant_table">
            <thead>
                <tr>
                    <td>Nom produit</td>
                    <td>Photo</td>
                    <td>Prix</td>
                    <td>Stock restant</td>
                    <td>Ajouter/Supprimer</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Le boeuf fermier "label rouge"</td>
                    <td><img src="src/images/boeuf1.jpg" alt="Boeuf"></td>
                    <td><span class="panier_span">30€</span>  le kilo</td>
                    <td>20</td>
                    <td> <button class="admin_add"></button> <button class="admin_delet"></button></td>
                </tr>
                <tr>
                    <td>Le boeuf fermier "label rouge"</td>
                    <td><img src="src/images/boeuf1.jpg" alt="Boeuf"></td>
                    <td><span class="panier_span">30€</span>  le kilo</td>
                    <td>20</td>
                    <td> <button class="admin_add"></button> <button class="admin_delet"></button></td>
                </tr>
            </tbody>
        </table>
        <form class="admin_commercant_form" action="" method="POST">
            <h3>Ajouter un article</h3>    
        <input type="text" name="" placeholder=" Nom de votre produit" required>
            <input type="file" name=""  required>
            <input type="number" name="" placeholder=" Prix" required>
            <input type="number" name="" placeholder=" Quantité en stock" required>
            <input type="submit" value="Enregistrer">
        </form>
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