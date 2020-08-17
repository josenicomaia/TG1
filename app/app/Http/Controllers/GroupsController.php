<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller {
    public function index() {
        return view('groups.index', [
            'groups' => Group::getTree()
        ]);
    }

    public function create(Request $request) {
        return view('groups.create', [
            'group' => new Group($request->all())
        ]);
    }

    public function store(Request $request) {
        $group = new Group($request->all());
        $group->save();

        return redirect("/groups");
    }

    public function edit(Group $group) {
        return view('groups.edit', [
            'group' => $group
        ]);
    }

    public function update(Request $request, Group $group) {
        $group->fill($request->all())
            ->save();

        return redirect('/groups');
    }

    public function destroy(Group $group) {
        $group->delete();

        return redirect('/groups');
    }
}
