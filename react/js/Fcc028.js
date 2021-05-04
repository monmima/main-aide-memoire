// 28. Create a Controlled Input

class ControlledInput extends React.Component {
  constructor(props) {
      super(props);
      this.state = {
          input: ''
      };
      // change code below this line
      this.handleChange = this.handleChange.bind(this)
      
      // change code above this line
  }
  // change code below this line
  handleChange(e){
      this.setState({
          input: e.target.value
      });
  }
  // change code above this line
  render() {
      return (
      <div>
          { /* change code below this line */}
          {/* onChange is an event that if triggered then handleChange Function will execute above */}
          <input value={this.state.input} onChange={this.handleChange}/>
          { /* change code above this line */}
          <h4>Controlled Input:</h4>
          <p>{this.state.input}</p>
      </div>
      );
  }
};

ReactDOM.render(<ControlledInput />, document.getElementById('challenge-node'));