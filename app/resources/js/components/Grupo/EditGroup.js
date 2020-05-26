import React from 'react';
import Group from './Group';
import Validator from '../Validator';

class EditGroup extends React.Component {
    constructor(props) {
        super(props);
        this.groupRepository = props.groupRepository;

        this.validator = new Validator({
            description: 'required|string|min:3'
        });

        this.initialState = props.group;
        this.state = this.initialState;
    }

    _save = (event) => {
        event.preventDefault();
        this.groupRepository.save(this.state);
    }

    _handleGroupFormChange = (createGroup) => {
        this.setState(Object.assign({}, this.state, createGroup));
    }

    render() {
        const group = this.state;

        return (
            <div className="card">
                <div className="card-header">
                    Editar Grupo
                </div>
                <div className="card-body">
                    <form onSubmit={this._save}>
                        <div className="form-group">
                            <label htmlFor="id">ID</label>
                            <input className="form-control" id="id" value={group.id} disabled />
                        </div>
                        <Group group={group} onChangeForm={this._handleGroupFormChange} validator={this.validator} />
                        <div className="dropdown-divider" />
                        <div className="text-right">
                            <button type="submit" className="btn btn-primary" disabled={this.validator.fails()}>Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        );
    }
}

export default EditGroup;
