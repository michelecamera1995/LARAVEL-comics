@extends('base-layout')

@section('content')

<div id="Main">
    <div id="details">
        <img id="details-img" src="{{ $comics['thumb']}}" alt="{{ $comics['title']}}">
        <h1 id="details-title">{{ $comics['title']}}</h1>
        <p id="details-series">{{ $comics['series']}}</p>
        <p id="details-description">{{ $comics['description']}}</p>
        <p id="details-price">{{ $comics['price']}}</p>
    </div>
</div>

@endsection