// 16. Use Default Props

// React assigns default props if props are undefined, 
// but if you pass null as the value for a prop, it will remain null.
const ShoppingCart = (props) => {
    return (
        <div>
            <h1>Shopping Cart Component: {props.items}</h1>
        </div>
    )
};

// change code below this line
// Assign Default Props to ShoppingCard Component
ShoppingCart.defaultProps = {
    items: 0
};

ReactDOM.render(<ShoppingCart />, document.getElementById('challenge-node'));