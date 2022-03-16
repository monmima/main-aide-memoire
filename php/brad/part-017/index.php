<?php
    // sessions = data stored on the server

    // cookies = data store in the browser

    // sessions are more secure than cookies; Brad would recommend to use sessions instead of cookies

    if (isset($_POST["submit"])) {
        $username = htmlentities($_POST["username"]);

        // parameters:
        // 1. cookie name
        // 2. cookie variable
        // 3. cookie duration (one hours in this case)
        setcookie("username", $username, time() + 3600); // 1 hour


        // redirection
        header("Location: page2.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="Enter Username">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>