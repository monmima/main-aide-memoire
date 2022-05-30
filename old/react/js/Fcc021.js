// 21. Create a Stateful Component

// One of the most important topics in React is state. State consists of any data your application needs to know about, that can change over time. You want your apps to respond to state changes and present an updated UI when necessary. React offers a nice solution for the state management of modern web applications.
  
class StatefulComponent extends React.Component {
	constructor(props) {
		super(props);
		// initialize state here

		this.state = {
			name: "Name"
		}
	}

	render() {
		return (
			<div>
				<h1>{this.state.name}</h1>
			</div>
		);
	}
};

ReactDOM.render(<StatefulComponent />, document.getElementById('challenge-node'));