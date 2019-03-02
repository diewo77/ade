import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    constructor(props) {
        super(props);
        this.state = {
            date: null,
            center_id: null
        }
    }

    componentDidMount() {
        this.setState({
            filtered: this.props.items
        });
    }

    componentWillReceiveProps(nextProps) {
        this.setState({
            filtered: nextProps.items
        });
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col">
                        <form action="">
                            <div className="form-group">
                                <label htmlFor="formGroupExampleInput">Example label</label>
                                <input type="text" className="form-control" placeholder="Search..."/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    console.log('test yop')
    ReactDOM.render(<Example/>, document.getElementById('app'));
}
