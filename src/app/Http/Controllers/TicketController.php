<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\TicketResource;
use App\Models\Category;
use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketLow = [];
        $ticketMedium = [];
        $ticketHigh = [];
        $ticketUrgent = [];

        $tickets = Ticket::query()->with(['category', 'user'])->get();
        foreach ($tickets as $ticket){
            switch ($ticket->priority){
                case 'low':
                    $ticketLow[] = $ticket;
                    break;
                case 'medium':
                    $ticketMedium[] = $ticket;
                    break;
                case 'high':
                    $ticketHigh[] = $ticket;
                    break;
                case 'urgent':
                    $ticketUrgent[] = $ticket;
                    break;
            }
        }

        $allTickets =[
            'urgent'=> $ticketUrgent,
            'high'=> $ticketHigh,
            'medium'=> $ticketMedium,
            'low'=> $ticketLow,
        ];

        return view('ticket.index', compact('allTickets'));
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
//        ładowanie wielu relacji do zapytania
        $ticketData = Ticket::query()->with(['category', 'user'])->where('id', $ticket->id)->get();

        return view('ticket.show', compact('ticketData'));
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
