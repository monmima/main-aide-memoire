___

HTML/CSS: What are the two ways of loading fonts?

Answer:

@font-face (local)
&lt;link&gt; tag (remote)

___

CSS: What is best?

div {
    position: relative;
    left: -30px;
}

or 

div {
    margin-left: -30px;
}

Answer:

The second option.

___

Varia CSS: Create a CSS rule to put the div content upside down.

div {
    /* your css rule */
}

Answer:

div {
    transform: scaleY(-1);
}

___

Varia CSS: Create a CSS rule to add a clover <strong>before the a div tag</strong>.

Answer:

div:before {
    content: "&#92;2618&#92;0a";
}

___

Varia CSS: Create a rule making images responsive.

img.responsive {
    &lt;!--  code here --&gt;
}

Answer:

img.responsive {
    height: auto;
    max-width: 500px;
    width: 100%;
}

___

Varia CSS: How do you remove default style to an <code>input</code> field?

input {
    &lt;!--  code here --&gt;
}

Answer:

appearance: none;

___

Varia CSS: You probably know the "love f... hate" mnemonic device. Now give the full names of the selectors based on this.

Answer:

a:link
a:visited
a:focus
a:hover
a:active


___

Varia CSS: What is the selector for an <code>li</code> tag which has a class?

Answer:

li[class] {
    color: red;
}

___

Varia CSS: What is the selector for an <strong>password input</strong> tag?

Answer:

input[type="password"] {
    background-color: red;
}

or 

input[type=password] {
    background-color: red;
}

___


Varia CSS: Create a rule for having a CSS image taking its full size within a div.

div {
    &lt;!--  code here --&gt;
}

Answer:

div {
    background-size: 100% 100%;
}

___


CSS What is the purpose of <strong>right 20px</strong> and <strong>30%</strong> below?

background: url(images/moon.png), no repeat right 20px / 30%;

Answer:

right 20px = position
30% = size


___

Varia CSS: What is the CSS shortcut for this?

color: #666666;

Answer:

c#666

___

Varia CSS: How do you change the order of items in CSS grid and flex?

Answer:

order

___


Varia CSS: How do you get rid of a border?

Answer:

border: 0

___

Varia CSS: What are different ways of targeting a <code>p</code> tag and a <code>.note</code> class?

Answer:

- p.note (p tag with a .note class)
- p .note (.note class child of p tag)
- p + .note (.note tag sibling of p)
- p > .note = .note direct child of p tag

___

Varia CSS: How do you change transparency?

Answer:

opacity: 0.5

___

Varia CSS: How do you write a selector for a class beginning/ending/containing a string?

Answer:

- a[class*="test"] {
- a[class^="test"] {
- a[class$="test"] {
- a[class~="test"] {

___

Varia CSS: What is the CSS priority between IDs, classes and tags?

Answer:

1. id
2. class
3. tag

Varia CSS: What are some of the ways you can justify content in flex?

Answer:

- flex-start
- flex-end
- center
- space-between
- space-evenly
- space-around

___

Varia CSS: What do flex-grow, flex-shrink and flex-basis have in common?

Answer:

They apply on a flex child.

* Flex-basis should be used instead of width.
** You can group all three of these like this: 1 1 200px;.

___

Varia CSS: How do you make sure a CSS grid fraction never goes below a certain point?

Answer:

minmax

___


