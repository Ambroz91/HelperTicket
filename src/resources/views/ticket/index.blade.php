@extends('layouts.app')
@section('mainContent')

    <div class="mt-5">
        @foreach($allTickets as $key => $ticketCat)
            <div @class([
                'text-white font-bold text-center rounded text-2xl',
                'bg-red-600' => $key === 'urgent',
                'bg-orange-600' => $key === 'high',
                'bg-blue-600' => $key === 'medium',
                'bg-green-600' => $key === 'low',
            ])>
                {{ __(strtoupper($key)) }}
            </div>
            <div class="flex flex-wrap">
                @foreach($ticketCat as $ticket)
                    <div class="my-2 mr-3 bg-gray-800 text-white p-3 rounded" draggable="true">
                        <a href="{{ route('ticket.show', $ticket->slug) }}" draggable="false"><h1
                                class="text-2xl">{{Str::limit(\Illuminate\Support\Str::of($ticket->title)->upper(), 30)}}</h1></a>
                        <div>{{\Illuminate\Support\Str::limit($ticket->description,150)}}</div>
                        <div>{{$ticket->created_at->diffForHumans()}}</div>
                        <div>{{strtoupper($ticket->status)}}</div>
                        @if($ticket->category)
                            <div>{{strtoupper($ticket->category->category)}}</div>
                        @endif
                        <div>{{strtoupper($ticket->user->name)}}</div>
                        @auth
                            <div class="py-3">
                                <a href="{{ route('ticket.edit',[$ticket->slug]) }}"
                                   class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" draggable="false">Edit</a>
                                <a href="{{ route('ticket.destroy',[$ticket->slug]) }}"
                                   class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" draggable="false">Close</a>
                            </div>
                        @endauth
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
