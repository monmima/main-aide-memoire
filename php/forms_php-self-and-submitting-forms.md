# Forms: <code>$_SERVER["PHP_SELF"]</code> and submitting forms

You might want to reload the current page in your <code>action</code> parameter, regarless of what the URL might be or even if you change it at a later stage. Here is how you handle this.

    <?php
        echo $_SERVER["PHP_SELF"];
    ?>

    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <p><input type="text" name="data"></p>
        <button type="submit">Submit</button>
    </form>