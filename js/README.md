# JS aide-mémoire

## Random stuff to sort later

### Findout if an array has includes a character or number

    arr = [1, 2, 3, 4]
    console.log(arr.includes(1));

### Finding the last position of a character in a string

    string.lastIndexOf("@");

### Node.js : Loading the module for writing/reading files

    var fs = require("fs");

### Node.js: Reading a file and storing its content in a variable

    // blocking way
    var data = fs.readFileSync("file.txt", "utf8");

### Node.js: Writing a file

    fs.writeFileSync("name.txt", "File content.");

### 

Varia JS: How do you keep only two decimals in a number?

Answer:

num.toFixed(2);

___


Varia JS: How do you find the value of the first element greater than 10?

Answer:

With the <code>find</code> method.

___


Varia JS: What <strong>two</strong> keywords do you use to import a file in ES5 and ES6?

Answer:

ES5
require

ES6
import

___

Varia JS: Give an example of an invalid variable name.

Answer:

let 1stName = "John";

A variable name cannot start with a number.

___

Varia JS: Create a line of code that turns text from an <code>h3</code> tag to red.

Answer:

document.querySelector("h3").style.color = "red";

___


Varia JS: What do you use to know if a number is positive, negative or zero?

Answer:

Math.sign(20); // 1
Math.sign(-20); // -1
Math.sign(0); // 0

___


Varia JS: Add a line to print the id to the console.

&lt;button id="test"&gt;test&lt;/button&gt;

&lt;script&gt;

    document.querySelector("#test").addEventListener("click", function(e) {
        // code here
    });

&lt;/script&gt;

Answer:

console.log(this.id);

