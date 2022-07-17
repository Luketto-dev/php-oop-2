<?php
class PaymentHandler{

    private $paymentsMethods= [];


    public function addpaymentMethod($_paymentMethod){

        $this->paymentsMethods[] = $_paymentMethod;
    }

    /**
     * Get the value of paymentsMethods
     */ 
    public function getPaymentsMethods()
    {
        return $this->paymentsMethods;
    }

    public Function getMethod($index){
        return $this->getPaymentsMethods()[$index];
    }
}
?>