# Classes

## Using an interface with a class

A constructor is run everytime you instanciate (= create an instance of) a class. So in the example below the `console.log()` message would be printed twice to the console.

    class person {
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

    class person {
      private id: number
      protected name: string

      constructor(id: number, name: string) {
        this.id = id
        this.name = name
      }
    }

    console.log(brad.name);