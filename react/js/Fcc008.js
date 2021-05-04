// 8. Create a React Component
// https://www.freecodecamp.org/learn/front-end-libraries/react/create-a-react-component

class MyComponent extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        // change code below this line
        return(
            <div>
                <h1>Hello React!</h1>
            </div>
        );
        // change code above this line
    }
};

ReactDOM.render(<MyComponent />, document.querySelector("#root"));