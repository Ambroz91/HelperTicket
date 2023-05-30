@extends('layouts.app')
@section('mainContent')
    <div class="flex flex-col pt-20 sm:justify-center items-center bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-auto text-white text-4xl">
            {{ __('Create a Category') }}
        </div>

        <div
            class="w-full sm:max-w-screen-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="category"
                                  placeholder="Category Name"/>
                    <x-input-error :messages="$errors->get('category')" class="mt-2"/>
                </div>

                <div class="items-center mt-4">
                    <x-primary-button class="justify-center w-full">
                        {{ __('Add Category') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <div class="max-w-3xl py-6 text-white mx-auto">
        @foreach($categories as $category)

            <div
                class="flex justify-between h-16 bg-white px-6 py-4 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg mb-5">
                <div class="align-middle">{{$category->category}}</div>
                <div>
                    <a href="{{ route('category.edit',[$category->id]) }}"
                       class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Edit</a>
                    <a href="{{ route('category.destroy',[$category->category]) }}"
                       class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Close</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
