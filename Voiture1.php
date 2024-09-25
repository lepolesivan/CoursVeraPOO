<?php
// Les méthodes set et get sont des méthodes très courantes en POO et servent à :

// Encapsuler les données: Les propriétés d'une classe sont souvent déclarées comme étant privées (private).
// Cela signifie qu'elles ne sont accessibles que depuis l'intérieur de la classe.
// Les méthodes set et get permettent de modifier ou de récupérer la valeur de ces propriétés de manière contrôlée.

class Voiture1
{
    // Propriétés privées de la classe Voiture1
    private string $unite = "km";
    private float $vitesse;
    private string $marque;
    private float $temps;

    public function setMarque(string $marque) : static 
    {
        $this->marque = $marque;
        return $this;
    }

    public function getMarque() : ?string
    {
        return $this->marque;
    }

    public function setVitesse(float $vitesse) : static
    {
        $this->vitesse = $vitesse;
        return $this;
    }

    public function getVitesse() : ?float
    {
        return $this->vitesse;
    }

    public function setTemps(float $temps) : static
    {
        $this->temps = $temps;
        return $this;
    }

    public function getTemps() : ?float
    {
        return $this->temps;
    }

    public function calculerDistance() : string
    {
        return $this->vitesse * $this->temps . $this->unite;
    }

}

$audi = new Voiture1();
$audi->setMarque('audi');
$audi->setVitesse(40)->setTemps(2);

echo '<p>'. $audi->calculerDistance() .'</p>';
echo '<p>'. $audi->getMarque() .'</p>';