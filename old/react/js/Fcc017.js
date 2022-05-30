// 17. Override Default Props

const Items = (props) => {
    return <h1>Current Quantity of Items in Cart: {props.quantity}</h1>
}

Items.defaultProps = {
    quantity: 0
}

class ShoppingCart extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        { /* change code below this line */ }
        // overriding the default props is same as explicitly setting up the props 
        return <Items quantity = {10} />
        { /* change code above this line */ }
    }
};

ReactDOM.render(<ShoppingCart />, document.getElementById('challenge-node'));