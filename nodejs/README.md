# NodeJS Aide-Mémoire

## Loading and exporting modules

1. Create a file called **mod.js** and paste this in it:

        console.log("mod.js loaded");

        const myFavWord = "My favorite word is 'cool'";

        function myFavAnimal() {
            console.log("My favorite animals are dogs.");
        }

        class SomeObject {
            constructor() {
                this.myFavNumber = 3;
            }
            printStuff() {
                return console.log(`My fav number is ${this.myFavNumber}.`);
            }
        }

        module.exports = { myFavWord, myFavAnimal, SomeObject }

1. Create a file called **main.js** and paste this in it.

        const myModule = require("./mod");

        const myClass = new myModule.SomeObject();

        myModule.myFavAnimal();
        console.log(myModule.myFavWord); // My favorite word is 'cool'.
        myClass.printStuff(); // My favorite number is 3.

1. Now, all you have to do is open a Terminal window and use the following command to run the code in it:

        node main

## Creating a directory if it's non-existent

https://attacomsian.com/blog/nodejs-create-directory

    createOutputDirectory(dir) {
        // create new directory
        try {
            // first check if directory already exists
            if (!fs.existsSync(dir)) {
                fs.mkdirSync(dir);
                console.log(`Created ${dir}/.`);
            } else {
                console.log(`Found pre-existing ${dir}/.`);
            }
        } catch (err) {
            console.log(err);
        }
    }