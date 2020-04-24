<?php
class User{

    public $id = '';
    public $prenom = '';
    public $nom = '';
    public $raison_social = '';
    public $mail = '';
    public $telephone = '';
    public $adresse = '';
    public $code_postal = '';
    public $ville = '';
    public $adresse_magasin = '';
    public $code_postal_magasin = '';
    public $ville_magasin = '';
    public $adresse_siege = '';
    public $code_postal_siege = '';
    public $ville_siege = '';    
    public $id_droit = '';
    public $siret = '';

    private function connectdb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=confinement;charset=utf8', 'root', '');
            return($db);
        }
        catch(PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
    }

    public function registerc($prenom, $nom, $raison_social, $telephone, $siret, $mail, $id_categorie, $password, $cpassword, $adresse_magasin, $code_postal_magasin, $ville_magasin, $adresse_siege, $code_postal_siege, $ville_siege, $tmp_file, $type_file, $name_file, $description){
        $msg = '';

        if($password == $cpassword){

            $db = $this->connectdb();
            $requete = $db->prepare("SELECT * FROM utilisateurs_commercants WHERE mail = '$mail'");
            $requete->execute();
            $checkmail = $requete->rowCount();

            if($checkmail == 0){
				$content_dir = "src/images/";
				move_uploaded_file($tmp_file, $content_dir . $name_file);

                $password = password_hash($password, PASSWORD_BCRYPT);
                $requete = $db->prepare("INSERT INTO utilisateurs_commercants (prenom, nom, raison_social, téléphone, siret, mail, id_categorie, password, adresse_magasin, code_postal_magasin, ville_magasin, adresse_siege, code_postal_siege, ville_siege, id_droit, dossier_image, image, description) VALUES ('$prenom', '$nom', '$raison_social', '$telephone', '$siret', '$mail','$id_categorie', '$password', '$adresse_magasin', '$code_postal_magasin', '$ville_magasin', '$adresse_siege', '$code_postal_siege', '$ville_siege','50', '$content_dir', '$name_file', '$description')");
                $requete->execute();
                header('Location: connexion.php');
            }
            else{

                $msg = "Adresse mail déjà utilisée";
            }
        }
        else{

            $msg = "Les mots de passe ne sont pas identiques";
        }

        $db = null;
        return($msg);
    }

    public function register($prenom, $nom, $mail, $telephone, $password, $cpassword, $adresse, $code_postal, $ville){
        $msg = '';

        if($password == $cpassword){

            $db = $this->connectdb();
            $requete = $db->prepare("SELECT * FROM utilisateurs WHERE mail = '$mail'");
            $requete->execute();
            $checkmail = $requete->rowCount();

            if($checkmail == 0){

                $password = password_hash($password, PASSWORD_BCRYPT);
                $requete = $db->prepare("INSERT INTO utilisateurs (prenom, nom, mail, telephone, password, adresse, code_postal, ville, id_droit) VALUES ('$prenom', '$nom', '$mail', '$telephone', '$password', '$adresse', '$code_postal', '$ville', '1')");
                $requete->execute();
            }
            else{

                $msg = "Adresse mail déjà utilisée";
            }
        }
        else{

            $msg = "Les mots de passe ne sont pas identiques";
        }

        $db = null;
        return($msg);
    }

    public function login($mail, $password){
        $error = false;
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id FROM utilisateurs WHERE mail = '$mail'");
        $query->execute();
        $checkuser = $query->rowCount();
        if($checkuser == 1){
            $query = $db->prepare("SELECT password FROM utilisateurs WHERE mail = '$mail'");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            $cryptedpass = $result[0]->password;

            $checkpass = password_verify($password, $cryptedpass);

            if($checkpass == 1){
                $query = $db->prepare("SELECT id, prenom, nom, mail, telephone, adresse, code_postal, ville, id_droit FROM utilisateurs WHERE mail = '$mail'");
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $this->id = $results[0]->id;
                $this->prenom = $results[0]->prenom;
                $this->nom = $results[0]->nom;
                $this->mail = $results[0]->mail;
                $this->telephone = $results[0]->telephone;
                $this->adresse = $results[0]->adresse;
                $this->code_postal = $results[0]->code_postal;
                $this->ville = $results[0]->ville;
                $this->id_droit = $results[0]->id_droit;
            }
            else{
                $error = true;
            }

        }else{
            $error = true;
        }
        $db = null;
        return($error);
    }

    public function disconnect(){
        session_destroy();
    }
}
?>