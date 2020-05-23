import React from 'react';

class Group extends React.Component {
    constructor(props) {
        super(props);
        this.onChangeForm = this.props.onChangeForm || (() => {});

        this.initialState = {
            description: props.group.description || ''
        }

        this.state = this.initialState;
    }

    _handleChange = (event) => {
        const {id, value} = event.target;

        const newState = {
            [id]: value
        };

        this.onChangeForm(newState);
        this.setState(newState);
    }

    render() {
        const { description } = this.state;

        return (
            <div className="form-group">
                <label htmlFor="description">Descrição</label>
                <input className="form-control" id="description" value={description} onChange={this._handleChange} />
            </div>
        );
    }
}

export default Group;
