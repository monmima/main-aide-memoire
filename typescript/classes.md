# Classes

## Basic TypeScript class

A constructor is run everytime you instanciate (= create an instance of) a class. So in the example below the `console.log()` message would be printed twice to the console.

    class Person {
      id: number
      name: string

      constructor(id: number, name: string) {
        console.log("A constructor is ran as soon as you instanciate the object.")

        this.id = id
        this.name = name
      }
    }
    
    const brad = new Person(1, "Brad Traversy")
    const mike = new Person(2, "Mike Jordan")

    // the following line will display two Person objects in the console
    console.log(brad, mike)

## Using data modifiers in classes

There are three data modifiers:

- public
  - default value; therefore would be pointless in most situations
- private
  - accessible only from within the class
- protected
  - only accessible from the class or any class that is extended from the class

Private and protected value examples. The two last lines would create errors since Brad is a protected value.

    class Person {
      private id: number
      protected name: string

      constructor(id: number, name: string) {
        this.id = id
        this.name = name
      }
    }

    let brad = new Person(1, "brad");

    console.log(brad.name);
    console.log(brad.id);

## Using an interface with a class

    interface PersonInterface {
      id: number
      name: string
      string(): string
    }

    class Person implements PersonInterface {
      id: number
      name: string

      constructor(id: number, name: string) {
        this.id = id
        this.name = name
      }

      string(): string {
        return `Current name: "${this.name}".`
      }
    }

    let brad = new Person(1, "brad");

    console.log(brad.id); // 1
    console.log(brad.name); // brad

## Extending a class

In this example we'll assume you want to reuse the `Person` class above and create a new employee subclass. Only the new code will be shown below.

    class Employee extends Person {
      position: string

      constructor(id: number, name: string, position: string) {
        super(id, name)
        this.position = position
      }
    }

    const emp = new Employee(3, "Shawn", "developer");

    console.log(emp.name); // Shawn
    console.log(emp.string()); // Current name: "Shawn".