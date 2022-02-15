# Turning an object into an array of its keys

    const myObj = {
        "harry": 1,
        "hermione": 2
    }

    const myArr = Object.keys(myObj);
    console.log(myArr); // ["harry", "hermione"]