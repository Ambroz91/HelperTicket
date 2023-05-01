<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('header')
</head>
<body>
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <nav>
        <div class="top-1.5">
        @include('navigation.nav')
        </div>
        @if(Route::is('home'))
            @include('navigation/sidenav')
        @endif
    </nav>
    @auth()
        <div class="left">
            @yield('sidenav')
        </div>
    @endauth
    <div class="right">
        @yield('content')
    </div>
</div>
</body>
</html>
