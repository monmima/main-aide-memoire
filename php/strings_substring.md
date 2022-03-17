# Getting a substring

    <?php
        $string = "Giraffe Academy";
        
        echo substr($string, 8); // Academy
    ?>

    <?php
        $string = "This is a string."

        echo substr($string, 3, 8); // affe Aca
    ?>

    <?php
        $string = "Hello"

        echo substr($string, -2); // lo
    ?>