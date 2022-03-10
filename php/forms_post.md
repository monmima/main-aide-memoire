# Forms get versus post

Since the POST method is being used here nothing shows up in the adress bar above. Passwords should always be handled with the POST method.

    <form action="index.php" method="POST">
        Password: <input type="password" name="password"><br>

        <button type="submit">Submit</button>
    </form>

    <?php
        echo $_POST["password"];
    ?>
