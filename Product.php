<?php

class Product
{

    public string $title;
    public float $price;
    public int $quantity;

    public function calculeTotal()
    {
        return $this->price * $this->quantity;
    }
}
$product = new Product();

$product->title = "Chaise";
$product->quantity = 10;
$product->price = 25;

echo "le produit est un(e) " . $product->title . ", il y'en a " . $product->quantity . " au prix de " . $product->price . "€ pour un total de " . $product->calculeTotal() . "€.";
