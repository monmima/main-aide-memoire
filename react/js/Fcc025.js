// 25. Bind 'this' to a Class Method

class MyComponent extends React.Component {
    constructor(props) {
            super(props);
            this.state = {
            itemCount: 0
        };
        // change code below this line
        // without this binding it will not work because this keyword is undefined. 
        // so we need to bind this in the constructor so this
        // becomes bound to the class methods when the component is initialized.
        this.addItem = this.addItem.bind(this);
        // change code above this line
    }
    addItem() {
        this.setState({
            itemCount: this.state.itemCount + 1
        });
    }
    render() {
        return (
        <div>
            { /* change code below this line */ }
            <button onClick={this.addItem}>Click Me</button>
            { /* change code above this line */ }
            <h1>Current Item Count: {this.state.itemCount}</h1>
        </div>
        );
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));