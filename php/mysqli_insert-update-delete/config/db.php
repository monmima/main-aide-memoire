<?php
    // echo "test";

    // create connection
    /**
     * If you change the name of the database below (php_blog), you're going to get an error message regarding the name of the database. 
     */
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection
    if (mysqli_connect_errno()) {
        // connection failed
        echo "failed to connect to MySQL", mysqli_connect_errno();
    }

?>