<?php

namespace App\Http\Controllers;

use App\Models\Replies;
use App\Http\Requests\StoreReplyRequest;
use App\Http\Requests\UpdateReplyRequest;

class ReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplyRequest $request)
    {
        dd('test');
        $reply = Replies::create($request->validated());
        dd($reply);
//        return TicketResource::make($ticket);
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
