<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('header')
</head>
<body>
<div class="container mx-auto">
    <nav class="">
        @include('nav')
    </nav>
    <div class="left">
        @yield('sidebar')
    </div>
    <div class="right">
        @yield('content')
    </div>
</div>
</body>
</html>
