# Forms and getting user input: example 3

<code>action</code> is the name of the php page that we want to be able to handle with this form.

    <form action="index.php" method="GET">

        Name: <input type="text" name="name"><br>

        <button type="submit">Submit</button>

    </form>

    <?php
        echo $_GET["name"];
    ?>