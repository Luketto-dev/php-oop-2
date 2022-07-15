<?php
require_once "classi/Cart.php";
    class User{

        private $firstName;
        private $email;
        private $lastName;
        private $isRegistered;
        public Cart $cart;

        public function __construct($_email, $_isRegistered)
        {
            $this->setEmail($_email);
            $this->setIsRegistered($_isRegistered);

            $this->cart = new Cart();
        }

        /**
         * Get the value of firstName
         */ 
        public function getFirstName()
        {
                return $this->firstName;
        }

        /**
         * Set the value of firstName
         *
         * @return  self
         */ 
        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;

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
         * Get the value of lastName
         */ 
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         *
         * @return  self
         */ 
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

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
        public function setIsRegistered($isRegistered)
        {
                $this->isRegistered = $isRegistered;

                return $this;
        }
    }
?>