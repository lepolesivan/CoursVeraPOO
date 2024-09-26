<?php

class Personne
{
    private string $nom;
    private string $prenom;
    private int $nombre = 0;
    private string $autorisation = "RH";

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    /**
     * Convertit l'objet en chaîne de caractères.
     *
     * Cette méthode magique est appelée automatiquement lorsqu'on essaie d'utiliser l'objet dans un contexte où une chaîne de caractères est attendue (par exemple, dans un echo ou un print).
     * Elle retourne une représentation textuelle de l'objet, ici composée du nom, du prénom et du nombre.
     *
     */
    public function __toString()
    {
        return "Nom :  $this->nom , Prenom : $this->prenom, le chiffre est $this->nombre.";
    }

    /** 
     * Clone l'objet.
     *
     * Cette méthode magique est appelée automatiquement lorsqu'on utilise l'opérateur de clonage (clone).
     * Elle permet de créer une copie indépendante de l'objet original. 
     * Ici, elle modifie spécifiquement la propriété "autorisation" de la copie.
     *
     */
    public function __clone()
    {
        $this->autorisation = "disponiblite public";
    }

    public function increment()
    {
        $this->nombre += 1;
    }

}

$sarah = new Personne('Ghobrial', 'Sarah');
echo "<pre>";
var_dump($sarah);
echo "</pre>";
$sarah->__toString($sarah); 
$sarah2 = clone $sarah;

$sarah2->increment();
$sarah2->increment();
$sarah2->increment();

echo "<pre>";
var_dump($sarah2);
echo "</pre>";
