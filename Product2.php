<title><?php $title = 'Products 2';
        echo $title ?>
</title>

<?php
class Product2
{

    private string $title;
    private float $price;
    private int $quantity;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function calculeTotal()
    {
        return $this->price * $this->quantity;
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

echo "Tables : " . $table->getTitle() . ", " . $table->getQuantity() . " unités, " . $table->getPrice() . "€ l'unité, total : " . $table->calculeTotal() . "€.";
echo "<br><br>";
echo "Chaises : " . $chaise->getTitle() . ", " . $chaise->getQuantity() . " unités, " . $chaise->getPrice() . "€ l'unité, total : " . $chaise->calculeTotal() . "€.";
