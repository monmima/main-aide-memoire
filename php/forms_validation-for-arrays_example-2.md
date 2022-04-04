# Filtering an array, example 2

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=pfY9LwcsH3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=14).

    <?php
        $arr = [
            "name" => "brad traversy",
            "age" => 35,
            "email" => "brad@email.com"
        ];

        $filters = [
            "name" => [
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords",
            ],
            "age" => [
                "filter" => FILTER_VALIDATE_INT,
                "options" => [
                    "min_range" => 1,
                    "max_range" => 120
                ]
            ],
            "email" => FILTER_VALIDATE_EMAIL
        ];

        echo "<br>";
        print_r(filter_var_array($arr));
    ?>