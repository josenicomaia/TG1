<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Group;
use App\Repositories\EntryRepository;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EntriesController extends Controller {
    private EntryRepository $entryRepository;
    private GroupRepository $groupRepository;

    public function __construct(EntryRepository $entryRepository, GroupRepository $groupRepository) {
        $this->entryRepository = $entryRepository;
        $this->groupRepository = $groupRepository;
    }

    public function index(Request $request) {
        if ($request->has('group_id')) {
            $entries = $this->entryRepository->listWithGroupByGroupId($request->get('group_id'));
        } else {
            $entries = $this->entryRepository->listWithGroup();
        }

        return view('entries.index', [
            'entries' => $entries
        ]);
    }

    public function create() {
        return view('entries.create', [
            'entry' => new Entry([
                'at' => Carbon::now(),
            ]),
            'groups' => $this->groupRepository->getFlatTree()
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
            'groups' => $this->groupRepository->getFlatTree()
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
