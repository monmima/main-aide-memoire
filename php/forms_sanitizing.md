# Forms and sanitizing

Some options you can use:

- FILTER_VALIDATE_BOOLEAN
- FILTER_VALIDATE_EMAIL
- FILTER_VALIDATE_FLOAT
- FILTER_VALIDATE_INT
- FILTER_VALIDATE_IP
- FILTER_VALIDATE_REGEXP
- FILTER_VALIDATE_URL

Example:

    <?php
        // removing illegal chars (= sanitizing)
        $email = $_POST["data"];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . "<br>";
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <p><input type="text" name="data"></p>
        <button type="submit">Submit</button>
    </form>