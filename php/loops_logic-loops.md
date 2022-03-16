# Loops

## Types of loops

* for
* while
* do... while
* for each

## For loop

    <?php
        for ($i = 0; $i < 10; $i++) {
            echo "$i<br>";
        }
    ?>

## While loop

    <?php
        $index = 1;

        while($index <= 5) {
            echo "$index <br>";
            $index++;
        }
    ?>

# Do while loop

This type loop isn't used so much. Brad Traversy never uses this. This type of loop is always gonna run at least once no matter what.

    <?php
        $index = 1;

        do {
            echo "$index <br>";
            $index++;
        } while($index <= 5);
    ?>

# For each loop

This type of loop is meant to work with arrays.

    <?php
        $people = ["Brad", "Jose", "William"];

        foreach($people as $person) {
            echo $person;
            echo "<br>";
        }
    ?>

# For each loop and associative arrays

    <?php
        $people = ["Brad" => "brad@email.com", "Jose" => "jose@email.com", "William" => "william@email.com"];

        foreach($people as $person => $email) {
            echo "$person: $email";
            echo "<br>";
        }
    ?>