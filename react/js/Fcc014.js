// 14. Pass Props to a Stateless Functional Component

const CurrentDate = (props) => {
    return (
        <div>
            { /* change code below this line */ }
            {/* //   passing up the props called date here */}
            <p>The current date is: {props.date}</p>
            { /* change code above this line */ }
        </div>
    );
};

class Calendar extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>
            <h3>What date is it?</h3>
            { /* change code below this line */ }
            {/* // adding the props date that take return value of date() function  */}
            <CurrentDate date={Date()}/>
            { /* change code above this line */ }
            </div>
        );
    }
};

ReactDOM.render(<Calendar />, document.getElementById('challenge-node'));