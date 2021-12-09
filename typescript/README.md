# TypeScript

## A few facts

Based on [
Traversy Media
](https://www.youtube.com/watch?v=BCg4U1FzODs)'s tutorial.

TypeScript is a superset of JavaScript, which means you can have regular JS in a .ts file and it will work just fine.

You can use TypeScript in the front-end (Vue, Angular, React) or in the back-end (Node.js).

The main reason to use TypeScript is to use static types.

TypeScript uses a .ts extension or a .tsx extension for JSX.

The tsconfig.json file is used to configure how TypeScript works.

| Pros | Cons |
|--------------|-----------|
| More robust | More code to write |
| Easily spot bugs | More to learn |
| Predictability | Required compilation |
| Readability | Not true static typing |
| Popular | |

## Installing the TypeScript compiler

To install TypeScript globally, use the following command:

    sudo npm i -g typescript

To make sure Typescript is installed properly, run the following command:

    tsc -V

## Compiling a TS file to JavaScript

Compiling is turning a .ts file to .js. The compiler will show your errors in the Terminal window. By default, the compiler will turn "let" to "var".

Run this command. For this to work, you need to have the TypeScript compiler to work.

    tsc [name-of-my-file-without-the-extension]

You can also the the --watch flag so your file is compiled every time you save it:

    tsc --watch [name-of-my-file-without-the-extension]

Run this command to compile every file with a .ts extension

    tsc

## Setting up a configuration file

Run this command:

    tsc --init

To compile your TS files to ES6, find the line with the word target and change the parameter to "es6".

To use folders for your source code and compiled code:

1. Create the /src folder
1. Create the /dist folder
1. Place your source (.ts) files in the /src folder
1. Change <code>"rootDir": "./"</code> to <code>"rootDir": "./src"</code>
1. Change <code>"outDir": "./"</code> to <code>"outDir": "./dist"</code>

## Types in TypeScript

| JavaScript | Typescript | Notes |
|-----------------------------------|-----|-----|
| let id = 5 | let id: number = 5 |
| let company = 5 | let company: string = "Traversy Meida" |
| let isPublished = 5 | let isPublished: boolean = "Traversy Meida" |
| let x = "Hello" | let x: any = "Hello" | This variable could be of any type. |
| let age<br><br>age = 30 | let age: number<br><br>age = 30 |
| let arr = [1, 2, 3, 4, 5] | let myArr: number[] = [1, 2, 3, 4, 5] |
| let arr = [1, true, "Hello"] | let arr: any[] = [1, true, "Hello"] |
| let person = [20, "John", false] | let person: [number, string, boolean] = [20, "John", false] | This is called a "tuple".
| let employees = [<br>&nbsp;&nbsp;[1, "Brad"],<br>&nbsp;&nbsp;[2, "John"],<br>&nbsp;&nbsp;[3, "Jill"]<br>] | let employees: [number, string][] = [<br>&nbsp;&nbsp;[1, "Brad"],<br>&nbsp;&nbsp;[2, "John"],<br>&nbsp;&nbsp;[3, "Jill"]<br>] | This is called a "tuple array". |
| let id = "Jake" | let id: string \| number = "Jake" | This is called a "union". Used if your variable can be of more than one type. |
| const user = {<br>&nbsp;&nbsp;id: 1,<br>&nbsp;&nbsp;name: "John"<br>} | type user: {<br>&nbsp;&nbsp;id: number,<br>&nbsp;&nbsp;name: string<br>} = {<br>&nbsp;&nbsp;id: 1,<br>&nbsp;&nbsp;name: "John"<br>} | Basic way of dealing with a custom type for an object.
| const user = {<br>&nbsp;&nbsp;id: 1,<br>&nbsp;&nbsp;name: "John"<br>} | type User: {<br>&nbsp;&nbsp;id: number,<br>&nbsp;&nbsp;name: string<br>}<br><br>const user: User = {<br>&nbsp;&nbsp;id: 1,<br>&nbsp;&nbsp;name: "John"<br>} | Alternate way of dealing with a custom type for an object.
|  | let cid: any = 1<br><br>let customerId: \<number\>cid | This is one way of doing type assertion. You use this if you want a variable to be the same value but a different type as another variable. |
|  | let cid: any = 1<br><br>let customerId = cid as number | Another way of doing type assertion. |
| function addNum(x, y) {<br>&nbsp;&nbsp;return x + y;<br>} | function addNum(x: number, y: number): number {<br>&nbsp;&nbsp;return x + y;<br>} | This means both parameters and the return value should be numbers. |
| function log(message) {<br>&nbsp;&nbsp;console.log(message);<br>} | function log(message: string \| number): void {<br>&nbsp;&nbsp;console.log(message);<br>} | The void type is used when a function does not return anything. |
| const user = {<br>&nbsp;&nbsp;id: 1,<br>&nbsp;&nbsp;name: "John"<br>} | interface UserInterface: {<br>&nbsp;&nbsp;id: number,<br>&nbsp;&nbsp;name: string<br>}<br><br>const user1: UserInterface = {<br>&nbsp;&nbsp;id: 1,<br>&nbsp;&nbsp;name: "John"<br>} | Interfaces are very much like TypeScript custom types (see above).<br><br>One difference is that you cannot use an interface with a primitive or with unions. |
|  | interface UserInterface: {<br>&nbsp;&nbsp;id: number,<br>&nbsp;&nbsp;name: string,<br>&nbsp;&nbsp;age?: number<br>} | In this interface example, "age" would be optional since there is a question mark. |
|  | interface UserInterface: {<br>&nbsp;&nbsp;readonly id: number,<br>&nbsp;&nbsp;name: string<br>} | With "readonly" you get a warning when you try to reassign a property. |

## Using interfaces

### Interface general concepts

An interface is similar to a custom type. Brad Traversy would use an interface over a type when describing an object.

A type can be used with primitives and unions. You cannot use an interface with primitives or unions.

In the example below, **age** would be optional.

In the example below, **id** cannot be reassigned since it is a readonly property.

    interface UserInterface {
        readonly id: number
        id2: number
        name: string
        age?: number
    }

    const user1: UserInterface = {
        id: 1,
        id2: 1,
        name: "John"
    }

### Using an interface with a function

    interface MathFunc {
        (x: number, y: number): number
    }

    const add: MathFunc = (x: number, y: number): number => x + y
    const sub: MathFunc = (x: number, y: number): number => x - y

### Using an interface with a class

A constructor is run everytime you instanciate (= create an instance of) a class. So in the example below the message "123" would be printed twice to the console.

    class person {
        id: number
        name: string

        constructor(id: number, name: string) {
            console.log(123)

            this.id = id
            this.name = name
        }
    }
    
    const brad = new Person(1, "Brad Traversy")
    const mike = new Person(2, "Mike Jordan")

    // the following line will display two Person objects
    console.log.log(brad, mike)

### Using data modifiers in classes

There are three data modifiers:

- public (default value; therefore would be pointless is most situations)
- private (only access from within the class)
- protected (only accessible from the class or any class that is extended from the class)

Private value example

    class person {
        **private** id: number
        name: string

        constructor(id: number, name: string) {
            this.id = id
            this.name = name
        }
    }

Protected value example

    class person {
        **protected** id: number
        name: string

        constructor(id: number, name: string) {
            this.id = id
            this.name = name
        }
    }

### Extending a class

[Brad Traversy explains how to extend a class with TypeScript at 40.30 in his tutorial](https://www.youtube.com/watch?v=BCg4U1FzODs).

## Generics

Generics are used to build reusable components.

[Brad Traversy explains how to extend a class with TypeScript at 43.30 in his tutorial](https://www.youtube.com/watch?v=BCg4U1FzODs).

Before the use of generics:

    function getArray(items: any[]): any[] {
        return new Array().concat(items)  
    }

    let numArray = getArray([1, 2, 3, 4])
    let strArray = getArray(["brad", "john", "jill"])

    numArray.push("hello")

After the use of generics:

    function getArray**<T>**(items: T[]): T[] {
        return new Array().concat(items)  
    }

    let numArray = getArray<number>([1, 2, 3, 4])
    let strArray = getArray<string>(["brad", "john", "jill"])

    // should generate an error now
    numArray.push("hello")