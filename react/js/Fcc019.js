// 19. Access Props Using this.props

// The last several challenges covered the basic ways to pass props to child components.
// But what if the child component that you're passing a prop to is an ES6 class component,
// rather than a stateless functional component? 
// The ES6 class component uses a slightly different convention to access props.

// Anytime you refer to a class component within itself, you use the this keyword. 

class ReturnTempPassword extends React.Component {
	constructor(props) {
		super(props);

	}
	render() {
		return (
			<div>
				{ /* change code below this line */ }
				<p>Your temporary password is: <strong>{this.props.tempPassword}</strong></p>
				{ /* change code above this line */ }
			</div>
		);
	}
};

class ResetPassword extends React.Component {
	constructor(props) {
		super(props);

	}
	render() {
		return (
			<div>
				<h2>Reset Password</h2>
				<h3>We've generated a new temporary password for you.</h3>
				<h3>Please reset this password from your account settings ASAP.</h3>
				{ /* change code below this line */ }
				<ReturnTempPassword tempPassword={"12345678"}/>
				{ /* change code above this line */ }
			</div>
		);
	}
};

ReactDOM.render(<ResetPassword />, document.getElementById('challenge-node'));