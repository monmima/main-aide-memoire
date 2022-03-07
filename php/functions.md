# Functions

## Simple function

    function simpleFunction() {
        echo "Hello World";
    }

    simpleFunction(); // "Hello World"

## Function with default parameter

    function sayHello($name = "default") {
        echo "<br>Hello $name!<br>";
    }

    sayHello("Joe"); // "Hello Joe!"
    sayHello(); // "Hello default!"

## Returning a value

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(5, 6); // 11