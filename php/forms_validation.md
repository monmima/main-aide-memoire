# Form validation

Some options you can use:

- FILTER_SANITIZE_EMAIL
- FILTER_SANITIZE_ENCODED
- FILTER_SANITIZE_NUMBER_FLOAT
- FILTER_SANITIZE_NUMBER_INT
- FILTER_SANITIZE_SPECIAL_CHARS
- FILTER_SANITIZE_STRING
- FILTER_SANITIZE_URL

Example:

    <?php
        // filter to see if field empty or not
        // INPUT_POST if method is "POST" or INPUT_GET if method is "GET"
        if (filter_has_var(INPUT_POST, "data")) {
            echo "Data found<br>";
        } else {
            echo "No data<br>";
        }

        // filter to see if field content is email address
        // cleaner than using some crazy regular expression
        if (filter_has_var(INPUT_POST, "data")) {
            if (filter_input(INPUT_POST, "data", FILTER_VALIDATE_EMAIL)) {
                echo "Email is valid<br>";
            } else {
                echo "Email is not valid<br>";
            }
        }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <p><input type="text" name="data"></p>
        <button type="submit">Submit</button>
    </form>