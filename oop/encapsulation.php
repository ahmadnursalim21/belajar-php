<?php

class Product
{
    private $name;
    protected $price;
    public $decription;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }
}

$productMe = new Product();
$productMe->setName("laptop");
echo $productMe->getName();

echo "<br>";
$productMe->setPrice(10000000);
echo $productMe->getPrice();