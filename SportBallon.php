<?php

class SportBallon extends Sport
{
 private $largeur;
 private $longueur;

    public function __construct(string $nomSport , int $nbJoueur , int $largeur, int $longueur)
    {
        parent::__construct($nomSport,$nbJoueur);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function getLargeur():int
    {
        return $this->largeur;
    }

    public function getLongueur():int
    {
        return $this->longueur;
    }
    public function  getDescription(): string
    {
        return '<br>Description<br>Nom du sport :'.$this->nomSport.
            '<br>Nb de joueur :'.$this->nbJoueurs.
            '<br>largeur : '.$this->largeur.
            '<br>longueur :'.$this->longueur.'<br>';
    }

}