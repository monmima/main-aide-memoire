# Conditions

## Operators

All the operators are pretty straightforward, except maybe for the last one, which is an exclusive **or**.

* ==
* ===
* <
* \>
* <=
* \>=
* !=
* !==
* &&
* ||
* xor

## If... else if... else statement

    $num = 4;

    if ($num == 5) {
        echo "5 passed";
    } else if ($num == 6) {
        echo "6 passed";
    } else {
        echo "not 5 nor 6";
    }

## Nested if statement

    $num = 6;

    if ($num > 5) {
        if ($num < 10) {
            echo "<br>greater than five; less than 10";
        }
    }

## Switch statement

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