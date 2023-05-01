@extends('master')
@section('content')
    <h1>{{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
<h2>We are in the ticket create</h2>
@endsection
