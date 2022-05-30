// 9. Create a Component with Composition
// https://www.freecodecamp.org/learn/front-end-libraries/react/create-a-component-with-composition

const ChildComponent = () => {
    return (
        <div>
            <p>I am the child</p>
        </div>
    );
};

class ParentComponent extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>
                <h1>I am the parent</h1>
                { /* change code below this line */ }
                
                <ChildComponent/>

                { /* change code above this line */ }
            </div>
        );
    }
};

ReactDOM.render(<ParentComponent />, document.querySelector("#root"));