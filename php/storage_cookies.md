# Cookies

From a [Tutorial by Brad Traversy](https://www.youtube.com/watch?v=RzMjwICWKr4&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=18).

Sessions are used to share variables between many pages. Unlike cookies, sessions are not stored in the client, but in the server, which makes them safer.

## Example

Your index.php file:

    <?php
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

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

Your page2.php file:

    <?php
        # check if there is any cookie
        if (count($_COOKIE) > 0) {
            echo "There are ".  count($_COOKIE). " saved.<br>";
        } else {
            echo "There are no cookies saved.<br>";
        }

        # print out a message for the username cookie
        if (isset($_COOKIE["username"])) {
            echo "User " . $_COOKIE['username'] . " is set.<br>";
        } else {
            echo "User is not set.";
        }
    ?>

## More info

You can reset your cookie like this:

    setcookie("username", "Frank", time() + (86400 * 30)); // 24 hours

You can unset/reset a cookie by setting it to something that's already past:

    setcookie("username", "Frank", time() - 3600); // an hour ago

Checking if there are cookies that are set:

    if (count($_COOKIE) > 0) {
        echo "There are ".  count($_COOKIE). " saved.<br>";
    } else {
        echo "There are no cookies saved.<br>";
    }

If you want to store more than one thing in a cookie, you use an associative array:

    <?php
        # When you want to store many things in a cookie, you use an array.

        $user = ["name" => "Brad", "email" => "test@test.com", "age" => 35];

        # serialize is used to prepare the data for the cookie; if you comment out this part of the code you'll get an error with the parameters
        $user = serialize($user);

        setcookie("user", $user, time() + (86400 * 30));

        # if you want to display the array that you have just serialized, you need to unserialize it
        // $user = $_COOKIE["user"]; // this won't work
        $user = unserialize($_COOKIE["user"]);

        echo $user["name"] . "<br>";
        print_r($user);
    ?>