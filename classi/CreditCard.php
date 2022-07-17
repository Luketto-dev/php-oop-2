<?php
class CreditCard{

    private $type;
    private $number;
    private $cvv;
    private $cardExpiration;

    
    function __construct($_type, $_number, $_cvv, $_cardExpiration)
    {
        $this->setType($_type);
        $this->setNumber($_number);
        $this->setCvv($_cvv);
        $this->setCardExpiration($_cardExpiration);
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of cardExpiration
     */ 
    public function getCardExpiration()
    {
        return $this->cardExpiration;
    }

    /**
     * Set the value of cardExpiration
     *
     * @return  self
     */ 
    public function setCardExpiration($cardExpiration)
    {
        $this->cardExpiration = $cardExpiration;

        return $this;
    }


    // ritorna un booleano se la 
    public function checkExpiration(){

        $expiration = DateTime::createFromFormat("m/y", $this->cardExpiration);
        $now = new DateTime("now");

        
        return $expiration > $now;


    }
}
?>