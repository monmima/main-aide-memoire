# Classes and inheritance

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=FhbP6bF21Cs&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=20).

    <?php
        class Person{
            private $name;
            private $email;

            public function __construct($name, $email){
                $this->name = $name;
                $this->email = $email;
                echo __CLASS__ . ' created<br>';
            }

            public function __destruct(){
                echo __CLASS__ . ' destroyed<br>';
            }

            public function setName($name){
                $this->name = $name;
            }

            public function getName(){
                return $this->name.'<br>';
            }

            public function setEmail($email){
                $this->email = $email;
            }

            public function getEmail(){
                return $this->email.'<br>';
            }
        }

        class Customer extends Person{
            private $balance;

            public function __construct($name, $email, $balance){
                parent::__construct($name, $email, $balance);
                $this->balance = $balance;
                echo 'A new '.__CLASS__.' has been created<br>';
            }

            public function setBalance($balance){
                $this->balance = $balance;
            }

            public function getBalance(){
                return $this->balance.'<br>';
            }
        }

        $customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);
        echo $customer1->getBalance();
