# Other algos

This is where I store useful algos that are not from Dylan Israel's tutorials.

## Counting how many times the same word is repeated in a text

    function countWords(text) {
        let wordObj = {}

        // removing punctuation
        text = text.replace(/(\.|,|«|»)/gi, "");

        // changing all letters to lowercase
        text = text.toLowerCase();

        // spliting str into arr
        text = text.split(" ");

        for (word of text) {
            if (!wordObj.hasOwnProperty(word)) {
                // word in object
                console.log(word);
                wordObj[`${word}`] = 1;
            } else {
                // word not already in object
                wordObj.hasOwnProperty(word);
                wordObj[`${word}`]++;
            }
            
        }
        
        return wordObj;
    }

    console.log(countWords("This is a test. My text is a test with lots of words in it. That is all. Hello, hello."));

## Sorting an object by value

This algorithm was created with the help of information found on [stackoverflow](https://stackoverflow.com/questions/1069666/sorting-object-property-by-values).

    function sortObj(obj) {
        let sortable = [];

        for (let item in obj) {
            sortable.push([item, obj[item]]);
        }

        sortable.sort(function(a, b) {
            return a[1] - b[1];
        });

        return sortable;
    }

    console.log(sortObj(
        {
            "word": 100,
            "other": 10,
            "and": 3,
            "likely": 2
        }
    ));

## Turning an object into an array

    let myObj = {
        "a": 1,
        "b": 2
    }

    const myArr = Object.entries(myObj);

    console.log(myArr); // [ [ 'a', 1 ], [ 'b', 2 ] ]

## Finding common values between two arrays

    const arrA = ["harry", "potter", "hagrid"];
    const arrB = ["hermione", "potter", "ron"];

    function storeCommonValues(arrA, arrB) {
        const commonArr =  [];

        for (let i of arrA) {
            console.log(i);

            // -1 if value is not in arrB
            if (arrB.indexOf(i) > -1) {
                commonArr.push(i);
            }
        }

        return commonArr;
    }

    console.log(storeCommonValues(arrA, arrB)); // [ "potter" ]

## Finding commons values between two objects

    const obj1 = {
        "harry": 20,
        "hermione": 15,
        "ron": 10,
        "fred": 5
    };

    const obj2 = {
        "harry": 20,
        "hermione": 16,
        "fred": 5
    };

    function storeCommonValues(obj1, obj2) {
        const commonObj = {};

        for (const item in obj1) {
            console.log(`${item}: ${obj1[item]}`);

            console.log(obj2[item]);

            if (obj2[item] !== undefined && (obj1[item] === obj2[item])) {
                console.log(true);
                commonObj[item] = obj1[item];
            }
        }

        return commonObj;
    }

    console.log(storeCommonValues(obj1, obj2)); // { harry: 20, fred: 5 }

## Sorting an object by turning it into an array and back to an object

const myObj = {
    "fred": 5,
    "harry": 20,
    "hermione": 16
};

function sortObj(obj) {
    const arr = [];
    let sortedObj = {};

    // creating arr from obj
    for (let item in obj) {
        arr.push([[`${item}`], [`${obj[item]}`]]);
    }

    // sorting arr
    arr.sort(function(a, b) {
        return b[1] - a[1];
    });

    // turning arr into obj again
    for (let i of arr) {
        // exclusing strings shorter than 4
        if (i[0][0].length >= 4) {
            sortedObj[ i[0] ] = i[1][0];
        }
    }

    return sortedObj;
}

console.log(sortObj(myObj)); // { harry: '20', hermione: '16', fred: '5' }