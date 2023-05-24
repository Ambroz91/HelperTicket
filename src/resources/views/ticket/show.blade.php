@extends('layouts.app')
@section('mainContent')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
        <div class="my-2 bg-gray-800 text-white p-3">
            @foreach($ticket as $singleTicket)
                <h1
                    class="text-2xl">{{\Illuminate\Support\Str::of($singleTicket->resource->title)->upper()}}</h1>
                <div>{{$singleTicket->resource->description}}</div>
                <div>{{$singleTicket->resource->created_at->diffForHumans()}}</div>
                @if($singleTicket->resource->replies != null)
                    <div>Replies: {{$singleTicket->resource->replies->count }}</div>
                @else
                    <div>Replies: 0</div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
