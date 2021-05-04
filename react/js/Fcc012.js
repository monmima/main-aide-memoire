// 12. Render a Class Component to the DOM

const Vegetables = () => {
    return (
        <div>
            <h2>Vegetables:</h2>
            <ul>
                <li>Apples</li>
                <li>Blueberries</li>
                <li>Strawberries</li>
                <li>Bananas</li>
            </ul>
        </div>
    );
};

const Citrus = () => {
    return (
        <div>
            <h2>Citrus:</h2>
            <ul>
                <li>Apples</li>
                <li>Blueberries</li>
                <li>Strawberries</li>
                <li>Bananas</li>
            </ul>
        </div>
    );
};

const NonCitrus = () => {
    return (
        <div>
            <h2>Non-Citrus:</h2>
            <ul>
                <li>Apples</li>
                <li>Blueberries</li>
                <li>Strawberries</li>
                <li>Bananas</li>
            </ul>
        </div>
    );
};

const Fruits = () => {
    return (
        <div>
            { /* change code below this line */ }
            <TypesOfFruit />
            { /* change code above this line */ }
        </div>
    );
};

const TypesOfFruit = () => {
    return (
      <div>
          <Citrus />
          <NonCitrus />
      </div>
    );
};

class TypesOfFood extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>
                <h1>Types of Food:</h1>
                {/* change code below this line */}
                <Fruits />
                <Vegetables />
                {/* change code above this line */}
            </div>
        );
    }
};

ReactDOM.render(<TypesOfFood />, document.getElementById('challenge-node'));