# Functions in TypeScript

You can use interfaces with a function. And you can reuse an interface on similar functions:

    interface MathFunc {
			(x: number, y: number): number
    }

    const add: MathFunc = (x: number, y: number): number => x + y;
    const sub: MathFunc = (x: number, y: number): number => x - y;

Using generics with a function

These are used to build reusable components. `<T>` is a placeholder for the type.

    function getArray<T>(items: T[]): T[] {
      return new Array().concat(items);
    }

    let numArr = getArray<number>([1, 2, 3, 4]);
    let strArr = getArray<string>(["brad", "john", "jill"]);

    numArr.push("hello"); // This creates an error because the type isn't right.
