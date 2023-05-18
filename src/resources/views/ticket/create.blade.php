@extends('layouts.app')
@section('mainContent')
    <div class="flex flex-col pt-20 sm:justify-center items-center bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-auto text-white text-4xl">
            <h1>Create a Ticket</h1>
        </div>

        <div
            class="w-full sm:max-w-screen-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" placeholder="Title"/>
                    <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                </div>

                <!-- Password -->
{{--                <div class="mt-4">--}}
{{--                    <x-input-label for="password" :value="__('Password')"/>--}}

{{--                    <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                                  type="password"--}}
{{--                                  name="password"--}}
{{--                                  required autocomplete="current-password"/>--}}

{{--                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--                </div>--}}

                <div class="mt-4">
                    <x-textarea class="h-96 block mt-1 w-full" name="description" placeholder="Ticket Body"/>
                    <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                </div>

                <div class="mt-4 items-center">
                    <x-text-input type="file" name="attachment" class="block mt-1 w-full"/>
                    <x-input-error :messages="$errors->get('attachment')" class="mt-2"/>
                </div>

                <div class="items-center mt-4">
                    <x-primary-button class="justify-center w-full">
                        {{ __('Create Ticket') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
