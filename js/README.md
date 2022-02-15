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

### Adding something to the start of an array

    // ES5
    arr.unshift("start");

    // ES6
    // Spread operator

    arr = ["start", ...arr];

### Adding something to the end of an array

    // ES5
    arr.push("end");

    // ES6
    // Spread operator

    arr = [...arr, "end"];

### Condition that has only a number in it

    if (27) {
        console.log(true);
    } else {
        console.log(false);
    }

All numbers other than zero are "truthy".
They evaluate to "true"

### Creating an instance of a class 

    class Test {
        constructor(string) {
            this.string = string;
        }

        printString() {
            console.log(this.string);
        }
    }

    let inst = new Test("myString");

### Creating a call to the method

    class Test {
        constructor(string) {
            this.string = string;
        }

        printString() {
            console.log(this.string);
        }
    }

    let inst = new Test("myString");

    inst.printString();

### 

Varia JS: How do you keep only two decimals in a number?

Answer:

num.toFixed(2);

___

Varia JS: Create a simple keyframes spin animation.

Answer:

@keyframes spin {
    0% {transform: rotate(0deg)}
    100% {transform: rotate(100deg)}
}

___

Varia JS: Add the animation to the "test" class.
    
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.test {
    /* your rule here */
    background-color: lightgreen;
    height: 10px;
    width: 100px;
}

Answer:

animation: spin 3s infinite;

___

Varia JS: Declare two variables (x and y) on one line.

Answer:

let x = 50, y = 6;

This may seem shorter, but is also less readable.

___

Varia JS: Shorten the function call.
    
console.log("testa");

Answer:

const log = console.log;
log("testa");

___

Varia JS: How do you remove the last item from an array.

Answer:

arr.pop();

___

Varia JS: How do you find out if a string has a regexp in it?

Answer:

You use the .test() method.

___

Varia JS: How do you give a shadow to a <code>div</code>?

div {
    &lt;!--  code here --&gt;
}

Answer:

box-shadow: 5px 5px;

// or

box-shadow: 5px 5px 5px;

___

Varia JS: What is the difference?

1. box-shadow: 5px 5px 5px;
2. box-shadow: 5px 5px 5px inset;

Answer:

1. Outer shadow.
2. Inner shadow.

___

Varia JS: Simplify this code.

var multiply = (x, y) => { return x * y };

Answer:

var multiply = (x, y) => x * y;

___

Varia JS: Store the following regexp in a variable.

/blues?/gi

Answer:

var re = /blues?/gi;

// or

var re = new RegExp(/blues?/, "gi");

// or

var re = new RegExp("blues?", "gi");
___

Varia JS: How do you add a property to this constructor?

class Person {
    constructor (name) {
        this.name = name
    }
}

Answer:

Person.prototype.age = 20;

___

Varia JS: How do you give a default parameter of <code>100</code> to <code>b</code>?

function multiply(a, b) {
    return a * b;
}

Answer:

function multiply(a, b = 100) {
    return a * b;
}

___


Varia JS: How do you stop the submission of a form when the submit button is clicked?

Answer:

event.preventDefault()

___

Varia JS: How do you find the value of the first element greater than 10?

Answer:

With the <code>find</code> method.

___

Varia JS: What function do you use to round a number to the nearest integer?

Answer:

Math.round()

___

Varia JS: What <strong>two</strong> keywords do you use to import a file in ES5 and ES6?

Answer:

ES5
require

ES6
import

___

Varia JS: Erase one item starting from index 0 in an <strong>array</strong>.

Answer:

arr.splice(0, 1);

or

arr.shift();

___

Varia JS: How can you tell if a variable called <code>x</code> is an integer?

Answer:

const newVar = Number.isInteger(x);

___

Varia JS: Create a simple event listener that fires when a page loads.

// code here
    console.log("Page ready!");
// code here

Answer:

window.addEventListener("load", function() {
    console.log("Page ready!");
});

___

Varia JS: How do you open a new tab with JS (and not by just clicking a link).

Answer:

window.open("https://www.wikipedia.org");

___

Varia JS: How do you find out more about keys that were pressed?

Answer:

document.addEventListener("keypress", function(event) {
    console.log(event);
});

___

Varia JS: What is an impure function?

Answer:

A function where external variables are not passed in as arguments.

This may cause side effects.

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

Varia JS: What is passing by value and passing by reference?

Answer:

Passing by value is what happens when you create a primitive from another primitive.

Passing by reference is what happens when you create a non-primitive from another non-primtive.

To avoid problems with this, you must create a new non-primtive.

___

Varia JS: What do you call "string" and "number"?

Answer:

These are two different types.

___


Varia JS: What do you use to know if a number is positive, negative or zero?

Answer:

Math.sign(20); // 1
Math.sign(-20); // -1
Math.sign(0); // 0

___

Varia JS: What are some of the ways you can create an array?

Answer:

- create a new one an assigning it a value
- copy an old one (with a map loop, etc.)

* creating a new one with "const badArr = new Array()" is a bad practice

___

Varia JS: What is instanceof and when should you use it?

Answer:

Instanceof should not be used to find the type of a value.
Typeof is there for that.

Instanceof tells you if something is a class.

Careful! A class is also an Object.

___

Varia JS: What line of code do you use to create a redirection to another HTML page?

Answer:

window.location.replace("https://www.protonmail.com");

// or

location.replace("https://www.protonmail.com");

___

Varia JS: How do you add a prop to the instance of the class?

class Test {
    constructor(string) {
        this.string = string;
    }

    printString() {
        console.log(this.string);
    }
}

let inst = new Test("myString");

Answer:

inst.age = 25;

___

Varia JS: Write a barebone IIFE.

Answer:

(function() {
    console.log("my logic");
})();

___

Varia JS: What is the difference between splice() and slice()?

Answer:

- splice() changes the array permanently (mnemonic device: p is for permanent)
- slice() does not

* You can add items to an array with splice().

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

___


Varia JS: How do get all characters from a string but the first one?

Answer:

str.substring(1)

or 

str.slice(1)

___

Varia JS: What does the every function do?

Answer:

The every function check if all elements in an array pass a test.

___

Varia JS: What is the opposite of addEventListener?

Answer:

removeEventListener

___

Varia JS: What is the difference between a basic objet and a JSON object?

Answer:

- objet pur =  nom: "Golf"
- objet JSON = "nom": "Golf"

___

Varia JS: What is the difference between break and continue?

Answer:

- The break statement "jumps out" of a loop. (W3school.com)
- The continue statement "jumps over" one iteration in the loop. (W3school.com)

___


