<?php

abstract class Product4
{

  private string $title = '';
  private float $price = 20;
  private int $quantity = 5;

  public const PRIX = '€';

  public function __construct(string $title, float $price, int $quantity)
  {
    $this->title = $title;
    $this->price = $price;
    $this->quantity = $quantity;
     
  }

  public function getTitle():string
  {
    return $this->title;
  }

  public function setTitle(string $title):void
  {
    $this->title = $title;
  }

  public function getPrice():string
  {
    return $this->price;
  }

  public function setPrice(float $price):void
  {
    $this->price = $price;
  }

  public function getQuantity():string
  {
    return $this->quantity;
  }

  public function setQuantity(int $quantity):void
  {
    $this->quantity = $quantity;
  }

  public function calculateTotal():string
  {
    return self::validateAndCalculateTotal($this->price, $this->quantity);
  }

  static function validateAndCalculateTotal($price, $quantity):string
  {
    return $price * $quantity;
  }
}

class Meuble extends Product4 {

  private string $couleur;

  public function __construct(string $title, float $price, int $quantity, string $couleur) {
    parent::__construct($title, $price, $quantity);
    $this->couleur = $couleur;
  }

  public function getCouleur(): string {
    return $this->couleur;
  }

  public function setCouleur(string $couleur): void {
    $this->couleur = $couleur;
  }

}

class Vetement extends Product4 {

  private string $taille;

  public function __construct(string $title, float $price, int $quantity, string $taille) {
    $this->taille = $taille;
  }

  public function getTaille(): string {
    return $this->taille;
  }

  public function setTaille(string $taille): void {
    $this->taille = $taille;
  }

}

$table = new Meuble("Table", 50, 2, "Blanche");
$chaise = new Vetement("Chaise", 15, 30, "M");

echo "Tables: " . $table->getTitle() . ", " . $table->getQuantity() . " unités, " . $table->getPrice() . Product4::PRIX . " l'unité, couleur : " . $table->getCouleur() . ", total: " . $table->calculateTotal() . Product4::PRIX . ".<br><br>";
echo "Chaises: " . $chaise->getTitle() . ", " . $chaise->getQuantity() . " unités, " . $chaise->getPrice() . Product4::PRIX . " l'unité, taille : " . $chaise->getTaille() . ", total: " . $chaise->calculateTotal() . Product4::PRIX . ".";
