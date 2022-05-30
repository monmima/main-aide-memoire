// 40. Use && for a More Concise Conditional

class MyComponent extends React.Component {
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
        return (
            <div>
                <button onClick={this.toggleDisplay}>Toggle Display</button>
                {/* //  using && instead of if/else */}
                {this.state.display && <h1>Displayed!</h1>}
            </div>
        );
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));