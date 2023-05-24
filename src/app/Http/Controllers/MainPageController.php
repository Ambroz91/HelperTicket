<?php

namespace App\Http\Controllers;

use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = TicketResource::collection(Ticket::all());
        return view('home.main', compact('tickets'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $ticketData = TicketResource::collection(Ticket::all()->where('slug', $slug));
        $ticket = $ticketData->resource;
        return view('home.show', compact('ticket'));
    }

}
