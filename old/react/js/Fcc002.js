// 2. Create a Complex JSX Element
// https://www.freecodecamp.org/learn/front-end-libraries/react/create-a-simple-jsx-element

const JSX = <div>
                <h1></h1>
                <p></p>
                <ul>
                    <li>item 1</li>
                    <li>item 2</li>
                    <li>item 3</li>
                </ul>
            </div>;

ReactDOM.render(JSX, document.querySelector("#root"));