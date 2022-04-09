# TypeScript

## A few facts

Based on [Traversy Media](https://www.youtube.com/watch?v=BCg4U1FzODs)'s tutorial.

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