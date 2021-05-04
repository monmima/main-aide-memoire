<?php
    // https://www.youtube.com/watch?v=ApP1rgZ9OlY

    // simple function

    function simpleFunction() {
        echo "Hello World";
    }

    simpleFunction();

    // function with (default) param

    function sayHello($name = "default") {
        echo "<br>Hello $name!<br>";
    }

    sayHello("Joe");
    sayHello("Bob");
    sayHello();

    // return value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(5, 6);

    // By reference
    // Brad Traversy doesn't use this very much.

    $myNum = 10;

    function addFive($num) {
        $num += 5;
    }

    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);

    echo "value: $myNum<br>";

    addTen($myNum);

    echo "value: $myNum<br>";
?>