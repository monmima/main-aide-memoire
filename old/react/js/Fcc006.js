// 6. Learn About Self-Closing JSX Tags(like br and hr)
// https://www.freecodecamp.org/learn/front-end-libraries/react/learn-about-self-closing-jsx-tags

const JSX = (
    <div>
        {/* // remove comment and change code below this line */}
        <h2>Welcome to React!</h2>
        <br />
        {/* <p>Be sure to close all tags!</p> */}
        <hr />
        {/* // remove comment and change code above this line  */}
    </div>
);

ReactDOM.render(JSX, document.querySelector("#root"));