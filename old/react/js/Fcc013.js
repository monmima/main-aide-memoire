// 13. Write a React Component from Scratch

// change code below this line
class MyComponent extends React.Component {
    // Constructor and super both passes props
    constructor(props){
        super(props);
    }

    render(){
        return(
            <h1>My First React Component!</h1>
        );
    }
};

ReactDOM.render(<MyComponent />, document.getElementById('challenge-node'));