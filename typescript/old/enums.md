# Enum or enumerated types

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
