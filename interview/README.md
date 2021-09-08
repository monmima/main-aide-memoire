Interview: <strong>Besides the syntax</strong>, what is the difference between an arrow function and a normal function?

Answer:

The scope (this keyword) is not the same.

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

Interview: What is the difference between undefined and null?

Answer:

Undefined is a variable that has not been assigned a value.

Null is an assigned value, which is "nothing".

* Undeclared = doesn't even exist
** Undefined = has not been given a value yet

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

Now I make sure to go over my checklist once more before considering I'm done.

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

* This question is meant to understand your proficiency level, the idea is that experienced developers use tools to make their lives easier.
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

Interview: Name some CSS properties.

Answer:

- border
- margin
- font-size
- padding
- box-shadow
