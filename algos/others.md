# Other algos

This is where I store useful algos that are not from Dylan Israel's tutorials.

## Algo that counts how many times the same word is repeated in a text

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
                // console.log(wordObj.hasOwnProperty(word));
                console.log(word);
                wordObj[`${word}`] = 1;
            } else {
                wordObj.hasOwnProperty(word);
                wordObj[`${word}`]++;
            }
            
        }
        
        return wordObj;
    }

    console.log(countWords("This is a test. My text is a test with lots of words in it. That is all. Hello, hello."));