<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EntriesController extends Controller {
    public function index() {
        return view('entries.index', [
            'entries' => Entry::all()
        ]);
    }

    public function create() {
        return view('entries.create', [
            'entry' => new Entry([
                'at' => Carbon::now(),
            ]),
            'groups' => Group::getFlatTree()
        ]);
    }

    public function store(Request $request) {
        $entry = new Entry($request->all());
        $entry->save();

        return redirect('/entries');
    }

    public function edit(Entry $entry) {
        return view('entries.edit', [
            'entry' => $entry,
            'groups' => Group::getFlatTree()
        ]);
    }

    public function update(Request $request, Entry $entry) {
        $entry->fill($request->all())
            ->save();

        return redirect('/entries');
    }

    public function destroy(Entry $entry) {
        $entry->delete();

        return redirect('/entries');
    }
}
