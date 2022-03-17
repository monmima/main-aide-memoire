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
* !$myVar

## If... else if... else statement

    $num = 4;

    if ($num == 5) {
        echo "5 passed";
    } else if ($num == 6) {
        echo "6 passed";
    } else {
        echo "not 5 nor 6";
    }

## Ternary operator

    $loggedIn = true;

    echo $loggedIn ? "You are logged in" : "You are NOT logged in";

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

## Ternary operator

