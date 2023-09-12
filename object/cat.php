<?php
class cat
{
    private $nom;
    private $couleur;
    private $race;
    private $age;

    //constructeur de la classe
    public function __construct($nom, $couleur, $race, $age, )
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->age = $age;
    }
    //creer le geter et le seter de la propriete age
    // le geter son role c'est de recuperer la valeur de la propriete declare avec le mot cle private
    public function getage()
    {

        return $this->age;

    }
    //le role de seter c'est de mettre a jour la propriete en question declare avec le mot cle private
    public function setAge($newage)
    {
        $this->age = $newage;
    }
}
//creer un chat
$chat1 = new Cat("cynthia", "beige", "siamois", 3);
// $chat1->age = 4;
$chat1->setAge(4);
echo $chat1->getage();