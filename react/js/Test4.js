// https://www.youtube.com/watch?v=T3Px88x_PsA

// 16:15

class App extends React.Component {
    // default values
    state = {
        loading: true,
        person: null
    }

    // This is the best place to fetch your data.
    async componentDidMount() {
        const URL = "https://api.randomuser.me/";

        const response = await fetch(URL);

        const data = await response.json();

        // grabbing the first result
        this.setState({person: data.results[0], loading: false })

        console.log(data.results);
    }

    render() {
        return <div>
            {/* conditionally showing data */}
            { this.state.loading || !this.state.person ? (<div>loading...</div>) : (<div>

                <div>{this.state.person.name.title}</div>
                <div>{this.state.person.name.first}</div>
                <div>{this.state.person.name.last}</div>
                <div>
                    <img src={this.state.person.picture.large} />
                </div>

            </div>) }
        </div>;
    }
    
}


ReactDOM.render(<App />, document.querySelector("#root"));