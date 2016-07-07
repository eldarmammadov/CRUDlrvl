@extends('layout')

@section('content')

<h3>Tutti i cardi sono qua</h3>

@foreach($cards as $card)

<div>
<a href="/cards/{{ $card->id }}"{{ $card->title }}</a>

</div>

@endforeach

@stop
