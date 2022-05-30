// 26. Use State to Toggle an Element

class MyComponent extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            visibility: false
        };
        // change code below this line
        this.toggleVisibility = this.toggleVisibility.bind(this);
        // change code above this line
    }

    // change code below this line
    toggleVisibility(){
        if (!this.state.visibility) {
            this.setState({
                visibility: true
            });
        } else {
            this.setState({
                visibility: false
            });
        }
    }

    // change code above this line
    render() {
        if (this.state.visibility) {
            return (
                <div>
                <button onClick={this.toggleVisibility}>Click Me</button>
                <h1>Now you see me!</h1>
                </div>
            );
        } else {
            return (
                <div>
                <button onClick={this.toggleVisibility}>Click Me</button>
                </div>
            );
        }
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));