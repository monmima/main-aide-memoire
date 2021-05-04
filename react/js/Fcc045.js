// 45. React: Give Sibling Elements a Unique Key Attribute

const frontEndFrameworks = [
    'React',
    'Angular',
    'Ember',
    'Knockout',
    'Backbone',
    'Vue'
];
  
function Frameworks() {
    // change code here
    const renderFrameworks = frontEndFrameworks.map(
        (items) => <li key = {items.toString()}>{items}</li>
    );
    
    return (
        <div>
            <h1>Popular Front End JavaScript Frameworks</h1>
            <ul>
                {renderFrameworks}
            </ul>
        </div>
    );
};

ReactDOM.render(<Frameworks />, document.getElementById('challenge-node'));