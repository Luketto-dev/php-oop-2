<?php
require_once __DIR__ . "/Product.php";

class Kennel extends Product{

    private $size;
    private $material;


    function __construct($_price, $_name, $_size)
    {
        parent::__construct($_price, $_name);
        $this->setSize($_size);
    }
    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}
?>