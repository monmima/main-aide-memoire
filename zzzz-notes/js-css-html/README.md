

Varia JS: What do you use to know if an array has a character or number in it?

Answer:

arr.includes(1);

Example:

arr = [1, 2, 3, 4]
console.log(arr.includes(1));

___

Varia JS: How do you find the last position of a character in a string?

Answer:

string.lastIndexOf("@");

___

Node.js: How do you load the module for writing/reading files?

Answer:

var fs = require("fs");

___

Node.js: Read a file and store its content in a variable.

Answer:

// blocking way
var data = fs.readFileSync("file.txt", "utf8");

___

Node.js: How do you write a file?

Answer:

fs.writeFileSync("name.txt", "File content.");

___

Varia JS: How do you add something to the start of an array?

var arr = [1, 2, 3, 4];

// your code here

console.log(arr);

Answer:

// ES5
arr.unshift("start");

// ES6
// Spread operator

arr = ["start", ...arr];
___

Varia JS: How do you add something to the end of an array?

var arr = [1, 2, 3, 4];

Answer:

// ES5
arr.push("end");

// ES6
// Spread operator

arr = [...arr, "end"];

___

Varia JS: What is the output?

if (27) {
    console.log(true);
} else {
    console.log(false);
}

Answer:

// true
All numbers other than zero are "truthy".
They evaluate to "true"

___

Varia JS: Create a simple JS class.

Answer:

class Test {
    constructor(string) {
        this.string = string;
    }
}

___

Varia JS: Add a simple method to the class.
    
class Test {
    constructor(string) {
        this.string = string;
    }
}

Answer:

class Test {
    constructor(string) {
        this.string = string;
    }

    returnString() {
        return this.string;
    }
}

___

Varia JS: Create an instance of this class.
    

class Test {
    constructor(string) {
        this.string = string;
    }

    printString() {
        console.log(this.string);
    }
}

Answer:

let inst = new Test("myString");

___

Varia JS: Create a call to the method.

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

inst.printString();

___

Varia JS: How do you keep only two decimals in a number?

Answer:

num.toFixed(2);

___

Interview: How do you draw a circle in CSS?
    
.circle {
    &lt;!--  code here --&gt;
}

Answer:

.circle {
    background-color: black;
    border-radius: 50%;
    height: 25px;
    width: 25px;
}

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

Varia JS: What is the output?
    
if (true) {
    var varVar = 1;
    let letVar = 2;
}

console.log(varVar);
console.log(letVar);

Answer:

- 1
- Uncaught ReferenceError: letVar is not defined

___

Varia JS: How can you listen to every keypress?

Answer:

document.addEventListener("keydown", function(e) {
    console.log(e.key);
});

___

Varia JS: Declare two variables (x and y) on one line.

Answer:

let x = 50, y = 6;

