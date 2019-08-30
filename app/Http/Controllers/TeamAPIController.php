<?php

namespace App\Http\Controllers;

use Opendesk\Team;
use App\Http\Resources\TeamCollection;
use App\Http\Resources\TeamResource;
 
class TeamAPIController extends Controller
{
    public function index()
    {
        return new TeamCollection(Team::paginate());
    }
 
    public function show(Team $team)
    {
        return new TeamResource($team->load(['users', 'services']));
    }

    public function store(Request $request)
    {
        return new TeamResource(Team::create($request->all()));
    }

    public function update(Request $request, Team $team)
    {
        $team->update($request->all());

        return new TeamResource($team);
    }

    public function destroy(Request $request, Team $team)
    {
        $team->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}