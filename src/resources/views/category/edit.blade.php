@extends('layouts.app')
@section('mainContent')
    <div class="flex flex-col pt-20 sm:justify-center items-center bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-auto text-white text-4xl">
            {{ __('Edit Category') }}
        </div>

        <div
            class="w-full sm:max-w-screen-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('category.update', $category) }}">
                <input name="_method" type="hidden" value="PATCH">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="category"
                                  placeholder="Category Name" value="{{$category->category}}"/>
                    <x-input-error :messages="$errors->get('category')" class="mt-2"/>
                </div>

                <div class="items-center mt-4">
                    <x-primary-button class="justify-center w-full">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
