// 5. Render HTML Elements to the DOM
// https://www.freecodecamp.org/learn/front-end-libraries/react/define-an-html-class-in-jsx

const JSX = (
    <div className="myDiv">
        <h1>Add a class to this div</h1>
    </div>
);

ReactDOM.render(JSX, document.querySelector("#root"));