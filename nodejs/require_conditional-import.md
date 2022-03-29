# Require: conditional imports

Your index.js file:

    const vraiOuFaux = false;

    let testModule;

    if (vraiOuFaux) {
        testModule = require("./file1");
    } else {
        testModule = require("./file2");
    }

    console.log(testModule.testString);

Your file1.js file:

    const testString = "string1";

    module.exports = { testString };

Your file2.js file:

    const testString = "string2";

    module.exports = { testString };