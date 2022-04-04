# Variables

## $ variables

- Prefixed with "$".
- Start with a letter or an underscore.
- Only letters, numbers, and underscores.
- Case-sensitive.

        <?php
            $myVar = "Hello world";
            echo $myVar;
        ?>

## Constants

You can give a third parameter of "true" to a constant to make it case-insensitive.

    <?php
        define("GREETING", "Hello Everyone");

        echo GREETING;
    ?>
