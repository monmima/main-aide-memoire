<?php
    // https://www.youtube.com/watch?v=5ggUfM6mvSk&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=5

    # LOOPS = executes code set number of times

    /**
     * for
     * while
     * do... while
     * for each
     */

    # FOR LOOP


    echo "For loop<br><br>";

        for ($i = 0; $i < 10; $i++) {
        echo "$i<br>";
    }

    # WHILE LOOP
    # usually used over a for loop if you don't know the set condition

    echo "<br>While loop<br>";

        $i = 0;

        while ($i < 10) {
            echo $i;
            echo "<br> ";
            $i++;
        }

    # DO WHILE LOOP
    # isn't used as much
    # Brad Traversy never uses do while loops
    # always gonna run at least once no matter what

    echo "<br>Do while loop<br>";

    $i = 0;
    do {
        echo $i;
        echo "<br>";
        $i++;
    }

    while($i < 10);

    # FOR EACH
    # meant to work with arrays

    echo "<br>FOR EACH<br>";

    $people = ["Brad", "Jose", "William"];

    foreach($people as $person) {
        echo $person;
        echo "<br>";
    }

    # FOR EACH WITH AN ASSOCIATIVE ARRAY
    # meant to work with arrays

    echo "<br>FOR EACH with an associative array<br>";

    $people = ["Brad" => "brad@email.com", "Jose" => "jose@email.com", "William" => "william@email.com"];

    foreach($people as $person => $email) {
        echo "$person: $email";
        echo "<br>";
    }

?>