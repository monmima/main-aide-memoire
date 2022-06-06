# Bugs

## Disabling error messages

To disable alert messages in Typescript and ESLint, use a comment like this at the start of the script (after the `script` tag) to ignore alerts for the whole file:

    /* eslint-disable */
    // @ts-nocheck

You can also be more specific like this:

    /* eslint-disable */
    // @ts-ignore
    /* eslint-enable */

`@ts-ignore` helps you ignore the next line.

## 'this' implicitly has type 'any' because it does not have a type annotation.

One of the reasons why you might get this error message is because the scope of `this` is not the same when a function is declared with the `function` keyword or as an arrow function.