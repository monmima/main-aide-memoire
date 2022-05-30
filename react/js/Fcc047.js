// 47. Render React on the Server with renderToString

class App extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return <div/>
    }
};
  
// change code below this line
ReactDOMServer.renderToString(<App/>);