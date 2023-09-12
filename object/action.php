<?php
// inclure le fichier utilisateur.php
// recuperer les information du formulaire
// creer une instance de la classe Utilisateur
// appeler la methode inscription pour enregistrer les donnees dans bd
require_once "./function.php";
require_once "./utilisateur.php";
require_once "./database.php";
// debug($_POST);

$utilisateur = new Utilisateur($_POST["nom"], $_POST["prenom"], $_POST["login"], $_POST["password"]);

// debug($nawal);

//appeler la methode inscription pour enregistrer les donnees dans bd

$utilisateur->inscription();