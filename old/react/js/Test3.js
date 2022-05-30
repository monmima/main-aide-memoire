
// https://www.youtube.com/watch?v=hzLDsxPGctY

// import React, { Component } from "react";

class App extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            items: [],
            isLoaded: false
        }
    }

    componentDidMount() {
        fetch("https://jsonplaceholder.typicode.com/posts")
        
        .then(res => res.json())
        .then(json => {
            this.setState({
                isLoaded: true,
                items: json,
            })
        });
    }

    render() {

        var { isLoaded, items } = this.state;

        if (!isLoaded) {
            return <div>Loading...</div>
        }

        else {
            return (
                <div className = "App">

                    {items.map(item => (
                        <div key = {item.id} >
                            <h3>{item.title}</h3>
                            <p>{item.body}</p>
                        </div>
                    ))}

                </div>
            );
        }


    }
}


ReactDOM.render(<App />, document.querySelector("#root"));