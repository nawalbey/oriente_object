<?php
// de creer la classe Utilisateur avec les proprietes:
// nom, prenom, email, mot de passe
// les methodes : s'incrire, se connecter, se deconnecter

require_once "./database.php";
class Utilisateur
{
    public $nom;
    public $prenom;
    public $email;
    public $password;

    //cette methode est une methode magique qui s'execute automatiquement des qu'on creer une instance de notre class(Utilisateur) 
    public function __construct($nom, $prenom, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
    }
    public function inscription()
    {
        // 1-j'ai cree un classe Dbconnect dans le fichier database.php 
        //2- dans cette classe j'ai cree une methode dbconnexion 
        //3-en utilisant les synthase de connexion a la base e donnee dans cette methode je peux me connecter a la base de donnee a chaque fois que j'execute cette methode(dbconnexion)
        $db = new DbConnect();
        $conn = $db->dbConnexion();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, email, mdp)
  VALUES (:lastname, :firstname, :email, :password)");
        $stmt->bindParam(':lastname', $this->nom);
        $stmt->bindParam(':firstname', $this->prenom);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    public static function connecter($email, $password)
    {
        $db = new DbConnect();
        $conn = $db->dbConnexion();
        // preparer la requete 
        $request = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        // executer la requete
        try {
            $request->execute(array($email));
            $user = $request->fetch();
            if (empty($user)) {
                echo "adresse email introuvable veuillez creer un compte avant de vous connecter";
            } else {
                if (password_verify($password, $user['mdp'])) {
                    // creer la variable de session
                    $_SESSION['prenom'] = $user['prenom'];
                    // rediriger vers accueil.php
                    header("Location: accueil.php");
                } else {
                    echo "mot de passe incorrect";
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function deconnecter()
    {

    }
}