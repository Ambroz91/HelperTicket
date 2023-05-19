@extends('layouts.app')
@section('mainContent')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
        @foreach($tickets as $ticket)
            <div class="my-2 bg-gray-800 text-white p-3">
                <a href="{{ route('home.show',[$ticket->slug]) }}"><h1
                        class="text-2xl">{{\Illuminate\Support\Str::of($ticket->title)->upper()}}</h1></a>
                <div>{{\Illuminate\Support\Str::limit($ticket->description,150)}}</div>
                <div>{{$ticket->created_at}}</div>
                <div>{{$ticket->replies->count}}</div>
{{--                TODO: check how to get the number of replies to the ticket--}}
            </div>
        @endforeach
    </div>
@endsection

