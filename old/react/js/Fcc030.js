// 30. Pass State as Props to Child Components

class MyApp extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            name: 'CamperBot'
        }
    }
    render() {
        return (
            <div>
                {/* //  passing up the state name as props */}
                <Navbar name={this.state.name} />
            </div>
        );
    }
};
  
class Navbar extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
        <div>
            {/* // now accessing the props */}
            <h1>Hello, my name is: {this.props.name} </h1>
        </div>
        );
    }
};

ReactDOM.render(<MyApp />, document.getElementById('challenge-node'));