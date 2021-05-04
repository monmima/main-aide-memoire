<?php

    # CONDITIONALS

    // https://www.youtube.com/watch?v=x6UDhaHVaeY

    /**
     * == (like with JS)
     * === (like with JS)
     * <
     * >
     * <=
     * >=
     * !=
     * !==
     */

    $num = 4;
    if ($num == 5) {
        echo "5 passed";
    } else if ($num == 6) {
        echo "six passed";
    } else {
        echo "did not pass";
    }

    # NESTING IF

    $num = 6;

    if ($num > 5) {
        if ($num < 10) {
            echo "<br>greater than five; less than 10";
        }
    }

    # LOGICAL OPERATORS

    /*
        and && --- one or the other
        or || --- one or the other
        xor --- exclusive or; one or the other is true, but not both
    */

    # SWITCH

    $favColor = "red";

    switch ($favColor) {
        case "red":
            echo "Your favorite color is red";
        break;
        case "blue":
            echo "Your favorite color is blue";
        break;
        case "green":
            echo "Your favorite color is green";
        break;
        default:
            echo "Your favorite color is something else.";
        break;
    }
?>