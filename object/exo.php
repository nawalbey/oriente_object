<?php
//creer une classe abstraite formeGeometrique avec les attribut suivants:
//1.surface
//2.perimetre

//creer la classe rectangle fille de formeGeometrique avec les attributs suivant
//1.longueur
//2.largeur
//et la methode calculerSurface et calculerPerimetre

//creer la class cercle avec les proprietes suivantes:
//1.rayon
//et la methode calculerSurface et calculerPerimetre

abstract class formeGeometrique
{
    public $surface;
    public $perimetre;

}

class rectangle extends formeGeometrique
{
    private $longueur;
    private $largeur;

    public function __construct($longeur, $largeur)
    {
        $this->longueur = $longeur;
        $this->largeur = $largeur;
    }

    public function calculerSurface()
    {
        $this->surface = $this->longueur * $this->largeur;
        return $this->surface;
    }
    public function calculerPerimetre()
    {
        $this->perimetre = ($this->longueur + $this->largeur) * 2;
        return $this->perimetre;

    }
}


$rectangle1 = new rectangle(10, 3);

echo "surface = " . $rectangle1->calculerSurface();

// class cercle extends formeGeometrique
// {
//     public $rayon;


//     public function calculerSurface()
//     {

//     }
//     public function calculerPerimetre()
//     {

//     }
// }