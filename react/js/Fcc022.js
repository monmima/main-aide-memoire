// 22. Render State in the User Interface

class MyComponent extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            name: 'freeCodeCamp'
        }
    }
    render() {
        return (
            <div>
                { /* change code below this line */ }
                <h1>{this.state.name}</h1>
                { /* change code above this line */ }
            </div>
        );
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));