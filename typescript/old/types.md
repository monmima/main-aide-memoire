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