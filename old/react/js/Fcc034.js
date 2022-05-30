// 34. Add Event Listeners

class MyComponent extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            message: ''
        };
        this.handleEnter = this.handleEnter.bind(this);
        this.handleKeyPress = this.handleKeyPress.bind(this);
    }
    // change code below this line
    componentDidMount() {
        // use this keyword
        document.addEventListener("keydown", this.handleKeyPress);
    }
    componentWillUnmount() {
        // use this keyword
        document.removeEventListener("keydown", this.handleKeyPress);
    }
    // change code above this line
    handleEnter() {
        this.setState({
            message: this.state.message + 'You pressed the enter key! '
        });
    }
    handleKeyPress(event) {
        if (event.keyCode === 13) {
            this.handleEnter();
        }
    }
    render() {
        return (
            <div>
                <h1>{this.state.message}</h1>
            </div>
        );
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));