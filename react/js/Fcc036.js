// 36. Introducing Inline Styles

class Colorful extends React.Component {
    render() {
        return (
            // use camelCase only and no px in pixels
            <div style={{color: "red", fontSize: 72}}>Big Red</div>
        );
    }
};

ReactDOM.render(<Colorful />, document.getElementById('challenge-node'));