// 24. Set State with this.setState

class MyComponent extends React.Component {
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
				<button onClick={this.handleClick}>Click Me</button>
				<h1>{this.state.name}</h1>
			</div>
		);
	}
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));