<title><?php $title = 'Products 2';
        echo $title; ?></title>

<?php

class Product2
{
    private string $title;
    private float $price;
    private int $quantity;

    public const PRIX = '€';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function calculateTotal(): string
    {
        return self::validateAndCalculateTotal($this->price, $this->quantity);
    }

    static function validateAndCalculateTotal($price, $quantity)
    {
        if ($price <= 0 || $quantity <= 0) {
            throw new InvalidArgumentException('Le prix et la quantité doivent avoir des valeurs positives.');
        }
        return $price * $quantity;
    }
}

$table = new Product2();
$chaise = new Product2();

$table->setTitle("Table");
$table->setQuantity(5);
$table->setPrice(30);

$chaise->setTitle("Chaise");
$chaise->setQuantity(10);
$chaise->setPrice(25);

echo "Tables: " . $table->getTitle() . ", " . $table->getQuantity() . " unités, " . $table->getPrice() . Product2::PRIX . " l'unité, total: " . $table->calculateTotal() . Product2::PRIX . ".<br><br>";
echo "Chaises: " . $chaise->getTitle() . ", " . $chaise->getQuantity() . " unités, " . $chaise->getPrice() . Product2::PRIX . " l'unité, total: " . $chaise->calculateTotal() . Product2::PRIX . ".";
