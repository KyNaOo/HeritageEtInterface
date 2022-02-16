<?php
class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $lesSports = array();

    public function __construct($idClub, $nomClub, $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    public function compareTo(Club $club)
    {

    }

public function getIdClub():int
{
    return $this->idClub;
}

public function getNomClub():string
{
    return $this->nomClub;
}
public function getNbPoints():int
{
    return $this->nbPoints;
}

public function getLesSports():array
{
    return $this->lesSports;
}

public function AjouterSport(Sport $sport)
{
  $this->lesSports[]=$sport;
}

}