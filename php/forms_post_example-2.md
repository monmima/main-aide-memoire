# Forms: POST example 2

If you don't want data to be visible in the URL, then you want to use POST.

<code>htmlentities()</code> is used to avoid SQL injection. For instance, imagine you were to type this in a Name field:

    <code>htmlentities()</code>

If you were to type the above without being protected by <code>htmlentities()</code>, you would actually echo out an alert message. Thanks to <code>htmlentities()</code>, you change the brackets to an entity instead.

    <?php
        if(isset($_POST["name"])) {
            // print_r($_POST);
            // $name = htmlentities($_POST["name"]);
            $name = $_POST["name"];
            echo $name;
        };
    ?>

    <form method="POST" action="index.php">
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

In the code above, the condition checks if "name" exists. Otherwise, the code would return an error in the front-end.