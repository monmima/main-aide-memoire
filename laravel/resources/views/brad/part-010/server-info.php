<?php
    // localhost/php-tutorial-by-brad-traversy/part-010-server-superglobal/server-info.php

    // https://www.youtube.com/watch?v=oVJ0anq8yLA

    # $_SERVER SUPERGLOBAL

    // Create server array
    $server = [
        "Host Server Name" => $_SERVER["SERVER_NAME"],
        "Host Header" => $_SERVER["HTTP_HOST"],
        "Server Software" => $_SERVER["SERVER_SOFTWARE"],
        "Server Root" => $_SERVER["DOCUMENT_ROOT"],
        "Current Page" => $_SERVER["PHP_SELF"],
        "Script Name" => $_SERVER["SCRIPT_NAME"],
        "Absolute Path" => $_SERVER["SCRIPT_FILENAME"]
    ];

    // echo $server['Host Server Name'];
    // echo "<br>";
    // echo $server['Host Header'];
    // echo "<br>";
    // echo $server['Server Software'];
    // echo "<br>";
    // echo $server['Server Root'];
    // echo "<br>";
    // echo $server['Current Page'];
    // echo "<br>";
    // echo $server['Script Name'];
    // echo "<br>";
    // echo $server['Absolute Path'];

    // print_r($server);

    // Create client array

    // echo "<h2>client</h2>";

    $client = [
        "Client System Info" => $_SERVER["HTTP_USER_AGENT"],
        "Client IP" => $_SERVER["REMOTE_ADDR"],
        "Remote Port" => $_SERVER["REMOTE_PORT"]
    ];

    // print_r($client);
?>