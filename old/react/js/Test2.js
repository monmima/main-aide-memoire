
class FigureModel extends React.Component {
	render() {
		return ( // ICIGO! IMPORTANCE DES PARENTHÈSES OUVRANTES ET FERMANTES
			<figure>
				<img src={`${this.props.link}`} alt={`Portrait of the character ${this.props.name}`} title={`Portrait of the character ${this.props.name} from ${this.props.version}`} className="portrait img-fluid" />

				<figcaption>
					{`${this.props.name} from ${this.props.version}`}
					<RandomNumber number = {this.props.number} />
				</figcaption>

			</figure>
		);
	}
};

class RandomNumber extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			dice: 'Initial State',

			// props turns to a state
			number: this.props.number
		};

		this.handleClick = this.handleClick.bind(this);
	}

	handleClick() {
		this.setState({
			dice: Math.floor((Math.random() * this.state.number) + 1)
		});
	}
	
	render() {
		return (
			<div>
				<button onClick = {this.handleClick}>Roll a D{this.state.number}</button>
                <div>{this.state.dice}</div>
			</div>
		);
	}
};

// Final result
class MyComponent extends React.Component {
    constructor(props) {
        super(props);
    }
    render() {
        return(
            <div>
                <Banner />
                    <main>

						{/* Imoen */}
						<FigureModel link="https://vignette.wikia.nocookie.net/baldursgategame/images/6/62/Coran_CORAN_Portrait_BG1.png" name="Coran" version="BG1" number={4} />

						{/* Imoen */}
						<FigureModel link="https://vignette.wikia.nocookie.net/baldursgategame/images/6/64/Imoen_IMOEN_Portrait_BG1.png" name="Imoen" version="BG1" number={10} />

						{/* Montataron */}
						<FigureModel link="https://vignette.wikia.nocookie.net/baldursgategame/images/7/75/Montaron_MONTAR_Portrait_BG1.png/revision/latest?cb=20180924210859" name="Montaron" version="BG1" number={20} />

						{/* Xzar */}
						<FigureModel link="https://vignette.wikia.nocookie.net/baldursgategame/images/b/bf/Xzar_XZAR_Portrait_BG1.png" name="Xzar" version="BG1" number={100} />
							
                    </main>
                <Banner />
            </div>
        );
    }
};

// Injection
ReactDOM.render(<MyComponent />, document.querySelector("#root"));