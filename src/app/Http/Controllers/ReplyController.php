<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\Models\Replies;
use App\Http\Requests\StoreReplyRequest;
use App\Http\Requests\UpdateReplyRequest;
use App\Models\Ticket;

class ReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplyRequest $request, Ticket $ticket)
    {
        $replyData = $request->validated();
        $replyData['ticket_id'] = $ticket->id;
        $replyData['user_id'] = auth()->id();

//        dd($replyData);
        $reply = Replies::create($replyData);
//        $reply = Replies::create($request->validated());

        return ReplyResource::make($reply);
    }

    /**
     * Display the specified resource.
     */
    public function show(Replies $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Replies $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReplyRequest $request, Replies $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Replies $reply)
    {
        //
    }
}
