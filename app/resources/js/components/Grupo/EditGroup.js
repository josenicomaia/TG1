import React, {Fragment} from 'react';
import Group from "./Group";

class EditGroup extends React.Component {
    constructor(props) {
        super(props);
        this.groupRepository = props.groupRepository;
        this.state = props.group;
    }

    _save = (event) => {
        event.preventDefault();
        this.groupRepository.save(this.state);
    }

    _handleChangeGroupForm = (createGroup) => {
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
                        <Group group={group} onChangeForm={this._handleChangeGroupForm} />
                        <div className="dropdown-divider" />
                        <div className="text-right">
                            <button type="submit" className="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        );
    }
}

export default EditGroup;
