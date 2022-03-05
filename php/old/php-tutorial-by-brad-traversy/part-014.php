

<?php
    # Gives you the current page
    # echo $_SERVER["PHP_SELF"];

    // Check for posted data
    // INPUT_POST pour method="post"
    // if (filter_has_var(INPUT_POST, "data")) {
    //     echo "Data found";
    // } else {
    //     echo "No data";
    // }

    if (filter_has_var(INPUT_POST, "data")) {
        $email = $_POST["data"];

        // Remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email. "<br>";

        if (filter_input(INPUT_POST, "data", FILTER_VALIDATE_EMAIL)) {
            echo "Email is valid";
        } else {
            echo "Email is not valid";
        }
    }

    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    $var = 23;
    echo "<br>";

    # Brad explains in his tutorial that filtering (filter_var) can be used to prevent malicious code injection.

    if (filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var. " is a number";
    } else {
        echo $var. " is NOT a number";
    }

    # sanitizing an integer
    $var = "djkfl343143";
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    # filtering an array

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


<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <p><input type="text" name="data"></p>
    <p><input type="text" name="data2"></p>
    <button type="submit">Submit</button>
</form>