<?php

class Sport implements ISport

{
   protected $nomSport;
   protected $nbJoueurs;

    public function __construct(string $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }
    public function  getDescription(): string
{
    return '<br>Description<br>Nom du sport : '.$this->nomSport. '<br>Nb de joueur :'.$this->nbJoueurs.'<br>';
}

}