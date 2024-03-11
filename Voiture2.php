<?php

declare(strict_types=1);


class Voiture2
{

    private string $unite = 'km';
    private float $vitesse;
    private string $marque = 'audi';
    private float $temps;


    public function getVitesse()
    {
        return $this->vitesse;
    }
    public function setVitesse(float $vitesse)
    {
        return $this->vitesse = $vitesse;
    }
    public function getTemps()
    {
        return $this->temps;
    }
    public function setTemps(float $temps)
    {
        return $this->temps = $temps;
    }
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque(string $marque)
    {
        return $this->marque = $marque;
    }
    public function calculerDistance()
    {
        return $this->vitesse * $this->temps . $this->unite;
    }
}

$audi = new Voiture2;
$audi->setVitesse(40);
$audi->setTemps(2);

echo $audi->calculerDistance();
echo "<br>";
echo $audi->getMarque();
