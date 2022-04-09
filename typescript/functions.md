# Functions in TypeScript

This is a basic JS function:

    function add (num1, num2) {
      return num1 + num2;
    }

    console.log(add(3, 3)); // 6

And this is the same function adapted to TypeScript.

The first two instances of `number` are the parameters and the last one is the output. So all three should be numbers.

    function add (num1: number, num2: number): number {
      return num1 + num2;
    }

    console.log(add(3, 3)); // 6

If your function returns nothing, you just use the keyword `void`.

    function log(message: string | number): void {
      console.log(message);
    }

    log([1, 2, 3,]);