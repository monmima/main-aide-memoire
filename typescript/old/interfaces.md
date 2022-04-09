# Using interfaces

## Interface general concepts

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

## Using an interface with a function

    interface MathFunc {
        (x: number, y: number): number
    }

    const add: MathFunc = (x: number, y: number): number => x + y
    const sub: MathFunc = (x: number, y: number): number => x - y

## Using an interface with a class

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

## Using data modifiers in classes

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

## Extending a class

[Brad Traversy explains how to extend a class with TypeScript at 40.30 in his tutorial](https://www.youtube.com/watch?v=BCg4U1FzODs).