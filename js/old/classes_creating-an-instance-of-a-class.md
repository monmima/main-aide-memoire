# Creating an instance of a class 

    class Test {
        constructor(string) {
            this.string = string;
        }

        printString() {
            console.log(this.string);
        }
    }

    let inst = new Test("myString");