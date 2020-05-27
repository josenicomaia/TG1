import Axios from 'axios-observable';
import {retry} from "rxjs/operators";

class GroupRepository {
    constructor() {
        this.url = '/api/groups';
    }

    save = (group) => {
        return Axios.put(this.url + '/' + group.id, group).pipe(
            retry(1)
        );
    }

    create = (createGroup) => {
        return Axios.post(this.url, createGroup).pipe(
            retry(1)
        );
    }
}

export default GroupRepository;