This may seem shorter, but is also less readable.`

___

Varia JS: What is the output?
    
function test () {
    console.log("string");
}

console.log(test);

Answer:

function test()

___

Varia JS: Shorten the function call.
    
console.log("testa");

Answer:

const log = console.log;
log("testa");

___

Git: What is the result of typing this?
    
git config -l

Answer:

user.email=user@email.com
user.name=username

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

Varia JS: What is the output?

console.log(test());

const test = () => {
    return "test";
}

Answer:

Uncaught ReferenceError: can't access lexical declaration 'test' before initialization

___

Varia JS: What is the output?

console.log(test());

function test() {
    return "test";
}

Answer:

test

___

Interview: <strong>Besides the syntax</strong>, what is the difference between an arrow function and a normal function?

Answer:

The scope (this keyword) is not the same.

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

Git: What do you type to solve version conflicts?

Answer:

ESCAPE + :wq

___

HTML: What attribute do you use to set tabulation priorities?

Answer:

tabindex="1"

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

Varia JS: What is the output?

console.log(typeof "test");

Answer:

string

___

Varia JS: What is the output?

console.log(typeof [1, 2, 3]);

Answer:

object

___

Varia JS: What is the output?

console.log(typeof null);

Answer:

object
This is a bug in ES6.

___

SASS: Create a variable containing the color <code>#333</code>.

Answer:

$color: #333;

___

Varia JS: How do you stop the submission of a form when the submit button is clicked?

Answer:

event.preventDefault()

___

HTML: Add the four missing attributes to the <code>form</code> element.

&lt;form ... &gt;

Answer:

&lt;form action="javascript:;" method="get" name="form-peinture" id="form-peinture"&gt;

___

HTML/CSS: What are the two ways of loading fonts?

Answer:

@font-face (local)
&lt;link&gt; tag (remote)

___

CSS: What is best?

div {
    position: relative;
    left: -30px;
}

or 

div {
    margin-left: -30px;
}

Answer:

The second option.

___

Varia JS: What is the output?

const area = undefined * 5;
console.log(area);

Answer:

NaN

___

Varia JS: What is the output?

let area = (5)
console.log(area);

Answer:

5

___

Varia JS: What is the output?

console.log(100 / 0);

Answer:

Infinity

___

Varia JS: What is the output?

console.log(5 / []);

Answer:

Infinity

___

Varia JS: How do you find the type of an array?

Answer:

const x = Array.isArray([1, 2]]);

___

Varia JS: What is the output?

function print() {
    console.log("Hello world");
}

console.log(typeof print);

Answer:

function

___

Varia CSS: Create a CSS rule to put the div content upside down.

div {
    /* your css rule */
}

Answer:

div {
    transform: scaleY(-1);
}

___

Varia CSS: Create a CSS rule to add a clover <strong>before the a div tag</strong>.

Answer:

div:before {
    content: "&#92;2618&#92;0a";
}

___

Varia JS: How do you find the value of the first element greater than 10?

Answer:

With the <code>find</code> method.

___

Accessibility: Tell screen readers that the content should be treated as an application.

&lt;div&gt;...&lt;/div&gt;

Answer:

&lt;div role="application"&gt;...&lt;/div&gt;

___

Varia CSS: Create a rule making images responsive.

img.responsive {
    &lt;!--  code here --&gt;
}

Answer:

img.responsive {
    height: auto;
    max-width: 500px;
    width: 100%;
}

___

Varia JS: What function do you use to round a number to the nearest integer?

Answer:

Math.round()

___

Varia CSS: How do you remove default style to an <code>input</code> field?

input {
    &lt;!--  code here --&gt;
}

Answer:

appearance: none;

___

Varia JS: What <strong>two</strong> keywords do you use to import a file in ES5 and ES6?

Answer:

ES5
require

ES6
import

___

Varia HTML: What are the two mandatory attributes to use with an &lt;a&gt; tag?

Answer:

title
href

___

Varia CSS: You probably know the "love f... hate" mnemonic device. Now give the full names of the selectors based on this.

Answer:

a:link
a:visited
a:focus
a:hover
a:active

___

Varia HTML: What tag do you use around a sample output from a computer program?

Answer:

&lt;samp&gt;

___

Varia HTML: What attribute do you use on an &lt;a&gt; tag to disable tracking when someone opens a page through a new tab?

Answer:

rel="noopener noreferrer"

___

Varia HTML: What attribute do you use to open a link in a new tab?

&lt;a href="www.site.com" title=""&gt;

Answer:

<code>target="_blank"</code>.

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

Varia CSS: What is the selector for an <code>li</code> tag which has a class?

Answer:

li[class] {
    color: red;
}

___

Varia CSS: What is the selector for an <strong>password input</strong> tag?

Answer:

input[type="password"] {
    background-color: red;
}

or 

input[type=password] {
    background-color: red;
}

___

Varia HTML: What do you call <code>href</code> or <code>title</code> in a &lt;a&gt; tag?

Answer:

An attribute.

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

Varia CSS: Create a rule for having a CSS image taking its full size within a div.

div {
    &lt;!--  code here --&gt;
}

Answer:

div {
    background-size: 100% 100%;
}

___

Terminal: How do you list the files from a folder?

Answer:

dir / ls

___

Varia HTML: What are the two mandatory attributes for any &lt;input&gt; field?

Answer:

- name
- id

___

Terminal: How do you erase a folder with the name "test"?

Answer:

rm -r test/

___

Terminal: How do you create a file with the name "test.txt"?

Answer:

touch test.txt

___

Terminal: How do you erase a file with the name "test.txt"?

Answer:

rm test.txt

___

Terminal: How do you move a folder with the name "test" to the folder "test2"?

Answer:

mv test/ test2/

___

Varia JS: How do you open a new tab with JS (and not by just clicking a link).

Answer:

window.open("https://www.wikipedia.org");

___

Varia HTML: What attribute do you use to select an input field by default?

Answer:

autofocus

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

Varia HTML: How do you create a link tag that targets an ID on another HTML page?

Answer:

&lt;a href="test2.html#chap6" title="Link to another page"&gt;test&lt;/a&gt;

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

Interview: List some of the of 7 semantic elements.

Answer:

&lt;header&gt;
&lt;nav&gt;
&lt;main&gt;
&lt;article&gt;
&lt;section&gt;
&lt;aside&gt;
&lt;footer&gt;

___

CSS What is the purpose of <strong>right 20px</strong> and <strong>30%</strong> below?

background: url(images/moon.png), no repeat right 20px / 30%;

Answer:

right 20px = position
30% = size

___

Varia JS: What is passing by value and passing by reference?

Answer:

Passing by value is what happens when you create a primitive from another primitive.

Passing by reference is what happens when you create a non-primitive from another non-primtive.

To avoid problems with this, you must create a new non-primtive.

___

Interview: What are some of the data types in JS?

Answer:

Primitives
- booleans
- numbers (whole numbers, floating-point numbers)
- null (empty value which is user-assigned)
- undefined (no values)
- strings

Non-primtives
- objects
- arrays (technically are objects)

___

Interview: What is the difference between == and ===?

Answer:

== compares the value
=== compares both the value and the type

Example:

5 == "5" would return true
5 === "5" would return false

Bonus:

It's better to only use === because you want to write your code in the strictest fashion possible to avoid bugs.

___

Interview: How does it work in the background for 5 == "5" to evaluate to true?

Answer:

There is a type conversion performed in the background, and then a comparison.

___

Interview: What is a closure?

Answer:

It's a function that returns another function. It's used to store private variables.

* Makes code relevant and easy to debug and limits scope of variables.

___

Interview: What is lexical and block scope?

Answer:

This is the same as asking the difference between const, let and var.

Var has a lexical scope.

Const and let have a block scope.

Var is hoisted whereas let and const aren't.

___

Interview: What is hoisting?

Answer:

Variables and functions are brought back to the top of the scope if this is not where they were declared. This might cause undesirable effects.

___

Interview: What is "use strict"?

Answer:

'Defines that JavaScript code should be executed in "strict mode".' [w3schools.com]

Prevents the accidental creation of global variables, etc. Nowadays this isn't as important because people will use Webpack with a linter, etc.

x = 10; // "use strict" catches this error (no var declaration) and creates a message in the console;

___

Interview: What is the difference between splice and delete on an array?

Answer:

1. Splice removes the item and shifts the rest of the array.
2. Delete removes the item but does not shift the rest of the array. Consequently, the arr keeps the same length but has a value which left "undefined".

___

Interview: How can you remove an item from an <strong>object</strong>?

Answer:

delete obj.prop1;

___

Interview: What is the <code>this</code> keyword?

Answer:

It refers to the context you are working in.
Often used with OOP.

Bonus:

Arrow functions don't work well with the this keyword.

___

Varia JS: What do you call "string" and "number"?

Answer:

These are two different types.

___

Varia HTML: What does ARIA stand for?

Answer:

Accessible rich Internet application.
This is a way to make web content and web applications more accessible to people with disabilities.

___

Varia CSS: What is the CSS shortcut for this?

color: #666666;

Answer:

c#666

___

Varia HTML: How do you change the image depending on the screen width?

Answer:

With srcset.

___

Varia JS: What is the output?

let A = 5;
let a = 6;

a === A;

Answer:

false

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

Interview: What is the difference between undefined and null?

Answer:

Undefined is a variable that has not been assigned a value.

Null is an assigned value, which is "nothing".

* Undeclared = doesn't even exist
** Undefined = has not been given a value yet

___

Varia JS: What is the output?

console.log(0.2 + 0.1)

Answer:

0.30000000000000004

One thing that can be done to solve this issues is:
console.log((0.2 + 0.1).toFixed(2))

Another possibility is to validate with a server-side language.

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

Interview: What are falsy values?

Answer:

Everything is truthy, except for 6 values.

These values are falsy:

- undefined
- null
- NaN
- 0
- ""
- false

___

Interview: Tell me about global variables.

Answer:

In Javascript, the window object is a global variable.

In day-to-day life, it's better to avoid global variables.

Their scope is global, hence the name.

It's a bad coding convention to use globals.

Usually, it's not necessary to create globals.

___

Interview: What is the output?

console.log(2 + 3 + "7");

Answer:

57
This is called type coercion.

___

Interview: What is type coercion?

Answer:

console.log(2 + 3 + "7");

___

Interview: What is typeof?

Answer:

Tells you the type of a value.

Example:

console.log(typeof 5); // number
console.log(typeof "5"); // string

Bonus:

console.log(typeof arr); // object
console.log(Array.isArray(arr)); // true

console.log(typeof NaN); // number
console.log(isNaN(NaN)); // true

___

Interview: What is the output?

console.log(typeof NaN);

Answer:

number

To solve this, use:

console.log(isNaN(NaN)); // true

___

Interview: What is the output?

console.log(typeof undefined);

Answer:

undefined

___

Interview: What can you tell about object notation?

Answer:

user.firstName // dot notation
user["firstName"] // bracket notation

* Dot notation should be used as much as possible instead of bracket notation.

___

Interview: What is an anonymous function?

Answer:

It's a function that doesn't have it's own name.
Instead, the function is stored inside a variable.

// Normal function
function add(num1, num2) {
    return num1 + num2;
}

// Anonymous function
const add = function(num1, num2) {
    return num1 + num2;
}

___

Interview: What is a higher order function?

Answer:

- The same as a callback.
- You pass it in.
- They are called at a later date (synchronously or asynchronously).

Example:

The map() method takes a callback, for instance.

___

Interview: What is a callback?

Answer:

- The same as a higher order function.
- You pass it in.
- They are called at a later date (synchronously or asynchronously).

Example:

The map() method takes a callback, for instance

___

Varia JS: What characters do you use to reuse a matched regexp pattern?

Answer:

$1 // JS
&bsol;1 // text editor
&bsol;&bsol;1 // Python

___

Sass: What is the difference between .scss and .sass files?

Answer:

.scss // new Sass
.sass // old Sass

___

Interview: What are some naming conventions?

Answer:

- camelCase
- isAdult // boolean
- hasChild // boolean
- getTotal // function
- in CSS, you try to add as few selectors as possible
- in CSS, you use dash case
- CONSTANT
- limit the amount of variables

___

Interview: How do you empty an array?

Answer:

x = [];

// or 

arr.splice(0);

// or

while (arr.length > 0) {
    arr.pop();
}

// or 

arr.length = 0;

___

Interview: What is a MUL function?

Answer:

MUL stands for multiplication.
It's a function that returns one or many nested anonymous functions.
It's not necessarily a good idea. It's dirty.

Example:

function example(x) {
    return (y) => {
        return (z) => {
            return x * y * z;
        }
    }
}

console.log(example(5)(2)(4)); // 40

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

Interview: What is an IIFE?

Answer:

- Stands for "immediately invoked function expression"
- Runs as soon as it is defined
- Mainly used to avoid global variables
- Not as useful as it used to be since the introduction of "let" and "const" in ES6
- Used in frameworks/libraries such as jQuery
- Arrow functions

Example:

(function() {
    console.log("my logic");
})();

___

Varia JS: Write a barebone IIFE.

Answer:

(function() {
    console.log("my logic");
})();

___

Varia JS: What is the output?

console.log(0 / 0);

Answer:

NaN

___

Varia JS: What is the output?

console.log(typeof NaN);

Answer:

number

This would be the solution to really find out:

console.log(isNaN(NaN)) // true

___

Varia JS: What is the output?

console.log(parseInt("hellos"));

Answer:

NaN

___

Varia JS: What is the output?

console.log(0 / 0);

Answer:

NaN

___

Interview: What is the difference between undeclared and undefined?

Answer:

Undeclared:
Doesn't exist at all.

Undefined*:
Exists, but has no value.

* Could be a non-existing property of an object too.

___

Interview: Name the DOM selectors.

Answer:

document.getElementById("")
document.getElementsByClassName("")
document.getElementsByTagName("")

Slower:

document.querySelector("")
document.querySelectorAll("")

* To find out more you could use console.log on any of the above.

___

Interview: How do you copy an object?

Answer:

With the spread operator.

Example:

const newObj = {...oldObj};

___

Varia JS: What is the difference between splice() and slice()?

Answer:

- splice() changes the array permanently (mnemonic device: p is for permanent)
- slice() does not

* You can add items to an array with splice().

___

Varia JS: What is the difference between map(), filter(), and reduce()?

Answer:

- map() creates a copy of an array
- filter() filters out items from an array
- reduce() allows you to combine map() and filter() AND can be used to add up all values from an array

___

Varia JS: How do you flatten an array?

Answer:

arr.flat(1));

* To flatten everything deeply, you can use arr.flat(Infinity)."

___

Interview: Give an example of array or object destructuring.

Answer:

const [month, day, year] = [5, 11, 1955];
console.log(month);

// or

let {
    firstName: fn,
    lastName: ln
} = {
    firstName: "John",
    lastName: "Doe"
};

console.log(fn); // John
console.log(ln); // Doe

___

Interview: What are the rest and spread operator?

Answer:

Rest parameters (packs elements)
- turns an indefinite number of arguments as an array

Spread operator (unpack elements)
- copies an array
- concatenates arrays
- adds to an array

___

Interview: What are some of the new ES6 features?

Answer:

- template litterals
- rest parameter/spread operators
- let/const
- default values in functions
- arrow functions

___

Interview: Explain event delegation

Answer:

JS event listeners fire not only on a single DOM element, but on all its children .

___

Interview: Describe event bubbling (aka event propagation)

Answer:

Events on an element will bubble up and also fire on all parents.

___

Varia JS: What is the output?

console.log("3" + 4);
console.log("4" / "2");
console.log("4" - "3");

Answer:

console.log("3" + 4); // 34
console.log("4" / "2"); // 2
console.log("4" - "3"); // 1

___

Interview: How can you maintain state in an application?

Answer:

You use local storage.

___

Interview: How can you erase duplicates from an array?

Answer:

1. set
2. iterate through the array and push to a new array is the value is not included in the first one

___

Interview: What are the HTTP methods/verbs?

Answer:

- POST (create)
- GET (read)
- PUT (update)
- DELETE (delete)

In summary, the HTML equivalent of CRUD is PGPD.

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

Varia HTML: What should you use instead of the <code>&lt;center&gt;</tag> tag?

Answer:

margin: 0 auto

* This tag is deprecated.

___

Interview: What are HTML status code? List them and explain what they are for.

Answer:

- 100: Information code.
- 200: Works.
- 300: Redirect.
- 400: Problem on the client side.
- 500: Problem on the server side.

___

Interview: What is the difference between synchronous and asynchronous code?

Answer:

- Synchronous: Top to bottom. Line by line.
- Asynchronous: Top to bottom, except for asynchronous tasks.

Example:

A call to a database.

___

Interview: What are some timer methods in JS?

Answer:

- setTimeOut: Single instance (happens once).
- setInterval: Multiple instance (happens many time).

___

Interview: What is a promise?

Answer:

- An easy way of handling asynchronous data.
- Will always resolve (rejected case or successful case).

Example:
- Getting user input

Bonus:
- Should be used with a try/catch block
- Important question!

___

Interview: What is async/await for?

Answer:

It makes it possible to wait to turn an asynchronous method to a synchronous one.

Example:

You make a fetch call and you want to wait for the result before doing anything else.

Bonus:

Ideally, you should wrap this is a try / catch block.

___

Interview: Name some CSS properties.

Answer:

- border
- margin
- font-size
- padding
- box-shadow

___

Interview: What is the difference between <code>display: none</code> and <code>visibility: hidden</code>?

Answer:

- display: none;
spacing of the element removed

- visibility: hidden;
the spacing remains there;

___

Interview: What is the difference between a <code>span</code> and a <code>div</div> tag?

Answer:

- span: inline element
- div: block element

___

Varia JS: How do you turn a number to a string?

Answer:

num.toString()

// or

String(num)

___

Varia JS: How do you generate a random number between 1 and 10?

Answer:

Math.floor(Math.random() * 10 + 1)

___

Varia JS: What is the easiest way to repeat a string?

Answer:

str.repeat(3);

___

Varia JS: How do you remove all punctuations in a string?

Answer:

"This is an airport.".replace(/&bsol;W/g, " ");

___

Varia JS: How do you sort a string array?

Answer:

arr.sort()

___

Varia JS: How do you turn a number of type string to a number of type number?

Answer:

parseInt("33")

___

Varia JS: How do you eliminate duplicates in an array?

Answer:

[...new Set(arr)]

___

Varia JS: How do you get the positive value of a number?

Answer:

Math.abs(-1)

___

Varia JS: How do you get the last item from an array?

Answer:

arr[arr.length - 1]

___

Varia JS: How do you get the first character of a string?

Answer:

str[0]

___

Varia JS: How do you sort an array of numbers?

Answer:

arr.sort(function(a, b) { return a - b });

___

Varia JS: How do get all characters from a string but the first one?

Answer:

str.substring(1)

or 

str.slice(1)

___

Varia JS: How do you get the index of an item in an array?

Answer:

arr.indexOf("a")

___

Interview: How do you find out if an object is a copy of another object?

Answer:

Object.is(obj1, obj2)

// or

JSON.stringify(obj1) === JSON.stringify(obj2)

___

Interview: How do you duplicate an object?

Answer:

{...obj}

___

Varia JS: What does the every function do?

Answer:

The every function check if all elements in an array pass a test.

___

Interview: How do stay up to date?

Answer:

- The point is is having an answer, to show that you are passionate.

___

Interview: Do you follow any clean code principles?

Answer:

- Norms at the company where you work
- DRY

___

Interview: What is your framework of choice and why?

Answer:

It could be React, VueJs or Angular. You just have to be explain why.

* This is an entry-level question to get an idea of where you are at.

___

Interview: How do you test your code?

Answer:

- Make sure it compiles.
- Look in the browser if it's a front-end app.
- Open the app in other browsers.
- Use W3C validator.
- Use unit-testing.
- Try to cover all the edge cases.

___

Interview: What is NPM?

Answer:

- Node Package Manager
- Installs with Node
- Works with package.json files
- Allows us to use other packages

devDependencies
- are only used during dev.
- Ex.: Typescript

coreDependencies
- used during and after dev
- Ex.: Bootstrap

Yarn is a competitor

___

Varia JS: How do you add stuff to the middle of an array?

Answer:

With .splice()

___

Interview: Why would you use SPAs (single-page application)?

Answer:

- Single load
- Only reloads what needs to be reloaded (faster)
- components reused

___

Interview: What would your old colleagues say about you?

Answer:

...

___

Interview: What are some of your professionnal achievements?

Answer:

- What things did you learn by yourself?
- What projects did you do that are the most helpful to you?

___

Interview: Give an example of a technical mistake you made and how you solve it.

Answer:

- 1. Running code through W3C Validator.
- 2. Realize one more thing needs to be done and do it
- 3. Realize step 2 added a mistake

Now I make sure to go over my checklist once more before considering I'm done.`

