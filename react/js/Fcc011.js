// 11. Compose React Components

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

class Fruits extends React.Component {
    constructor(props) {
      super(props);
    }
    render() {
        return (
            <div>
                <h2>Fruits:</h2>
                { /* change code below this line */ }
                    {/* // nesting two components which is assumed to be in the background  */}
                    <NonCitrus/>
                    <Citrus/>
                { /* change code above this line */ }
            </div>
        );
    }
};

class TypesOfFood extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>
            <h1>Types of Food:</h1>
            { /* change code below this line */ }
            {/* // nesting the other react component */}
            <Fruits/>
            { /* change code above this line */ }
            <Vegetables />
            </div>
        );
    }
};

ReactDOM.render(<TypesOfFood />, document.querySelector("#challenge-node"));