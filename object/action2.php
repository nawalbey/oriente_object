<?php
session_start();
require_once "./utilisateur.php";
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['login'];
    $password = $_POST['password'];
    // crypter le mot de passe 
    // la fonction password_hash permet de crypter le mot de passe
    $passwordCrypter = password_hash($password, PASSWORD_DEFAULT);
    $utilisateur = new Utilisateur($nom, $prenom, $email, $passwordCrypter);
    $utilisateur->inscription();

}


// on verifie si $_POST['connexion'] est definie
//  la fonction isset permet de verifier si une variable existe (est definie)
if (isset($_POST['connexion'])) {
    $email = $_POST['login'];
    $password = $_POST['password'];

    Utilisateur::connecter($email, $password);

}