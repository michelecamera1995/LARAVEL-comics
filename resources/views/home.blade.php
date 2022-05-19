@extends('base-layout')

@section('content')

<div id="Main">
    <div id="jumbo"></div>
    <div class="Main container">
        <div class="currentLabel">
            <h2>CURRENT SERIES</h2>
        </div>
        @foreach($comics as $comic)
        <div class="card">
            <a href="/details"><img src="{{ $comic['thumb']}}" /></a>
            <h2>{{ $comic['title']}}</h2>
            <p>{{ $comic['price'] }}</p>
            <p>{{ $comic['type']}}</p>
        </div>
        @endforeach
    </div>

    @endsection