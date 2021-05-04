<?php
    // https://www.youtube.com/watch?v=0Dp7Lt7iT3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=3
    
    echo "Echo prints stuff out on the screen";
?>

<h1>
    <?php
        echo "Echo in an H1 tag."
    ?>
<h1>

<?php
    echo "Echo doesn't return a value";

    print "Print will return a value\n";

    echo "Echo is a little bit faster than print\n";

    print 1 + 1;

    // single line comment
    # single line comment
    /*
        multi-line comment
    */


    // VARIABLES

    /*
        - Prefix $, or else it will be considered as a constant
        - Start with a letter or an underscore
        - Only letters, numbers, and underscore
        - case-sensitive
    */

    $output = "Hello world";
    echo $output;

    // DATA TYPES

    /*
        strings
        integers
        floats
        booleans
        arrays
        objects
        NULL
        Resource (reference to a function; not an actual data type)
    */

    $string1 = "Hello";
    $string2 = "World!";

    $greeting = $string1 . " " . $string2;

    // just like template literals
    $greeting2 = "$string1 $string2";

    echo $greeting;
    echo $greeting2;

    // CONSTANTS
    // you can give a third parameter of "true" to a constant to make it case-insensitive

    define("GREETING", "Hello Everyone");

    echo GREETING;

?>
