// 29. Create a Controlled Form
// Note: You also must call event.preventDefault() in the submit handler, to prevent the default form submit behavior which will refresh the web page.

class MyForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
        input: '',
        submit: ''
        };
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    handleChange(event) {
        this.setState({
        input: event.target.value
        });
    }
    handleSubmit(event) {
        // change code below this line
        event.preventDefault();
        this.setState({
            submit: this.state.input
        }); 
        // change code above this line
    }
    render() {
        return (
        <div>
            <form onSubmit={this.handleSubmit}>
                { /* change code below this line */ }
                <input value={this.state.input} onChange={this.handleChange}/>
                { /* change code above this line */ }
                <button type='submit'>Submit!</button>
            </form>
            { /* change code below this line */ }
            <h1>{this.state.submit}</h1>
            { /* change code above this line */ }
        </div>
        );
    }
};

ReactDOM.render(<MyForm />, document.getElementById('challenge-node'));