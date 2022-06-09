# CSS Aide-Mémoire

This is a CSS aide-mémoire. Some work needs to be done to sort the information in the README.MD file.

---

## Position: relative versus margin

The second option is better.

    div {
        position: relative;
        left: -30px;
    }

versus

    div {
        margin-left: -30px;
    }

---

## Creating a CSS rule to put the div content upside down.

    div {
        transform: scaleY(-1);
    }

---


## Creating a rule making images responsive.

    img.responsive {
        height: auto;
        max-width: 500px;
        width: 100%;
    }

---

## Removing the default style from an <code>input</code> field?

    input {
        appearance: none;
    }

---

## Using a selector for an <code>li</code> tag which has a class

    li[class] {
        color: red;
    }

---

## Using a selector for a <code>password input</code> tag

    input[type="password"] {
        background-color: red;
    }

or 

    input[type=password] {
        background-color: red;
    }

---


## Creating a rule for a CSS image to take its full size within a div.

    div {
        background-size: 100% 100%;
    }

---


## CSS What is the purpose of <strong>right 20px</strong> and <strong>30%</strong> below?

    background: url(images/moon.png), no repeat right 20px / 30%;

Answer:

- right 20px = position
- 30% = size

---

## Changing the order of items in CSS grid and flex

Use **order**.

---


## Getting rid of a border

    border: 0

---

## Changing transparency

    opacity: 0.5

---

## Writing a selector for a class beginning/ending/containing a string?

- a[class*="test"] {
- a[class^="test"] {
- a[class$="test"] {
- a[class~="test"] {

---

## What do flex-grow, flex-shrink and flex-basis have in common?

They apply on a flex child.

- Flex-basis should be used instead of width.
- You can group all three of these like this: 1 1 200px;.

---

## Making sure a CSS grid fraction never goes below a certain point

Use **minmax**.

---

## Writing a date in a footer the semantic way

    <footer>
        <time datetime="2021-11">November 2021</time>
    </footer>

## Selecting all children from a parent

    .parent-selector > * {
        text-decoration: underline;
    }