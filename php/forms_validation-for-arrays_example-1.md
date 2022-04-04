# Filtering an array, example 1

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=pfY9LwcsH3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=14).

If you don't type a valid email in the first field or a valid integer between 1 and 100 in the second field, you are going to echo out empty array items in the front-end.

    <?php
        $filters = [
            "data" => FILTER_VALIDATE_EMAIL,
            "data2" => [
                "filter" => FILTER_VALIDATE_INT,
                "options" => [
                    "min_range" => 1,
                    "max_range" => 100
                ]
            ]
        ];

        echo "<br>";
        print_r(filter_input_array(INPUT_POST, $filters));
    ?>


    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <p><input type="text" name="data"></p>
        <p><input type="text" name="data2"></p>
        <button type="submit">Submit</button>
    </form>