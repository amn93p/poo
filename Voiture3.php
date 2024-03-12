<?php

declare(strict_types=1);

class Voiture
{

    private const UNITE = "km";
    private float $vitesse;
    private string $marque;
    private float $temps;

    public function setVitesse(float $vitesse){
        $this->vitesse = $vitesse;
    }

    public function setTemps(float $temps){
        $this->temps = $temps;
    }

    public function calculerDistance()
    {
        if (self::validationDistance($this->vitesse, $this->temps)) {
            return $this->vitesse * $this->temps . self::UNITE;
        } else {
            return "les valeurs ne sont pas bonnes";
        }
    }
    static function validationDistance($vitesse, $temps)
    {
        if ($vitesse > 0 && $temps > 0) {
            return true;
        } else {
            return false;
        }
    }
    static function getInfo()
    {
        return "Cette classe permet de calculer la distance parcourue par une voiture en fonction de sa vitesse et du temps passé.";
    }
    static function getUnite()
    {
        return "km";
    }
}

echo Voiture::getInfo();
echo Voiture::getUnite();

die;


$voiture = new Voiture();