
class LinkInList extends React.Component {
    render() {
        return (
            <li>
                <a href={this.props.url} title={this.props.text} >{this.props.text}</a>
            </li>
        );
    }
}