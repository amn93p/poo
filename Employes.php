<?php

class Employe
{
    private string $nom;
    private string $poste;
    private float $salaire;

    public function __construct(string $nom, string $poste, float $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString(): string
    {
        return $this->nom . " " . $this->poste . " : " . $this->salaire . "€";
    }

    public function __clone(): void
    {
        $this->salaire *= 1.1 && $this->nom="James";
    }

    /**
     * Get the value of salaire
     *
     * @return float
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @param float $salaire
     *
     * @return self
     */
    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }
}


$employe1 = new Employe("John", "Développeur", 2500);
$employe2 = clone $employe1;


echo "<b>Employé 1: </b>" . $employe1 . " ";
echo "<br><br>";
echo "<b>Employé 2: </b>" . $employe2 . " ";

