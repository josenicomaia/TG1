import React from 'react';
import Group from './Group';
import Validator from '../Validator';

class CreateGroup extends React.Component {
    constructor(props) {
        super(props);
        this.groupRepository = props.groupRepository;

        this.validator = new Validator({
            description: 'required|string|min:3'
        });

        this.initialState = {
            description: ''
        }

        this.state = this.initialState;
    }

    _create = (event) => {
        event.preventDefault();
        this.groupRepository.create(this.state);
    }

    _handleGroupFormChange = (createGroup) => {
        this.setState(Object.assign({}, this.state, createGroup));
    }

    render() {
        const createGroup = this.state;

        return (
            <div className="card">
                <div className="card-header">
                    Cadastrar Grupo
                </div>
                <div className="card-body">
                    <form onSubmit={this._create}>
                        <Group group={createGroup} onChangeForm={this._handleGroupFormChange} validator={this.validator} />
                        <div className="text-right">
                            <button type="submit" className="btn btn-primary" disabled={this.validator.fails()}>Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        );
    }
}

export default CreateGroup;
