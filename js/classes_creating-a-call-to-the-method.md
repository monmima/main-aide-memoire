# Creating a call to the method

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