<?php

declare(strict_types=1);

class Voiture
{

    private string $unite = 'km';
    public float $vitesse;
    public string $marque;
    public float $temps;

    public function calculerDistance()
    {
        return $this->vitesse * $this->temps . self::getUnite();
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
$voiture->vitesse = 55;
$voiture->marque = 'audi';
$voiture->temps = 2;

var_dump($voiture->calculerDistance());


$voiture2 = new Voiture();
$voiture2->vitesse = 25;
$voiture2->marque = 'bmw';

echo "<pre>";
var_dump($voiture->vitesse, $voiture->marque, $voiture2->vitesse, $voiture2->marque);
echo "</pre>";
