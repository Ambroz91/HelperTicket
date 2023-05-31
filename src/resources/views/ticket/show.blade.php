@extends('layouts.app')
@section('mainContent')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
        <div class="my-2 bg-gray-800 text-white p-3">
            @foreach($ticketData as $ticket)
                <h1
                    class="text-2xl">{{\Illuminate\Support\Str::of($ticket->title)->upper()}}</h1>
                <div>{{$ticket->description}}</div>
                <div>{{$ticket->created_at->diffForHumans()}}</div>
                @if($ticket->category)
                    <div>{{$ticket->category->category}}</div>
                @endif
                <div>{{$ticket->user->name}}</div>
            @endforeach
        </div>
    </div>
@endsection
