@extends('layouts.app')
@section('mainContent')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
        @foreach($tickets as $ticket)
            <div class="my-2 bg-gray-800 text-white p-3">
                <a href="{{ route('ticket.show', $ticket->slug) }}"><h1
                        class="text-2xl">{{\Illuminate\Support\Str::of($ticket->title)->upper()}}</h1></a>
                <div>{{\Illuminate\Support\Str::limit($ticket->description,150)}}</div>
                <div>{{$ticket->created_at->diffForHumans()}}</div>
                <div>{{strtoupper($ticket->status)}}</div>
                <div>{{strtoupper($ticket->category)}}</div>
                @auth
                    <div class="py-3">
                        <a href="{{ route('ticket.edit',[$ticket->slug]) }}"
                           class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Edit</a>
                        <a href="{{ route('ticket.destroy',[$ticket->slug]) }}"
                           class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Close</a>
                    </div>
                @endauth
            </div>
        @endforeach
    </div>
@endsection
