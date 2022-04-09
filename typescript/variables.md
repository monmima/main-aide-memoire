# Variables

A basic JS variable:

    let myNum = 5;

A TypeScript variable:

    let myNum2: number = 5;

Even if you don't explicitely set a variable, TypeScript does type inference. So in the example above, since `5` is the value of `myNum`, TypeScript can infer that the type is `number`.

## Initializing variables

    let age: number;
    age = 30;