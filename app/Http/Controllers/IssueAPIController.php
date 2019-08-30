<?php

namespace App\Http\Controllers;

use Opendesk\Issue;
use App\Http\Resources\IssueCollection;
use App\Http\Resources\IssueResource;
 
class IssueAPIController extends Controller
{
    public function index()
    {
        return new IssueCollection(Issue::paginate());
    }
 
    public function show(Issue $issue)
    {
        return new IssueResource($issue->load(['services']));
    }

    public function store(Request $request)
    {
        return new IssueResource(Issue::create($request->all()));
    }

    public function update(Request $request, Issue $issue)
    {
        $issue->update($request->all());

        return new IssueResource($issue);
    }

    public function destroy(Request $request, Issue $issue)
    {
        $issue->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}