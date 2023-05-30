<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\TicketResource;
use App\Models\Category;
use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = TicketResource::collection(Ticket::all()->where('user_id', Auth::user()->getAuthIdentifier()));
        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryResource::collection(Category::all());
        return view('ticket.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        $ticket = Ticket::create($request->validated());
        return TicketResource::make($ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
//        dd($ticket->id);
        $ticketData = TicketResource::collection(Ticket::all()->where('id', $ticket->id));
        $ticket = $ticketData->resource;
//
//        $replyData='test';
        return view('ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        dd($ticket);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
