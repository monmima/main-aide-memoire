
    <!-- Getting user input -->

    <!-- action is the name of the php page that we want to be able to handle this form -->
    <form action="index.php" method="GET">
        Name: <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>

    Your name is
    <?php
        echo $_GET["username"];
    ?>