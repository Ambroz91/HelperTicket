<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\Http\Resources\TicketResource;
use App\Models\Replies;
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
    public function show(Ticket $ticket)
    {
        dd($ticket);
        $ticket = TicketResource::collection(Ticket::all()->where('slug', $slug));

//        $replyData = ReplyResource::collection(Replies::all()->where('ticket_id', $ticketData->resource[0]->resource->id )->join('',''));
//        $ticket = $ticketData->resource;
        return view('home.show', compact('ticket'));
    }

}
