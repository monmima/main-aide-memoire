// 18. Use PropTypes to Define the Props You Expect

/*It's considered a best practice to set propTypes when you know the type of a prop ahead of time.
You can define a propTypes property for a component in the same way you defined defaultProps. 
Doing this will check that props of a given key are present with a given type. */

// import React, { PropTypes } from 'react';
const Items = (props) => {
    return <h1>Current Quantity of Items in Cart: {props.quantity}</h1>
};

// change code below this line
// here proptypes start with small P
Items.propTypes = {
    // quantity should be of type number
    // here proptypes start with Capital P
    quantity: PropTypes.number.isRequired
};
// change code above this line

Items.defaultProps = {
    quantity: 0
};

class ShoppingCart extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return <Items />
    }
};

ReactDOM.render(<ShoppingCart />, document.getElementById('challenge-node'));