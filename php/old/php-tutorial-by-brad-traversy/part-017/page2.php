<?php

    # modify the cookie
    // setcookie("username", "Frank", time() + (86400 + 30)); // 24 hours

    # unset (delete) the cookie by using something that is already passed
    // setcookie("username", "Frank", time() - 3600); // amount of time in one hour

    # check if there is any cookie
    if (count($_COOKIE) > 0) {
        echo "There are ".  count($_COOKIE). " saved.<br>";
    } else {
        echo "There are no cookies saved.<br>";
    }


    if (isset($_COOKIE["username"])) {
        echo "User " . $_COOKIE['username'] . " is set.<br>";
    } else {
        echo "User is not set.";
    }

?>