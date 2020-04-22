<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription particuliers</title>
    <link href="inscription.css" rel="stylesheet">
</head>
<body>

<h1>Inscription pour particulier</h1>
    <form action="" method="POST">
        
        <div >
            <input type="text" id="firstname" name="" placeholder="Votre prénom" required>
            <input type="text" id="name" name="" placeholder="Votre nom" required>
        </div>
        <div> 
            <input type="email" id="email" name="" placeholder="Votre email" required>
            <input type="email" id="confirmation_mail" placeholder="Confirmer votre email" name="" required>
        </div>
        <input type="text" id="address" name="" placeholder="Votre adresse" required>
            
        <div>
            <input type="number" id="code_postal" name="" placeholder="Votre numéro de téléphone" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
            <input type="text" id="ville" name="" placeholder="Votre ville" required>
        </div>
  
        <input type="tel" id="telephone" name="" placeholder="06XXXXXXXX">
        

        <input type="submit">
    </form>
    
</body>
</html>