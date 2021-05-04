// 32. Use the Lifecycle Method componentWillMount
// The componentWillMount() method is called before the render() method when a component is being mounted to the DOM. Log something to the console within componentWillMount() - you may want to have your browser console open to see the output.

class MyComponent extends React.Component {
    constructor(props) {
        super(props);
    }
    componentWillMount() {
        // change code below this line
        console.log("this component will mount");
        // change code above this line
    }
    render() {
        return <div />
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));