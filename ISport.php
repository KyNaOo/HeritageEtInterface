<?php

interface ISport
{
    /**
     * renvoi du nom du sport
     * @return mixed
     */
  public function getNomSport();

    /**
     * renvoi le nombre de joueur
     * @return mixed
     */
  public function  getNbJoueurs();

    /**renvoi une description du sport
     * @return mixed
     */
  public function getDescription();
}