# Generics

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