@extends('layouts.app')
@section('mainContent')

    @foreach($tickets as $ticket)
        {{$ticket->title}}
        {{$ticket->description}}
        {{$ticket->created_at}}
    @endforeach
@endsection
