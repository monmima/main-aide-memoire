// 41. Use a Ternary Expression for Conditional Rendering

const inputStyle = {
    width: 235,
    margin: 5
}
  
class CheckUserAge extends React.Component {
    constructor(props) {
        super(props);
        // change code below this line
        this.state = {
            userAge: '',
            input: ''
        }
        // change code above this line
        this.submit = this.submit.bind(this);
        this.handleChange = this.handleChange.bind(this);
    }
    handleChange(e) {
        this.setState({
            input: e.target.value,
            userAge: ''
        });
    }
    submit() {
        this.setState({
            userAge: this.state.input
        });
    }
    render() {
        const buttonOne = <button onClick={this.submit}>Submit</button>;
        const buttonTwo = <button>You May Enter</button>;
        const buttonThree = <button>You Shall Not Pass</button>;
        return (
            <div>
                <h3>Enter Your Age to Continue</h3>
                <input
                    style={inputStyle}
                    type="number"
                    value={this.state.input}
                    onChange={this.handleChange} /><br />
                    {/* changes here */}
                {
                this.state.userAge && 1*this.state.userAge < 18 ? buttonThree : this.state.userAge && 1*this.state.userAge >= 18 ? buttonTwo : buttonOne
                }
            </div>
        );
    }
};

ReactDOM.render(<CheckUserAge />, document.getElementById('challenge-node'));