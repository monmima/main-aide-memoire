# Quirks of JS

    console.log(0 / 0); // NaN

---

    console.log(typeof NaN); // number
    console.log(isNaN(NaN)) // true

---

    console.log(parseInt("hellos")); // NaN

---

    console.log("3" + 4); // 34
    console.log("4" / "2"); // 2
    console.log("4" - "3"); // 1

---

    console.log(typeof null); // object
    (This is a bug in ES6.)

---

    console.log(100 / 0); // Infinity

---

    console.log(5 / []); // Infinity

---

    let area = (5)
    console.log(area); // 5

---

    const area = undefined * 5;
    console.log(area); // NaN

---

    console.log(0.2 + 0.1) // 0.30000000000000004


One thing that can be done to solve this issue is:

    console.log((0.2 + 0.1).toFixed(2))

Another possibility is to validate with a server-side language.

---


    let A = 5;
    let a = 6;

    a === A; // false

---

    function test () {
        console.log("string");
    }

    console.log(test); // function test()

---

    console.log(test());

    const test = () => {
        return "test";
    }

Result:

    Uncaught ReferenceError: can't access lexical declaration 'test' before initialization

---

    function print() {
        console.log("Hello world");
    }

    console.log(typeof print); // function

---

    if (true) {
        var varVar = 1;
        let letVar = 2;
    }

    console.log(varVar); // 1
    console.log(letVar); // Uncaught ReferenceError: letVar is not defined

---

    console.log(test()); // test

    function test() {
        return "test";
    }