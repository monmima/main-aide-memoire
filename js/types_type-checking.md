# Type checking

## Integer

    const myInteger = 10;
    console.log(Number.isInteger(x));

## Array

    const myArray = [1, 2, 3];

    console.log(typeof myArray); // object
    console.log(Array.isArray(myArray)); // true

## String

    const myString = "some text"

    console.log(typeof myString); // string

## NaN

    console.log(typeof NaN); // number
    console.log(isNaN(NaN)); // true