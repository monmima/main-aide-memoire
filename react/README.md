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

## Styling components in React

Example 1

    import React from "react";

    const headerStyle = {
        background-color: white;
        color: 'yellow'
    }

    const TestComponent = (props) => {
        return (
            <div>
                <h1 style={headerStyle}>Hello!</h1>
            </div>
        )
    };

    export default TestComponent;

Example 2

    import React from "react";

    const TestComponent = (props) => {
        return (
            <div>
                <h1 style={{color: "red", background: "white"}}>Hello!</h1>
            </div>
        )
    };

    export default TestComponent;

## Handling Events

https://reactjs.org/docs/handling-events.html

Example 1

    import React from "react";

    function TestComponent() {
        function handleSubmit(e) {
            e.preventDefault();
            console.log('You clicked submit.');
        }

        return (
            <form onSubmit={handleSubmit}>
                <button type="submit">Submit</button>
            </form>
        );
    }

    export default TestComponent;

Example 2

import React from "react";

    class TestComponent extends React.Component {
        constructor(props) {
            super(props);
            this.state = { isToggleOn: true };

            // This binding is necessary to make `this` work in the callback
            this.handleClick = this.handleClick.bind(this);  }

            handleClick() {
                this.setState(prevState => ({
                    isToggleOn: !prevState.isToggleOn
                })); 
            }

            render() {
                return (
                    <button onClick={this.handleClick}>
                        {this.state.isToggleOn ? 'ON' : 'OFF'}
                    </button>
                );
            }

    }

    export default TestComponent;

## Condtional rendering

Code sample found on freeCodeCamp

    import React from "react";

    class TestComponent extends React.Component {
        constructor(props) {
            super(props);
            this.state = {
                display: true
            }
            this.toggleDisplay = this.toggleDisplay.bind(this);
        }
        toggleDisplay() {
            this.setState({
                display: !this.state.display
            });
        }
        render() {
            // change code below this line
            if (this.state.display){
                return (
                    <div>
                        <button onClick={this.toggleDisplay}>Toggle Display</button>
                        <h1>Displayed!</h1>
                    </div>
                );
            } else {
                return (
                    <div>
                        <button onClick={this.toggleDisplay}>Toggle Display</button>
                    </div>
                );
            }
        }
    };

    export default TestComponent;

## Using a CDN instead of create-react-app

Add the following to the body of your HTML page:

    <div id="root">Loading React...</div>

    <!--CDN libraries-->
    <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js" crossorigin></script>

    <!--other code-->
    <script type="text/babel" src="../js/Fcc001.js"></script>

You could code use the following to force the type of your props, but it's optional:

    <script src="https://unpkg.com/prop-types@15.6/prop-types.min.js" crossorigin></script>

Create a file named /js/Fcc001.js and copy the following code in it:

    // 1. Create a Simple JSX Element
    // https://www.freecodecamp.org/learn/front-end-libraries/react/create-a-simple-jsx-element

    const JSX = <h1>Hello JSX!</h1>;

    ReactDOM.render(JSX, document.querySelector("#root"));

## Using an API

Example 1

https://www.youtube.com/watch?v=hzLDsxPGctY

    import React from "react";

    class TestComponent extends React.Component {

        constructor(props) {
            super(props);

            this.state = {
                items: [],
                isLoaded: false
            }
        }

        componentDidMount() {
            fetch("https://jsonplaceholder.typicode.com/posts")
            
            .then(res => res.json())
            .then(json => {
                this.setState({
                    isLoaded: true,
                    items: json,
                })
            });
        }

        render() {

            var { isLoaded, items } = this.state;

            if (!isLoaded) {
                return <div>Loading...</div>
            }

            else {
                return (
                    <div className = "App">

                        {items.map(item => (
                            <div key = {item.id} >
                                <h3>{item.title}</h3>
                                <p>{item.body}</p>
                            </div>
                        ))}

                    </div>
                );
            }

        }
    }

    export default TestComponent;

Example 2

https://www.youtube.com/watch?v=T3Px88x_PsA

    import React from "react";

    class TestComponent extends React.Component {
        // default values
        state = {
            loading: true,
            person: null
        }

        // This is the best place to fetch your data.
        async componentDidMount() {
            const URL = "https://api.randomuser.me/";

            const response = await fetch(URL);

            const data = await response.json();

            // grabbing the first result
            this.setState({person: data.results[0], loading: false })

            console.log(data.results);
        }

        render() {
            return <div>
                {/* conditionally showing data */}
                { this.state.loading || !this.state.person ? (<div>loading...</div>) : (<div>

                    <div>{this.state.person.name.title}</div>
                    <div>{this.state.person.name.first}</div>
                    <div>{this.state.person.name.last}</div>
                    <div>
                        <img src={this.state.person.picture.large} />
                    </div>

                </div>) }
            </div>;
        }
        
    }

    export default TestComponent;