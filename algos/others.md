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


