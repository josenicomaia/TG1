import React from 'react';
import classNames from 'classnames';
import Validator from '../Validator';

class Group extends React.Component {
    constructor(props) {
        super(props);
        this.onChangeForm = this.props.onChangeForm || (() => {});

        this.validator = this.props.validator || new Validator({
            description: 'required|string|min:3'
        });

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

        this.validator.validate(newState);
        this.onChangeForm(newState);
        this.setState(Object.assign({}, this.state, newState));
    }

    render() {
        const { description } = this.state;

        return (
            <div className="form-group">
                <label htmlFor="description">Descrição</label>
                <input className={classNames('form-control', {
                    'is-invalid': this.validator.fails('description')
                })} id="description" value={description} onChange={this._handleChange} />
            </div>
        );
    }
}

export default Group;
