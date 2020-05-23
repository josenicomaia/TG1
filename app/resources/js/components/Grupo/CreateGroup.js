import React from 'react';
import Group from "./Group";

class CreateGroup extends React.Component {
    render() {
        const { criarGrupo } = this.props;

        return (
            <div className="card">
                <div className="card-header">
                    Cadastrar Grupo
                </div>
                <div className="card-body">
                    <form>
                        <Group grupo={criarGrupo} />
                        <div className="text-right">
                            <button type="submit" className="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        );
    }
}

export default CreateGroup;
