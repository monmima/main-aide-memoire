# Objects

An object with types:

    const user: {
      id: number | string,
      name: string
    } = {
      id: "1",
      name: "John"
    }

The same, but cleaner:

    type User = {
      id: number | string,
      name: string
    }

    const user: User = {
      id: 1,
      name: "John"
    }

With an interface. In the example below, `age` is optional since it is followed by a question mark.

    interface UserInterface {
      id: number | string,
      name: string
      age?: number
    }

    const user1: UserInterface = {
      id: "1",
      name: "John"
    }

Making a value read-only.

    interface UserInterface {
      readonly id: number | string,
      name: string
      age?: number
    }

    const user1: UserInterface = {
      id: "1",
      name: "John"
    }

    user1.id = 5; // this will create an error