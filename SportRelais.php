<?php

class SportRelais extends Sport
{
 private $distance;

    public function __construct(String $nomSport , int $nbJoueurs , int $distance)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->distance = $distance;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
    public function  getDescription(): string
    {
        return '</br>Description <br>Nom du sport : '.$this->nomSport.' <br>Nb de joueur : '.$this->nbJoueurs.'<br>Distance : '.$this->distance.'m<br>';
    }

}
