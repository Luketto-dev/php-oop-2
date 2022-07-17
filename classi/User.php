<?php
require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/paymentHandler.php";
    class User{

        private $userName;
        private $email;
        private $isRegistered = false;
        public Cart $cart;
        public PaymentHandler $paymentHandler;
        

        public function __construct($_email = null, $_userName = null)
        {
            // se mi vengono passati email e username allora è registrato altrimenti no    
            if (isset($_email) && isset($_userName)) {
                $this->registered($_email, $_userName);
            }

            $this->cart = new Cart();
            $this->paymentHandler = new PaymentHandler();
        }

        /**
         * Get the value of userName
         */ 
        public function getUserName()
        {
                return $this->userName;
        }

        /**
         * Set the value of userName
         *
         * @return  self
         */ 
        public function setUserName($userName)
        {
                $this->userName = $userName;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                
                $this->email = $email;

                return $this;
        }


        /**
         * Get the value of isRegistered
         */ 
        public function getIsRegistered()
        {
                return $this->isRegistered;
        }

        /**
         * Set the value of isRegistered
         *
         * @return  self
         */ 
        private function setIsRegistered($isRegistered)
        {
                $this->isRegistered = $isRegistered;

                return $this;
        }

        public function registered($_email, $_userName){
                $this->setEmail($_email);
                $this->setUserName($_userName);
                $this->setIsRegistered(true);
        }

        public function checkOut($paymentIndex){
                //recuperare il totale del carrello 

                $total = $this->cart->getTotal();

                // controllare se deve fare uno sconto 
                $discount = $this->isRegistered ? 20 : 0;

                $totalWithDiscount = $total - ($total * $discount / 100);

                // controllare se il metodo non sia scaduto

                $method = $this->paymentHandler->getMethod($paymentIndex);


                if ($method->checkExpiration()) {
                        echo "pagamento riuscito per un totale di euro " . $totalWithDiscount . " per l'utente " . $this->getUserName();
                }else{
                        echo "pagamento fallito per l' utente " . $this->getUserName();
                }
                // concludere il pagamento
        }
    }
?>