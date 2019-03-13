import React, {Component} from 'react';
import axios from 'axios';
import Resultat from './Resultat';

export default class Resultats extends Component {
    constructor(props) {
        super(props);
        this.state = {
            resultats: []
        }
    }

    componentDidMount() {
        console.log('Did')
        axios.get(`http://ade.test/api/resultats`)
            .then(res => {
                console.log(res.data.map)
                res.data.forEach(function (element) {
                    console.log(element.id);
                });
                const resultats = res.data;
                this.setState({resultats});
            });
    }

    componentWillReceiveProps(nextProps) {
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <h1>Test</h1>
                    <table className="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Résultat du</th>
                            <th scope="col">Centre</th>
                            <th scope="col">Contiens les codes</th>
                            <th scope="col">Afficher</th>
                        </tr>
                        </thead>
                        <tbody>
                        {this.state.resultats.map(resultat => <Resultat resultat={resultat}/>)}
                        </tbody>
                    </table>
                </div>
            </div>
        );
    }
}
