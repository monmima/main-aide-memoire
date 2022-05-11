# Turning an object into an array

    let myObj = {
        "a": 1,
        "b": 2
    }

    const myArr = Object.entries(myObj);

    console.log(myArr); // [ [ 'a', 1 ], [ 'b', 2 ] ]