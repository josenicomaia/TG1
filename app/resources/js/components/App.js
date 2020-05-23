import React, {Fragment} from 'react';
import ReactDOM from 'react-dom';
import './App.scss';
import CreateGroup from './Grupo/CreateGroup';
import EditGroup from './Grupo/EditGroup';
import GroupRepository from './Grupo/GroupRepository';
import Header from "./Header";

class App extends React.Component {
    constructor(props) {
        super(props);
        this.groupRepository = new GroupRepository();
    }
    state = {
        group: {
            id: 1,
            description: 'teste 123'
        },
        criarGrupo: {
            descricao: 'testando'
        },
    };

    render() {
        return (
            <Fragment>
                <Header />
                <div className="app-component container">
                    <div className="row justify-content-center">
                        <div className="col-md-12">
                            <EditGroup group={this.state.group} groupRepository={this.groupRepository} />
                            {/*<CreateGroup criarGrupo={this.state.criarGrupo} />*/}
                        </div>
                    </div>
                </div>
            </Fragment>
        );
    }
}

export default App;

if (document.getElementById('app-root')) {
    ReactDOM.render(<App />, document.getElementById('app-root'));
}
