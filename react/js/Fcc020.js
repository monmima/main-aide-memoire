// 20. Review Using Props with Stateless Functional Components

class CampSite extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>
                <Camper/>
            </div>
        );
    }
};
// change code below this line

const Camper = props => <p>{props.name}</p>;

Camper.defaultProps = {
    name: "CamperBot"
};

Camper.propTypes = {
    name: PropTypes.string.isRequired
};

ReactDOM.render(<CampSite />, document.getElementById('challenge-node'));