<?php
    /**
     * To prevent certains attacks, you can use "htmlentities"
     * 
     * Remember you also have to change the method of the form (POST or GET)
     */
    // if (isset($_GET["name"])) {
    //     echo $_GET["name"];
    //     $name = htmlentities($_GET["name"]);
    //     echo $name;
    // }

    /**
     * If you don't want data to be visible in the URL, then you want t use POST.
     * 
     * Remember you also have to change the method of the form (POST or GET)
     */
    if(isset($_POST["name"])) {
        // print_r($_POST);
        $name = htmlentities($_POST["name"]);
        echo $name;
    };

    /**
     * REQUEST is not used very much. You want to stick with GET and POST.
     * 
     * $_REQUEST works whether the value is POST or GET
     */
    // if(isset($_REQUEST["name"])) {
    //     print_r($_REQUEST);
    //     $name = htmlentities($_REQUEST["name"]);
    //     echo $name;
    // };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="POST">
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


</body>
</html>