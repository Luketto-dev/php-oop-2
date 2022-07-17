<?php
class Cart{

    private $products = [];


    public function addProduct(...$_products){
        array_push($this->products, ...$_products);
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }


    public function getTotal($discount=0){
        $total = 0;

        foreach($this->products as $product){

            $total += $product->getPrice();
        }

        return $total;
    }
}
?>