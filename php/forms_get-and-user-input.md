# Getting user input

<code>action</code> is the name of the php page that we want to be able to handle this form.

In this case, the name of the current page is **index.php**.

    <form action="index.php" method="GET">
        Name: <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>

    Your name is:
    <?php
        echo $_GET["username"];
    ?>