<?php

declare(strict_types=1);

class Personne
{
    private string $nom;
    private string $prenom;
    private string $autorisation;
    // le construct permet d'initialiser une action de l'instanciation d'une classe
    public function  __construct(string $nom, string $prenom)
    {
        $this->autorisation = "RH";
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function __toString()
    {
        return "Nom : " . $this->nom . ", Prenom : " . $this->prenom;
    }
    public function __clone(){
        $this->autorisation = "Membre";
    }
}

$personne = new Personne('Doe', 'John');

$personne2 = clone $personne;

var_dump($personne);

echo "<br>";

var_dump($personne2);
