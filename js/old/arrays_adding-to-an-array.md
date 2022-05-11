# Adding something to the middle of an array

## Adding to the middle of an array

    .splice()

## Adding to the start of an array

    // ES5
    arr.unshift("start");

or

    // ES6
    // Spread operator

    arr = ["start", ...arr];

## Adding to the end of an array

    // ES5
    arr.push("end");

or

    // ES6
    // Spread operator

    arr = [...arr, "end"];
