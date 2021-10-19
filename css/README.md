


## Using media queries

    /*MEDIA QUERIES*/
    @media screen and (max-width: 759px) {
        body
        {
            font-size: 0.8em;         
        }
        /* NO MORE GRID HERE, ONLY FLEX */
        main {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
    }
    @media screen and (min-width: 760px) and (max-width: 960px) {
        body
        {
            font-size: 1em;
        }
        div, figure, figcaption {
            width: 150px;
        }
    }
    @media screen and (min-width: 961px) and (max-width: 1100px) {
        body
        {
            font-size: 1.2em;
        }
        div, figure, figcaption {
            width: 200px;
        }
    }
    @media screen and (min-width: 1100px) {
        body
        {
            font-size: 1.3em;
        }
        div, figure, figcaption {
            width: 250px;
        }
    }

## Loading fonts

- @font-face (local)
- &lt;link&gt; tag (remote)

___

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

___

## Creating a CSS rule to put the div content upside down.

    div {
        transform: scaleY(-1);
    }

___

## Creating a CSS rule to add a clover <strong>before the a div tag</strong>.

    div:before {
        content: "&#92;2618&#92;0a";
    }

___

## Creating a rule making images responsive.

    img.responsive {
        height: auto;
        max-width: 500px;
        width: 100%;
    }

___

## Removing the default style from an <code>input</code> field?

    input {
        appearance: none;
    }

___

## What are the 5 pseudo-selectors for the <code>a</code> tag (love f... hate)?

Answer:

- a:link
- a:visited
- a:focus
- a:hover
- a:active


___

## Using a selector for an <code>li</code> tag which has a class

    li[class] {
        color: red;
    }

___

## Using a selector for a <code>password input</code> tag

    input[type="password"] {
        background-color: red;
    }

or 

    input[type=password] {
        background-color: red;
    }

___


## Creating a rule for a CSS image to take its full size within a div.

    div {
        background-size: 100% 100%;
    }

___


## CSS What is the purpose of <strong>right 20px</strong> and <strong>30%</strong> below?

    background: url(images/moon.png), no repeat right 20px / 30%;

Answer:

- right 20px = position
- 30% = size

___

## Changing the order of items in CSS grid and flex

Use **order**.

___


## Getting rid of a border

    border: 0

___

## Targeting a <code>p</code> tag and a <code>.note</code> class?

- p.note (p tag with a .note class)
- p .note (.note class child of p tag)
- p + .note (.note tag sibling of p)
- p > .note = .note direct child of p tag

___

## Changing transparency

    opacity: 0.5

___

## Writing a selector for a class beginning/ending/containing a string?

- a[class*="test"] {
- a[class^="test"] {
- a[class$="test"] {
- a[class~="test"] {

___

## CSS priority between IDs, classes and tags

1. id
2. class
3. tag

___

## Justifying content in flex

- flex-start
- flex-end
- center
- space-between
- space-evenly
- space-around

___

## What do flex-grow, flex-shrink and flex-basis have in common?

They apply on a flex child.

- Flex-basis should be used instead of width.
- You can group all three of these like this: 1 1 200px;.

___

## Making sure a CSS grid fraction never goes below a certain point

Use **minmax**.

___

## Creating a simple spin keyframe animation
    
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

.test {
    /* your rule here */
    background-color: lightgreen;
    height: 10px;
    width: 100px;
}

Answer:

animation: spin 3s infinite;