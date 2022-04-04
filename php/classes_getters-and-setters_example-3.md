# Classes, getters and setters

A full class with getters and setters.

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=FhbP6bF21Cs&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=20).

    <?php
        class Person{
            private $name;
            private $email;
            private static $ageLimit = 40;

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

            public static function getAgeLimit(){
                return self::$ageLimit;
            }
        }

        $person1 = new Person('John Doe', 'jdoe@gmail.com');
        echo $person1->getName();