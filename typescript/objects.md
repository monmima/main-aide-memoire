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

The same, but with type assertionL

