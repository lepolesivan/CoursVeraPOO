<?php

class Voiture3
{
    private const UNITE ="km";
    private float $vitesse;
    private string $marque;
    private float $temps;

    public function __construct(float $vitesse, float $temps, string $marque)
    {
        $this->vitesse = $vitesse;
        $this->temps = $temps;
        $this->marque = $marque;
    }


    public function calculerDistance() : string
    {
        if (self::validationDistance($this->vitesse, $this->temps)) {
            return $this->vitesse * $this->temps . self::UNITE;
        } else {
            return "les valeurs ne sont pas bonne";
        }
    }


    static function validationDistance($vitesse, $temps) : float
    {
        if ($vitesse > 0 && $temps > 0) {
            return true;
        } else {
            return false;
        }
    }

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
}

$test = new Voiture3(1, 2, 'BMW');