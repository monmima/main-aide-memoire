# Types in TypeScript

Even if you don't explicitely set a variable, TypeScript does type inference to a certain extent.

Number

	let id: number = 5;

String

	let company: string = "Traversy Media";

Boolean

	let isPublished: boolean

Any

This is a a special TS type that allows any of the JS types.

	let x: any = true;

Array of numbers

	let ids: number[] = [1, 2, 3, 4, 5];

Array of any values

	let arr: any[] = [1, true, "Hello"];

Tuple

With a tuple, you can specify specific values for specific incides.

	let person: [number, string, boolean] = [1, "Brad", true];

Tuple array

	let employee: [number, string][]
	employee = [
		[1, "Brad"],
		[2, "John"],
		[3, "Jill"],
	]

Union

This is what you use if you want a particular variable to hold more than one type. So in the example below `pid` could hold either the `string` or `number` type.

	let pid: string | number = 22;

Enum or enumerated types

Allows you to define a set of named constants.

	enum Direction1 {
		Up,
		Down,
		Left,
		Right
	}

	console.log(Direction1) // { 0: 'Up', 1: 'Down', 2: 'Left', 3: 'Right' }
	console.log(Direction1.Up); // 0

You can also set the start of an enum to an arbitrary number.

	enum Direction1 {
			Up = 1,
			Down,
			Left,
			Right
	}

	console.log(Direction1.Up); // 1
	console.log(Direction1.Down); // 2

You can also set enums to strings

	enum Direction1 {
			Up = "Up",
			Down = "Down",
			Left = "Left",
			Right = "Right"
	}

	console.log(Direction1.Up); // Up
	console.log(Direction1.Down); // Down
