<?php
	session_start();
$_SESSION['id'] = '1';
$_SESSION['id_droit'] = '50';
	
	if(isset($_SESSION['login']) || isset($_SESSION['password'])){}
	else
	{
		header('Location: index.php');
	}
	include('functions/function_profil.php');
	$var = new profil;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/font/fontello/css/fontello.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Page commerçant</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/0.3.6/ScrollTrigger.min.js"></script>
	<script>
		function createJauge(elem) {
		  if (elem) {
			while (elem.firstChild) {
			  elem.removeChild(elem.firstChild);
			}

			var oMask  = document.createElement('DIV');
			var oBarre = document.createElement('DIV');
			var oSup50 = document.createElement('DIV');

			oMask.className  = 'progress-masque';
			oBarre.className = 'progress-barre';
			oSup50.className = 'progress-sup50';

			oMask.appendChild(oBarre);
			oMask.appendChild(oSup50);
			elem.appendChild(oMask);
		  }
		  return elem;
		}

		document.addEventListener('DOMContentLoaded', function() {
			var oJauges = document.querySelectorAll('.progress-circle');
			var i, nb = oJauges.length;
			for( i=0; i < nb; i +=1){
			  createJauge(oJauges[i]);
			}
		});

		function initJauge(elem) {
		  var oBarre;
		  var angle;
		  var valeur;

		  createJauge( elem);
		  oBarre = elem.querySelector('.progress-barre');
		  valeur = elem.getAttribute('data-value');
		  valeur = valeur ? valeur * 1 : 0;
		  elem.setAttribute('data-value', valeur.toFixed(1));
		  angle = 360 * valeur / 100;
		  if (oBarre) {
			oBarre.style.transform = 'rotate(' + angle + 'deg)';
		  }
		}

		document.addEventListener('DOMContentLoaded', function () {
		  var oJauges = document.querySelectorAll('.progress-circle');
		  var i, nb = oJauges.length;
		  for (i = 0; i < nb; i += 1) {
			initJauge(oJauges[i]);
		  }
		});
	</script>
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
        <h1 class="admin_commercant_h1">Boucherie Jacques</h1>
        <table class="admin_commercant_table">
            <thead>
                <tr>
                    <td>Nom produit</td>
                    <td>Photo</td>
                    <td>Prix</td>
                    <td>Stock restant</td>
                    <td>Supprimer</td>
                </tr>
            </thead>
            <tbody>
				<?php
					$connexion = mysqli_connect('localhost', 'root', '', 'confinement');
					$requete = "SELECT * FROM produit WHERE id_commercant = ".$_SESSION['id']."";
					$sql = mysqli_query($connexion, $requete);
					while($data = mysqli_fetch_array($sql))
					{
				?>
                <tr>
                    <td><?php echo $data['nom']; ?></td>
                    <td><img src="<?php echo $data['dossier_photo'], $data['photo']; ?>" alt="Boeuf"></td>
                    <td><span class="panier_span"><?php echo $data['prix'], " €"; ?></span> le kilo</td>
                    <td><?php echo $data['stock']; ?></td>
                    <td>
						<form method="post">
							<input type="hidden" name="id_produit" value="<?php echo $data['id']; ?>"/>
							<button name="suppr_produit" class="admin_delet"></button>
						</form>
					</td>
                </tr>
				<?php 
					}
					
					if(isset($_POST['suppr_produit']))
					{
						$requete = "DELETE FROM produit WHERE id = ".$_POST['id_produit']."";
						$sql = mysqli_query($connexion, $requete);
						header('location: admin_commercant.php');
					}
				?>
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