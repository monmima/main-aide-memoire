# React Aide-Mémoire

## Creating a new React project

Type this command:

    npx create-react-app [folder-name]

You could also use static HTML with React injected into it. See [Add React to a Website](https://reactjs.org/docs/add-react-to-a-website.html) (from the official documentation) for more information.

## Running a React project

Type this command:

    npm start

## Finding your core file

At the core of every React project is a core file called **src/app.js**.

## Creating a component

If you copy the following code after your import inside of src/app.js, you'll create a new component.

    function TestComponent() {
        return <h2>I am a test component!</h2>;
    }

Then you can choose where you want to import this exactly in your App() function using this code:

    <TestComponent />

Now, if you want your component to be stored in a separate file, you have to use import and export statements.

So you're component file should look like this:

    function TestComponent() {
        return <h2>I am a test component!</h2>;
    }

    export default TestComponent;

And your src/App.js file should look like this (assuming you have created a components/ folder):

    import TestComponent from './components/TestComponent';

## Using Emmet with JSX

This is possible and certainly useful. Visit [Medium](https://medium.com/@eshwaren/enable-emmet-support-for-jsx-in-visual-studio-code-react-f1f5dfe8809c) for a tutorial on how to do this.

## Returning JavaScript from within JSX

JavaScript code can be returned from JSX like so:

    function TestComponent() {
        return <h2>
            I am a test component!
            { console.log("test") }
        </h2>;
    }

    export default TestComponent;

## Passing props

The examples below do the same thing. The difference is that one sample uses a class and the other uses a function to get to the same result.

### Example 1: with a class

    import React from "react";

    class TestComponent extends React.Component {
        constructor(props) {
            super(props);
        }
        render() {
            return (
                <div>
                    <h1>Hello, {this.props.name}</h1>
                </div>
            );
        }
    };

    export default TestComponent;

### Example 2: with a function

    import React from "react";

    function TestComponent(props) {
        return <h1>Hello, {props.name}</h1>;
    }

    export default TestComponent;

## Using default props

    import React from "react";

    const TestComponent = (props) => {
        return (
            <div>
                <h1>Hello {props.name}!</h1>
            </div>
        )
    };

    TestComponent.defaultProps = {
        name: "dude"
    };

    export default TestComponent;