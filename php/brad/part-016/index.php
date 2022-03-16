<?php
    if (isset($_POST["submit"])) {
        session_start(); // Start the session

        # taking the POST values and putting them into session variables
        // htmlentities for security
        $_SESSION["name"] = htmlentities($_POST["name"]);
        $_SESSION["email"] = htmlentities($_POST["email"]);

        # redirect
        header("Location: page2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <p><input type="text" name="name" placeholder="Enter name"></p>
        <p><input type="text" name="email" placeholder="Enter email"></p>
        <p>
            <button type="submit" name="submit">Submit</button>
        </p>

    
    </form>
</body>
</html>