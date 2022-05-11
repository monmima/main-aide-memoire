### Node.js: Reading a file and storing its content in a variable

    // blocking way
    var data = fs.readFileSync("file.txt", "utf8");

### Node.js: Writing a file

    fs.writeFileSync("name.txt", "File content.");

---


Varia JS: What <strong>two</strong> keywords do you use to import a file in ES5 and ES6?

Answer:

ES5
require

ES6
import


---


Varia JS: Add a line to print the id to the console.

&lt;button id="test"&gt;test&lt;/button&gt;

&lt;script&gt;

    document.querySelector("#test").addEventListener("click", function(e) {
        // code here
    });

&lt;/script&gt;

Answer:

console.log(this.id);

