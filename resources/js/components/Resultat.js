import React, {Component} from 'react';

export default class Resultat extends Component {
    constructor(props) {
        super(props);
        this.state = {
            resultats: []
        }
    }

    componentDidMount() {
        console.log(this.props.resultat)
    }

    componentWillReceiveProps(nextProps) {
    }

    render() {
        return (
            <tr key={this.props.resultat.id}>
                <th scope="row">{this.props.resultat.id}</th>
                <td>{this.props.resultat.date_document}</td>
                <td>{this.props.resultat.centre.libelle} - {this.props.resultat.centre.ville}</td>
                <td>
                    { this.props.resultat.sub_resultats.map(sub_resultat => sub_resultat.code).join(", ") }
                </td>
                <td>
                    <a href={'http://ade.test/resultats/' + this.props.resultat.id} className="btn btn-success">Afficher</a>
                </td>
            </tr>
        );
    }
}
