## `forEach()` loops

Based on material from [freeCodeCamp](https://www.freecodecamp.org/news/javascript-foreach-how-to-loop-through-an-array-in-js/).

More info at [mdn web docs](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach).

Your array:

    const numbers = [1, 2, 3, 4, 5];

A basic for loop:

    for (i = 0; i < numbers.length; i++) {
        console.log(numbers[i]); // 1, 2, 3, 4, 5
    }

A basic `forEach()` loop:

    numbers.forEach(function(number) {
        console.log(number); // 1, 2, 3, 4, 5
    });

A `forEach()` loop with an arrow function:

    numbers.forEach(number => console.log(number)); // 1, 2, 3, 4, 5

A `forEach()` loop with an index parameter

    numbers.forEach((number, index) => {
        console.log('Index: ' + index + ' Value: ' + number); // Index: 0 Value: 1, etc.
    });

A `forEach()` loop with an index parameter

    numbers.forEach((number, index, array) => {
        console.log(array); // [1, 2, 3, 4, 5] * 5
    });

A `forEach()` loop test by myself

    const arr = [5, 4, 3, 2, 1];
    const arr2 = [6];

    arr.forEach(function (e) {
        arr2.push(e);
    });

    console.log(arr2); // [6, 5, 4, 3, 2, 1]

A more concise version of the same `forEach()` loop

    const arr = [5, 4, 3, 2, 1];
    const arr2 = [6];

    arr.forEach(e => arr2.push(e) );

    console.log(arr2); // [6, 5, 4, 3, 2, 1]