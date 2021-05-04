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