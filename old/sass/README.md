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

## Talking to a child component even in a scope style sheet

    ::v-deep(div) {
