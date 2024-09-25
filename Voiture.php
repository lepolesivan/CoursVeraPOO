<?php
//La déclaration de type stricte n'est autorisée que depuis PHP 7.0
declare(strict_types=1);

class Voiture
{
    // Propriétés de la voiture:
    public float $vitesse;

    public string $marque;

    public float $temps;

    public function calculerDistance() : string
    {
        // Calcule la distance en multipliant la vitesse par le temps et ajoute l'unité
        return $this->vitesse * $this->temps . self::getUnite();
        // Pour pouvoir appeler une methode static a l'interireur de sa classe 
        // on utilise le mot self:: car on na pas besoin de préciser la classe dont elle provient
        // this est une propriété d'un objet
    }

    //Méthode static est une méthode qui ne nécisste pas l'instanciation d'une classe pour y accéder
    static function getInfo() : string
    {
        return "Cette classe permet de calculer la distance parcourue par une voiture en fonction de sa vitesse et du temps passé!";
    }

    static function getUnite() : string
    {
        return "km";
    }

}

// Acceder à une méthode static
echo Voiture::getInfo();
echo Voiture::getUnite();

// Création d'une instance de la classe Voiture
$voiture = new Voiture();

// Affectation des valeurs aux propriétés de l'objet $voiture
$voiture->vitesse = 55;
$voiture->marque = 'Citroën';
$voiture->temps = 2;

// Affichage du contenu de l'objet $voiture (pour débogage)
echo "<pre>";
var_dump($voiture);
echo "</pre>";

// Affichage de certaines propriétés de l'objet $voiture
echo "<pre>";
var_dump($voiture->vitesse, $voiture->marque);
echo "</pre>";

// Calcul et affichage de la distance parcourue par la voiture
echo "<pre>";
var_dump($voiture->calculerDistance());
echo "</pre>";

$voiture2 = new Voiture;
$voiture2->marque = 'BMW';
$voiture2->temps = 2;
$voiture2->vitesse = 30;

var_dump($voiture2->marque, $voiture2->calculerDistance());