___

Interview: Where do you see yourself in 5 years?

Answer:

- Explain how your goals align with the company’s
- Do you see yourself at the company in five years? (The answer should be yes.)

___

Interview: What is one of the things that you haved learned recently?

Answer:

- Not being able to answer this question is a red flag.
- By recently, you should understand within the last years.

___

Interview: What is the difference between a class and an ID?

Answer:

- A class is used to apply style to multiple elements.
- An ID should be unique. An ID style will overwrite a class style.

* Not being able to answer this question is a red flag. This is considered a basic question.

___

Interview: What tools do you use?

Answer:

- VS Code
- Quokka.js
- ESLint extension for VS Code
- Debugger extension for VS Code
- Terminal
- Live Server Extension
- The Gimp
- vscode-icons
- Node/NPM

* This question is meant to understand your proficiency level, the idea is that experienced developers use tools to make their lives easier.`
___

Varia HTML: Should you use datetime or datetime-local for a calendar?

Answer:

- datetime-local

___

Varia HTML: What is the opposite of focus?

Answer:

blur

___

Varia JS: What is the opposite of addEventListener?

Answer:

removeEventListener

___

Varia CSS: How do you change the order of items in CSS grid and flex?

Answer:

order

___

Varia HTML: What are the two tags for a quotation?

Answer:

- &lt;q&gt; (inline)
- &lt;blockquote&gt; (block)

___

Varia CSS: How do you get rid of a border?

Answer:

border: 0

___

Varia HTML: What tag should you use for a FAQ list?

Answer:

dl

___

Varia HTML: What tag should you use for words such as Mlle and H20?

Answer:

- &lt;sup&gt;
- &lt;sub&gt;

___

Varia HTML: How do you disable resizing on mobile devices?

Answer:

user-scalable=no"

___

Varia JS: How do you enable disable a class?

Answer:

- classList.toggle

___

Varia CSS: What are different ways of targeting a <code>p</code> tag and a <code>.note</code> class?

Answer:

- p.note (p tag with a .note class)
- p .note (.note class child of p tag)
- p + .note (.note tag sibling of p)
- p > .note = .note direct child of p tag

___

Varia HTML: What is tag for words such as HTML, cm, etc., Mr., UFO?

Answer:

&lt;abbr&gt;

___

Varia CSS: How do you change transparency?

Answer:

opacity: 0.5

___

Varia HTML: What is the tag for keyboard shortcuts?

Answer:

&lt;kbd&gt;Ctrl-Alt-Suppr&lt;/kbd&gt;

___

Varia HTML: What is the tag for a keyboard shortcut?

Answer:

&lt;kbd&gt;Ctrl-Alt-Suppr&lt;/kbd&gt;

___

Varia HTML: What should you surround a date with?

Answer:

&lt;time datetime="1890"&gt;1890&lt;/time&gt;

___

Varia JS: What is the difference between a basic objet and a JSON object?

Answer:

- objet pur =  nom: "Golf"
- objet JSON = "nom": "Golf"

___

Varia HTML: What is the <code>i</code> tag for?

Answer:

- icons
- technical terms

___

Varia HTML: What tag should you use around the name of a work of art?

Answer:

&lt;cite&gt;

___

Varia JS: Should you use <code>eval</code>?

Answer:

No. People say that "eval is evil (possibility of code injection, etc.).

___

Varia JS: What is the difference between break and continue?

Answer:

- The break statement "jumps out" of a loop. (W3school.com)
- The continue statement "jumps over" one iteration in the loop. (W3school.com)

___

Varia HTML: What tag do you use around a definition?

Answer:

&lt;dfn&gt;

___

Varia CSS: How do you write a selector for a class beginning/ending/containing a string?

Answer:

- a[class*="test"] {
- a[class^="test"] {
- a[class$="test"] {
- a[class~="test"] {

___

Varia CSS: What is the CSS priority between IDs, classes and tags?

Answer:

1. id
2. class
3. tag

___

Varia HTML: What should you use instead of &lt;strike&gt;?

Answer:

&lt;del&gt;

___

Varia HTML: What tag should you use for an mp3 file?

Answer:

&lt;audio&gt;

___

Varia CSS: What are some of the ways you can justify content in flex?

Answer:

- flex-start
- flex-end
- center
- space-between
- space-evenly
- space-around

___

Varia CSS: What do flex-grow, flex-shrink and flex-basis have in common?

Answer:

They apply on a flex child.

* Flex-basis should be used instead of width.
** You can group all three of these like this: 1 1 200px;.

___

Varia HTML: What tag should you use around a company's name?

Answer:

&lt;strong&gt; or &lt;em&gt;

___

Varia HTML: What attribute should you use to match a specific pattern in an &lt;input&gt; tag?

Answer:

pattern="[A-Za-z]{3}" (matches 3 letters)

___

Varia HTML: What parameter do you use to hide something quickly and try something out?

Answer:

hidden

___

Varia HTML: How do you make sure a CSS grid fraction never goes below a certain point?

Answer:

minmax

___

Varia HTML: What is this.id for a class?

Answer:

this.className

___

Varia JS: How do you get an attribute from an HTML tag?

Answer:

document.[...].getAttribute("class");

___

Varia HTML: How do you embed an HTML document within the current one (for YouTube videos, etc.)?

Answer:

With an iframe.

___

Varia HTML: What tag do you use for a title in a &lt;fieldset&gt; tag?

Answer:

legend

___

Varia HTML: Which one is good and which one is bad?

- 1. images/photo.jpg
- 2. /images/photo.jpg

Answer:

1. good
 2. bad

___

Interview: How do you speed up a slow app?

Answer:

- Define the problem. Narrow down the issue.
- Is it slow everywhere? On mobile? On all pages?
- You can use tools such as Chrome diagnostic tools.
- Are images the right size?
- You try to be systematic.
- Use the audits tool in Chrome.

* This question is more about your thought process than having a right or wrong answer.

___

Interview: What is the box model?

Answer:

- Each element has a box model associated with it.
- Margin, border, padding
- Mnemonic device:  MBP = Mac Book Pro

* This question is a question to know if you know the fundamentals. You could get eliminated for not knowing the answer.

___

Interview: What are some CSS pre-processors?

Answer:

- SASS
___

Interview: Why might you use pre-processors instead of just regular CSS?

Answer:

- Leads to cleaner code
- Use of variables
- Nesting of CSS (more visual)
- Mixins (possible to reuse CSS declarations)

* The downside is with SCSS, it might take a little bit more time to build.
___

Interview: What is a pseudo-class?

Answer:

If there is a colon, a selector is a pseudo-class. A pseudo-class is a special type of CSS selector.

Examples:

- a:link
- a:visited
- a:focus
- a:hover
- a:active
- input:valid
- input:invalid
- p:hover 
- p:not(.fancy)
- p:first-child
- p:last-child
- p:nth-child(2)
- p:nth-child(odd)
- p:nth-child(even)
- p:nth-child-of-type(2)
 
 * This is an intermediate question.

___

Interview: What are pseudo-elements?

Answer:

A pseudo-element has two colons.

Examples:

- a::before
- a::after
- p::first-letter
- p::first-line

___

Interview: How does a Web page work?

Answer:

When you go to a Web site and it's loading to a URL, it's going to use the domain name system and this URL references an address that then goes to the Internet and finds what server this Web site lives and retrieve that information. A server will serve it up and return that dependency.

One thing to consider is that authentification might be part of this process where you are sending a token or a username and password to say I have access. And the server might even request additional information before serving HTML, images, JS files, etc.

* Take this question as deep as you feel comfortable.

** Typically, people put you in the situation where you go to a Web page, you hit Enter on the URL and it goes. What happens?

___

Interview: You go to a Web page, you hit Enter on the URL and it goes. What happens?

Answer:

When you go to a Web site and it's loading to a URL, it's going to use the domain name system and this URL references an address that then goes to the Internet and finds what server this Web site lives and retrieve that information. A server will serve it up and return that dependency.

One thing to consider is that authentification might be part of this process where you are sending a token or a username and password to say I have access. And the server might even request additional information before serving HTML, images, JS files, etc.

* Take this question as deep as you feel comfortable.

___

Interview: What are the advantages of dynamically-typed languages over statically-typed languages?

Answer:

JS is a dynamically-typed languages. It is easy to convert types. You don't have type checking. It's not an issue to reassign. This makes dynamically-typed languages very versatile.

With statically-typed languages, it leaves less type errors in your code base.

Studies have shown that with dynamically-typed languages, there are less bugs in production.
