# The $_SERVER superglobal

From a [tutorial by Brad Traversy](https://www.youtube.com/watch?v=oVJ0anq8yLA).

The $_SERVER superglobal gives you information about file path, client info like the client browser, the client IP address.

Getting the server name

    echo $_SERVER["SERVER_NAME"]; // localhost

Getting the host header

    echo $_SERVER["HTTP_HOST"]; // localhost:1234

Getting the server software

    echo $_SERVER["SERVER_SOFTWARE"]; // PHP 7.4.3 Development Server

Getting the root of your Web server. You are probably going to need this often.

    echo $_SERVER["DOCUMENT_ROOT"]; // /home/abc/Desktop/documents/progs/aide-memoire-ssh/php/brad/part-010

Getting the current page

    echo $_SERVER["PHP_SELF"]; // /server-info.php

Getting the script name

    echo $_SERVER["SCRIPT_NAME"]; // /server-info.php

Getting the absolute path

    echo $_SERVER["SCRIPT_FILENAME"]; // /home/abc/Desktop/documents/progs/aide-memoire-ssh/php/brad/part-010/server-info.php

Getting client system info

    echo $_SERVER["HTTP_USER_AGENT"]; // Mozilla/5.0 (X11; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0

Getting the client IP

    echo $_SERVER["REMOTE_ADDR"]; // 127.0.0.1

Getting the remote address

    echo $_SERVER["REMOTE_PORT"]; // 48922

Getting the query string.

    echo $_SERVER["QUERY_STRING"]; // name=abc&email=abc%40abc.com

Of course, your need a query and a GET request (not a POST request) to get the content of the query string. So here is a simple example:

    <?php
        if(isset($_GET["name"])) {
            $name = $_GET["name"];
            echo $name;
            echo "<br>";
            echo $_SERVER["QUERY_STRING"];
        };
    ?>

    <form method="GET" action="index.php">
        <div>
            <p><label for="">Name</label></p>
            <input type="text" name="name">
        </div>
        <div>
            <p><label for="">Email</label></p>
            <input type="email" name="email">
        </div>

        <button type="submit">Submit</button>
    </form>
