# 100-algorithms-challenge_dylan-israel

Dylan Israel uses VS Code with the Quokka extension to output code directly in the interface.

## Algos

### 1. Return the median value

**0.5 - 50 %**

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

<pre><div style="color: black;">

const isEven = arr.length % 2 === 0;

let middle;

if (isEven) {
    middle = Math.floor(arr.length / 2) - 1;
} else {
    middle = Math.floor(arr.length / 2);
}

return arr[middle];

</div></pre>

dsfdsf