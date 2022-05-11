# Adding a prop to the instance of the class

    class Test {
        constructor(string) {
            this.string = string;
        }

        printString() {
            console.log(this.string);
        }
    }

    let inst = new Test("myString");

    inst.age = 25;