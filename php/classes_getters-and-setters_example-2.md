# Classes: using getters and setters or how to access a private variable

This is a simple example of how to use setters and getters in PHP.

    <?php
        class User {
            public $person;
            private $password;

            function __construct($person, $password) {
                $this->person = $person;
                $this->password = $password;
            }

            function getPassword () {
                return $this->password;
            }

            function setPassword ($password) {
                $this->password = $password;
            }
        }

        // creating a person
        $myAccount = new User("Jake", "1234");

        // accessing a public variable the right way
        echo $myAccount->person . "<br>";

        // trying to access a private variable the wrong way (throws error)
        // echo $myAccount->password . "<br>";

        // accessing a private variable the right way
        echo $myAccount->getPassword() . "<br>";

        // setting the password to "password"
        $myAccount->setPassword("password");

        // echoing the password again to show the difference after using the setter
        echo $myAccount->getPassword() . "<br>";
    ?>
