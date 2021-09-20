# SASS aide-mémoire

Info based on the [Learn Sass In 20 Minutes | Sass Crash](https://www.youtube.com/watch?v=Zz6eOVaaelI) tutorial by Dev Ed.

## Testing out SCSS without building a full-blown cumbersome project

1. Install the Live Sass Compiler extension by Ritwick Day for VS Code.
1. Restart VS Code.
1. Create a subfolder for your project called "styles".
1. Create a file called style.css inside it.
1. Create an HTML file.
1. Create a link to the CSS file (wich is generated from the SCSS one).
1. So assuming you used the naming convention described above, your link should look like this:

        <link rel="stylesheet" href="./styles/style.css">

1. You should see the text "Watch Sass" in the blue bar at the bottom of the VS Code window. Click on it to start the live SASS compiler.

## Things to know about SCSS

1. You can write plain old CSS and it will work as intended.
1. SCSS generates generates all the vendor prefixes so you don't have to (-ms-flex-pack, etc.).

## Using variables

    $primaryBtn: rgb(56, 146, 142);

    header button {
        background: $primaryBtn;
    }

    .contact button {
        background: $primaryBtn;
    }

## Nesting CSS rules

Code with no nesting:

    header {
        background-color: lightblue;
        display: flex;
        justify-content: center;
    }

    header button {
        background: $primaryBtn;
    }

Nested code:

    header {
        background-color: lightblue;
        display: flex;
        justify-content: center;

        button {
            background: $primaryBtn;
            &:hover {
                background: red;
            }
            &::after {
                content: " $";
            }
        }
    }

## Importing files into your main .scss one

You can keep different parts of your code in different files. For instance, your variables could be separated from the rest of your code.

1. Create a file in the same folder as the main one starting with an underscore (e.g., _variables.scss).
1. Import the new file into the main one this way (without the underscore):

        @import "./variables";

    or this way:

        @import "./variables.scss";

Having subfiles in a folder would probably work just fine too.

## Using mixins

Basic mixin example:

    @mixin myMixIn() {
        background: lightblue;
        height: 100vh;
    }

    header {
        @include myMixIn();
    }

Mixin with a parameter:

    @mixin myMixIn($color) {
        background: $color;
        height: 100vh;
    }

    header {
        @include myMixIn(blue);
    }

## Using extensions

Extensions makes it possible for you to reuse code from a CSS rule without repeating the code in many places. You can also overwrite a statement, as you can see in the code below.

    header {
        background-color: lightblue;
        height: 100vh;
    }

    footer {
        @extend header;

        background-color: lightgreen;
    }

## Using operators

You can work with operators to make calculations in SASS.

    header {
        width: 100% - 20%;
    }

## Conditionals

This part of my aide-mémoire is inspired by Brad Traversy's [Sass Crash Course](https://www.youtube.com/watch?v=nu5mdN2JIwM).

    @mixin border($direction) {
        @if $direction == top {
            border-top: 5px solid black;
        } @else if $direction == bottom {
            border-bottom: 5px solid pink;
        } @else {
            @error "Custom error message.";
        }
    }

    .no2 {
        @include border(bottom);
    }
