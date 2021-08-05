


___

Sass: What is the difference between .sass and .scss files?

Answer:

- .sass // old Sass
- .scss // new Sass

___

Terminal: How do you erase a file with the name "test.txt"?

Answer:

rm test.txt

___

Terminal: How do you create a file with the name "test.txt"?

Answer:

touch test.txt

___

Node.js: How do you write a file?

Answer:

fs.writeFileSync("name.txt", "File content.");
___

Terminal: How do you erase a folder with the name "test"?

Answer:

rm -r test/

___

Varia CSS: Create a CSS rule to add a clover before the a div tag.

Answer:

div:before {
    content: "\2618\0a";
}

___

// Terminal: How do you move a folder with the name "test" to the folder "test2"?

Answer:

mv test/ test2/

___

// Varia CSS: Create a CSS rule to put the div content upside down.

div {
    /* your css rule */
}

Answer:

div {
    transform: scaleY(-1);
}

___

// CSS What is the purpose of right 20px and 30% below?

background: url(images/moon.png), no repeat right 20px / 30%;

Answer:

right 20px = position
30% = size

___

// HTML: Add the four missing attributes to the form element.

<form ... >

Answer:

<form action="javascript:;" method="get" name="form-peinture" id="form-peinture">

___

// HTML: What attribute do you use to set tabulation priorities?

Answer:

tabindex="1"

___

// Varia HTML: What is the right tag to use with words such as HTML, cm, etc., Mr., UFO?

Answer:

<abbr>

___

// Varia HTML: What is the equivalent of this.id for a class?

Answer:

this.className

___

// Varia JS: Shorten the function call.

console.log("testa");

Answer:

const log = console.log;
log("testa");

___

// Varia JS: How do you turn a number of type string to a number of type number?

Answer:

parseInt("33")

___

// Varia JS: How do you sort an array of numbers?

Answer:

arr.sort(function(a, b) { return a - b });

___

// Varia JS: How do you remove all punctuations in a string?

Answer:

"This is an airport.".replace(/\W/g, " ");

___

// Varia JS: How do you keep only two decimals in a number?

Answer:

num.toFixed(2);

___

// Varia JS: How do you get the positive value of a number?

Answer:

Math.abs(-1)

___

// Varia JS: How do you get the last item from an array?

Answer:

arr[arr.length - 1]

___

// Varia JS: How do you get the index of an item in an array?

Answer:

arr.indexOf("a")

___

// Varia JS: How do you generate a random number between 1 and 10?

Answer:

Math.floor(Math.random() * 10 + 1)

___

// Varia CSS: How do you get rid of a border?

Answer:

border: 0;

___

// Varia CSS: How do you change the order of items in CSS grid and flex?

Answer:

order

___

// Varia CSS: What are some of the ways you can justify content in flex?

Answer:

- flex-start
- flex-end
- center
- space-between
- space-evenly
- space-around

___

// Varia CSS: What are different ways of targeting a p tag and a .note class?

Answer:

- p.note (p tag with a .note class)
- p .note (.note class child of p tag)
- p + .note (.note tag sibling of p)
- p > .note = .note direct child of p tag

___

// Varia CSS: How do you change transparency?

Answer:

opacity: 0.5

___


