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
        @auth
            <div
                class="w-full mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('reply.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <x-textarea class="h-32 block mt-1 w-full" name="replyText" placeholder="Ticket Body"/>
                        <x-input-error :messages="$errors->get('replyText')" class="mt-2"/>
                    </div>

                    <div class="mt-4 items-center">
                        <x-text-input type="file" name="attachment" class="block mt-1 w-full"/>
                        <x-input-error :messages="$errors->get('attachment')" class="mt-2"/>
                    </div>

                    <div class="items-center mt-4">
                        <x-primary-button class="justify-center w-full">
                            {{ __('Create Reply') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        @endauth
        <div class="flex flex-col pt-20 sm:justify-center items-center bg-gray-100 dark:bg-gray-900">
            <div class="flex flex-auto text-white text-4xl">
                {{ __('Replies') }}
            </div>
        </div>
    </div>

@endsection
