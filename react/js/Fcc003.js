// 3. Add Comments in JSX
// https://www.freecodecamp.org/learn/front-end-libraries/react/add-comments-in-jsx

const JSX = (
    <div>
        <h1>This is a block of JSX</h1>
        <p>Here's a subtitle</p>
        {/* comment */}
    </div>
);

ReactDOM.render(JSX, document.querySelector("#root"));