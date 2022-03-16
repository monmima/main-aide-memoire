# Forms get versus post

    <form action="index.php" method="POST">
        Password: <input type="password" name="password"><br>

        <button type="submit">Submit</button>
    </form>

    <?php
        echo $_POST["password"];
    ?>
