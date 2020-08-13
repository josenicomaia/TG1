<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index() {
        return view('groups.index', [
            'groups' => Group::all()
        ]);
    }

    public function create() {
        return view('groups.create');
    }

    public function store(Request $request) {
        $group = new Group($request->all());
        $group->save();

        return redirect("/groups");

//        return redirect("/groups/{$group->id}/edit");
    }

    public function edit(Group $group) {
        return view('groups.edit',[
            'group' => $group
        ]);
    }

    public function update(Request $request, Group $group) {
        $group->fill($request->all())
            ->save();

        return redirect("/groups");
    }
}
