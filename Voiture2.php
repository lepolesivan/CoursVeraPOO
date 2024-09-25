<?php

class Voiture2
{
    public float $vitesse;
    public string $marque;
    public float $temps;

    public function calculerDistance() : string
    {
        if(self::validationDistance($this->vitesse, $this->temps)){
            return $this->vitesse * $this->temps . self::getUnite();
        }else{
            return "Les valeurs ne sont pas bonnes";
        }
    }


    static function validationDistance($vitesse, $temps) : bool
    {
        if($vitesse > 0 && $temps > 0){
            return true;
        }else{
            return false;
        }
    }

    static function getUnite() : string
    {
        return "km";
    }

}

echo Voiture2::validationDistance(20,2);