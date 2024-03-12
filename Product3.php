<title><?php $title = 'Products 3';
        echo $title; ?></title>

<?php

class Product3
{

    private string $title;
    private float $price;
    private int $quantity;

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
        if ($price <= 0) {
            throw new InvalidArgumentException('Le prix ne peut pas être nulle ou négatif.');
        }
        $this->price = $price;
    }

    public function getQuantity():string
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity):void
    {
        if ($quantity <= 0) {
            throw new InvalidArgumentException('La méthode ne peut pas être nulle ou négatif.');
        }
        $this->quantity = $quantity;
    }

    public function calculateTotal():string
    {
        return self::validateAndCalculateTotal($this->price, $this->quantity);
    }

    static function validateAndCalculateTotal($price, $quantity):string
    {
        if ($price <= 0 || $quantity <= 0) {
            throw new InvalidArgumentException('Le prix et la quantité doivent avoir des valeurs positives.');
        }
        return $price * $quantity;
    }
}

$table = new Product3(2,4,0);
$chaise = new Product3(2,4,0);

$table->setTitle("Table");
$table->setQuantity(2);
$table->setPrice(50);

$chaise->setTitle("Chaise");
$chaise->setQuantity(30);
$chaise->setPrice(15);


echo "Tables: " . $table->getTitle() . ", " . $table->getQuantity() . " unités, " . $table->getPrice() . Product3::PRIX . " l'unité, total: " . $table->calculateTotal() . Product3::PRIX . ".<br><br>";
echo "Chaises: " . $chaise->getTitle() . ", " . $chaise->getQuantity() . " unités, " . $chaise->getPrice() . Product3::PRIX . " l'unité, total: " . $chaise->calculateTotal() . Product3::PRIX . ".";
