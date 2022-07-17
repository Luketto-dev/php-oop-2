<?php
class Product{

    private float $price;
    private string $name;
    private $id;


    function __construct($_price, $_name)
    {
        $this->setPrice($_price);
        $this->setName($_name);
        $this->id = uniqid();
    }
    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}
?>