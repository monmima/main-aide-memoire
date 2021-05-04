
class Link extends React.Component {
    render() {
        return (
            <a href={this.props.url} title={this.props.text} >{this.props.text}</a>
        );
    }
}