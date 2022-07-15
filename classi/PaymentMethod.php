<?php
class PaymentMethod{

    private $paymentcard;
    private $cardExpiration;


    function __construct($_cardExpiration)
    {
        $this->setCardExpiration($_cardExpiration);
    }

    /**
     * Get the value of paymentcard
     */ 
    public function getPaymentcard()
    {
        return $this->paymentcard;
    }

    /**
     * Set the value of paymentcard
     *
     * @return  self
     */ 
    public function setPaymentcard($paymentcard)
    {
        $this->paymentcard = $paymentcard;

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
}
?>