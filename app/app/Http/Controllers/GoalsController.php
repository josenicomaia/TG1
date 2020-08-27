<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GoalsController extends Controller {
    private GroupRepository $groupRepository;

    public function __construct(GroupRepository $groupRepository) {
        $this->groupRepository = $groupRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $goals = Goal::with('group')
            ->orderBy('at', 'desc')
            ->get();

        return view('goals.index', [
            'goals' => $goals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('goals.create', [
            'goal' => new Goal([
                'at' => Carbon::now()->firstOfMonth(),
            ]),
            'groups' => $this->groupRepository->getFlatTree()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $goal = new Goal($request->all());
        $goal->save();

        return redirect('/goals');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal) {
        return view('goals.edit', [
            'goal' => $goal,
            'groups' => $this->groupRepository->getFlatTree()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal) {
        $goal->fill($request->all())
            ->save();

        return redirect('/goals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal) {
        $goal->delete();

        return redirect('/goals');
    }
}
