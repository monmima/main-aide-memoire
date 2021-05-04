// 4. Render HTML Elements to the DOM
// https://www.freecodecamp.org/learn/front-end-libraries/react/render-html-elements-to-the-dom

const JSX = (
    <div>
        <h1>Hello World</h1>
        <p>Lets render this to the DOM</p>
    </div>
);

// change code below this line

ReactDOM.render(JSX, document.querySelector("#root"));
