<?php

//creez une classe voiture avec les attributs suivants:
//couleur, marque, model
// et les méthodes suivantes:
//rouler, accelere; freiner

//creez une voiture de marque peugeot de model 308 et de couleur noir

//pour la methode afficher le texte "je roules"
//pour la methode accelerer afficher le texte "j'accelere"
//pour la methode freiner afficher le texte "je freine"

class Voiture
{
    public $couleur;
    public $marque;
    public $model;

    public function rouler()
    {
        echo "je roule";
    }
    public function accelere()
    {
        echo "j'accelere";
    }

    public function freiner()
    {
        echo "je freine";
    }

}
//creez une voiture de marque peugeot de model 308 et de couleur noir

$voiture = new Voiture();
$voiture->couleur = "noir";
$voiture->model = 308;
// $voiture->marque = "peugeot";

$voiture->rouler();

//class voiture avec constructeur
class voitureAvecConstructeur
{
    //attributs
    public $marque;
    public $model;
    public $couleur;
    //constructeur
    public function __construct($brand, $model, $color)
    {
        $this->marque = $brand;
        $this->model = $model;
        $this->couleur = $color;

    }

    public function rouler()
    {
        echo "je roule";
    }
    public function accelere()
    {
        echo "j'accelere";
    }

    public function freiner()
    {
        echo "je freine";
    }
}

//creer une voiture
$v2 = new voitureAvecConstructeur("citroen", "C4", "rouge");
$v2->rouler();