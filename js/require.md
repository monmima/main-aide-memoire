# Require and exports

Here is a basic example on how requiring and exporting works.

We will suppose you have a folder with two files located at the root level, your main file **index.js** and a module file called **file1.js**.

index.js:

    const testModule = require("./file1");

    testModule.test();
    console.log(testModule.string);

file1.js

    function test() {
        console.log('Hello, World');
    }

    string = "test string";

    module.exports = { test, string }

So if you run Terminal window and type this:

    node index

Your output should be this:

> Hello, World

> test string