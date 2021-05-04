// 15. Pass an Array as Props
const MyArray = (props) => {
    return <p>{props.tasks.join(", ")}</p>
};

// 16. Use Default Props
const MyDefaultProps = (props) => {
    return (
        <div>
            <p>Shopping Cart Component: {props.items}</p>
        </div>
    )
};

// 16. Use Default Props
MyDefaultProps.defaultProps = {
    items: 0
};

// 22. Render State in the User Interface
class MyState extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            name: 'freeCodeCamp'
        }
    }
    render() {
        return (
            <div>
                { /* change code below this line */ }
                <p>{this.state.name}</p>
                { /* change code above this line */ }
            </div>
        );
    }
};

// 24. Set State with this.setState
class SetState extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			name: 'Initial State'
		};
		this.handleClick = this.handleClick.bind(this);
	}
	handleClick() {
		// change code below this line
		// Note the setState Syntax
		this.setState({
			name: "React Rocks!"
		});

		// change code above this line
	}
	render() {
		return (
			<div>
				<button onClick={this.handleClick}>Click Me</button><span>{this.state.name}</span>
			</div>
		);
	}
};

// 34. Add Event Listeners
class Event extends React.Component {
    render() {
        return (
            // use camelCase only and no px in pixels
            <button onClick={console.log("test")}>Click me to log stuff to the console</button>
        );
    }
};

// 36. Introducing Inline Styles
class InlineStyles1 extends React.Component {
    render() {
        return (
            <div style={{color: "red", fontWeight: "bold"}}>Big Red</div>
        );
    }
};

// 37. Add Inline Styles in React
const styles = {
    color: "purple",
    border: "2px solid purple"
}

// 37. Add Inline Styles in React
class InlineStyles2 extends React.Component {
    render() {
        return (
            <div style={styles}>Style Me!</div>
        );
    }
};

// 39. Render with an If/Else Condition
class IfElseCondition extends React.Component {
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
                    <button onClick={this.toggleDisplay}>Toggle Display</button><span>Displayed!</span>
                    
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

// 45. Give Sibling Elements a Unique Key Attribute
const frontEndFrameworks = [
    'React',
    'Angular',
    'Ember',
    'Knockout',
    'Backbone',
    'Vue'
];

// 45. Give Sibling Elements a Unique Key Attribute
function Frameworks() {
    // change code here
    const renderFrameworks = frontEndFrameworks.map(
        (items) => <li key = {items.toString()}>{items}</li>
    ); 
    return (
        <div>
            <p>Popular Front End JavaScript Frameworks</p>
            <ul>
                {renderFrameworks}
            </ul>
        </div>
    );
};

// Final Result
class App extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>

                <h3>15. Pass an Array as Props</h3>
                <MyArray tasks = { ["test", "test2"] } />

                <h3>16. Use Default Props</h3>
                <MyDefaultProps />
                <MyDefaultProps items = {10} />

                <h3>22. Render State in the User Interface</h3>
                <MyState />

                <h3>24. Set State with this.setState</h3>
                <SetState />

                <h3>34. Add Event Listeners</h3>
                <Event />

                <h3>36. Introducing Inline Styles</h3>
                <InlineStyles1 />

                <h3>37. Add Inline Styles in React</h3>
                <InlineStyles2 />

                <h3>39. Render with an If-Else Condition</h3>
                <IfElseCondition />

                <h3>45. Give Sibling Elements a Unique Key Attribute</h3>
                <Frameworks />

            </div>
        );
    }
};

// Rendering!
ReactDOM.render(<App />, document.getElementById('challenge-node'));