# Using the every function

The every function check if all elements in an array pass a test.

More info at [mdn web docs](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/every).

    const test = [12, 5, 8, 130, 44].every(x => x >= 10);

    console.log(test); // false