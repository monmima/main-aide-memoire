# Sessions

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=W4rSS4-LdIE&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=16).

Sessions are used to share variables between many pages. Unlike cookies, sessions are not stored in the client, but in the server, which makes them safer.

## Example

Your index.php page:

    <?php
        if (isset($_POST["submit"])) {
            session_start(); // Start the session

            # taking the POST values and putting them into session variables
            // htmlentities for security
            $_SESSION["name"] = htmlentities($_POST["name"]);
            $_SESSION["email"] = htmlentities($_POST["email"]);

            # redirect to page2.php
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

Your page2.php, which is the page where you are redirected when you submit the form on index.php:

    <?php
        session_start();

        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
    ?>

    <p>If you reload this page, without making a POST request, the variables are still there.</p>

    <p>Your name: <strong><?php echo $name; ?></strong></p>
    <p>Your email: <strong><?php echo $email; ?></strong></p>

    <a href="page3.php" title="Page 3">Go to page 3</a>
    <a href="page4.php" title="Page 4">Go to page 4</a>

## A few more details

You can reset the a variable at any time:

    $_SESSION["name"] = "John Doe";

You can also see what's in the session array with <code>print_r()</code>:

    print_r($_SESSION);

You need to use this on every page where you use session variables or you'll get an error:

    session_start();

To unset an item in the array, you use this:

    unset($_SESSION["name"]);

You can also completely destroy the session array this way:

    session_destroy();