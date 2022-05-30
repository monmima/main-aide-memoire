// 7. Create a Stateless Functional Component
// https://www.freecodecamp.org/learn/front-end-libraries/react/create-a-stateless-functional-component

const MyComponent = function() {
    // change code below this line
    return (
        <div>{"Every Components return somethings"}</div>
    );
    // change code above this line
};

ReactDOM.render(MyComponent(), document.querySelector("#root"));