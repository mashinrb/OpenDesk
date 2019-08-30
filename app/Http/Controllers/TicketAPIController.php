<?php

namespace App\Http\Controllers;

use Opendesk\Ticket;
use App\Http\Resources\TicketCollection;
use App\Http\Resources\TicketResource;
 
class TicketAPIController extends Controller
{
    public function index()
    {
        return new TicketCollection(Ticket::paginate());
    }
 
    public function show(Ticket $ticket)
    {
        return new TicketResource($ticket->load(['comments', 'user', 'service']));
    }

    public function store(Request $request)
    {
        return new TicketResource(Ticket::create($request->all()));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update($request->all());

        return new TicketResource($ticket);
    }

    public function destroy(Request $request, Ticket $ticket)
    {
        $ticket->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}