<?php
class PaymentMethod{

    private $paymentCard;
    private $cardExpiration;


    function __construct($_paymentCard)
    {
        $this->setPaymentCard($_paymentCard);
    }

    /**
     * Get the value of paymentcard
     */ 
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Set the value of paymentcard
     *
     * @return  self
     */ 
    public function setPaymentCard($paymentCard)
    {
        $this->paymentCard = $paymentCard;

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