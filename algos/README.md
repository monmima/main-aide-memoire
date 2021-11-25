# 100-algorithms-challenge_dylan-israel

Dylan Israel uses VS Code with the Quokka extension to get the output in real time. If you go to his [Web site](http://www.dylanisrael.com/) before buying his class on Udemy, you'll find a coupon code.

## Algos

### 1. Return the median value

**Score: 0.5/1 - 50 %**

Return the value in the middle of an array. If two values are in the middle (if the number of values in the array is even), return the first value of these.

For instance, for <code>[2, 4, 7, 6]</code>, <code>4</code> and <code>7</code> are the pair in the middle and <code>4</code> is the first of these values.

    function absoluteValuesSumMinization() {
        // your code here
    }

    console.log(absoluteValuesSumMinization([2, 4, 7])); // 4
    console.log(absoluteValuesSumMinization([2, 4, 7, 6])); // 4
    console.log(absoluteValuesSumMinization([2, 4, 7, 6, 6])); // 7
    console.log(absoluteValuesSumMinization([2, 4, 7, 6, 6, 8])); // 6

Answer:

    const isEven = arr.length % 2 === 0;

    let middle;

    if (isEven) {
        middle = Math.floor(arr.length / 2) - 1;
    } else {
        middle = Math.floor(arr.length / 2);
    }

    return arr[middle];

## 2.1

**Score: 1/1 - 100 %**

Write a function that returns the sum of two numbers.

    function add (num1, num2) {
        // your code here
    }

    // console.log(add(1, 2)); // 3
    // console.log(add(3, 2)); // 5

Answer

    return num1 + num2;

## 2.2

**Score: 1/1 - 100 %**

Write a function that returns the sum of all numbers regardless of # of params.

    function add2 (...param) {
        // your code here
    }

    console.log(add2(1, 2, 3, 4, 5)); // 15
    console.log(add2(2, 3)); // 5

Answer

    let total = 0;

    param.forEach((num) => {
        total += num;
    });

    return total;

## 3.

**Score: 1/1 - 100 %**

Given a rectangular matrix of characters, add a border of asterisks to it.

    function addBorder() {
        // your code here
    }

    // console.log(addBorder(["abc", "def"]));

Answer

    const lenOfWall = str[0].length + 2;
    let wall = "";
    let output = [];

    // to avoid a loop, use repeat()
    wall = "*".repeat(lenOfWall);

    // add intermediary rows
    str.forEach((row) => {
        output.push(`*${row}*`);
    });

    // add first and last rows
    output.unshift(wall);
    output.push(wall);

    return output;

## 4.

**Score: 0.5/1 - 50 %**

Return the sum of a two-digit number.

    function addTwoDigits() {
        // your code here
    }

    // console.log(addTwoDigits(29));

Answer


    let res = nums.toString().split("");

    return parseInt(res[0]) + parseInt(res[1]);

or

    let res = nums.toString().split("");

    return res.reduce((a, b) => {
        return parseInt(a) + parseInt(b);
    });

## 5.

Given an array of integers, find the pair of adjacent elements that has the highest product and return that product.

    function adjacentElementsProduct() {
        // your code here
    }

    console.log(adjacentElementsProduct([3, 6, -2, -5, 7, 3]));

Answer

    let highest = 0;

    for (let i = 0; i < arr.length - 1; i++) {
        currSum = arr[i] * arr[i + 1];

        highest = currSum > highest ? currSum : highest;
    }

    return highest;

## 6.

**Score: 1/1 - 100 %**

Given an array of strings, return another array containing all of its longest strings.

    function allLongestStrings(arr) {
        // your code here
    }

    console.log(allLongestStrings(["aba", "aa", "ad", "vcd", "aba"]));

Answer

    let longestLen = 0;
    let longestWords = [];

    for (str of arr) {
        longestLen = str.length > longestLen ? str.length : longestLen;
    }

    for (str of arr) {
        if (str.length === longestLen) {
            longestWords.push(str);
        }
    }

    return longestWords;

## 7.

**Score: 1/1 - 100 %**

Given a sequence of integers, as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.

    function almostIncreasingSequence(arr) {
        // your code here
    }

    console.log(almostIncreasingSequence([1, 3, 2, 1]));
    console.log(almostIncreasingSequence([1, 3, 2]));

Answer
    
    let nbErr = 0;
    let lastItem = 0;

    for (let item of arr) {
        if (item <= lastItem) {
            nbErr++;
        }

        lastItem = item;
    }

    // return errCount.length <= 1;    
    return nbErr <= 1;    

## 8.

**Score: 0/1 - 50 %**

Given a string, replace each of its characters by the next one in the English alphabety (z would be replace by a).

    function alphabetShift() {
        // your code here
    }

    console.log(alphabetShift("crazy"));

Answer

    const alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    let newWord = [];

    for (let i of str) {
        let newIndex = alphabet.indexOf(i) + 1;
        let currChar = alphabet[newIndex];

        // if old char was z
        if (newIndex === 26) {
            currChar = "a";
        }

        newWord.push(currChar);
    }

    return newWord.join("");

## 9. Alphabet Sub Sequence

**Score: 1/1 - 100 %**

Check whether the given string is a subsequence of the plaintext alphabet.

    function alphabetSubsequence(str) {
        // your code here
    }

    console.log(alphabetSubsequence("effg"));
    console.log(alphabetSubsequence("cdcd"));
    console.log(alphabetSubsequence("acd"));
    console.log(alphabetSubsequence("bxz"));

Answer

    // your code here
    let mem = "";

    for (let i of str) {
        if (i <= mem) {
            return false;
        }

        mem = i;
    }

    return true;

## 10. Alternating sum

**Score: 1/1 - 100 %**

Add the even-indexed numbers and the odd-indexed numbers and return an array with the sum of the numbers.

    function alternatingSums(arr) {
        // your code here
    }

    console.log(alternatingSums([50, 60, 60, 45, 70])); // 105, 180

Answer

    let odd = 0;
    let even = 0;

    for (let i = 0; i < arr.length; i++) {
        // even
        if ((i + 1) % 2) {
            even += arr[i];
            console.log(i);
        // odd
        } else {
            odd += arr[i];
        }
    }

    return [even, odd];

# 11. Are Equally Strong

Source: CodeFights

**Score: x/1 - x %**

    function areEquallyStrong(myLeft, myRight, friendsLeft, friendsRight) {
        // your code here
    }

    console.log(areEquallyStrong(10, 15, 15, 10)); // true
    console.log(areEquallyStrong(15, 10, 15, 10)); // true
    console.log(areEquallyStrong(15, 10, 15, 9)); // false

Answer

    const myStrongest = myLeft >= myRight ? myLeft : myRight;
    const myWeakest = myLeft < myRight ? myLeft : myRight;

    const hisStrongest = hisLeft >= hisRight ? hisLeft : hisRight;
    const hisWeakest = hisLeft < hisRight ? hisLeft : hisRight;

    return (myStrongest === hisStrongest) && (myWeakest === hisWeakest);