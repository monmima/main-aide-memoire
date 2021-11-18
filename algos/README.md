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