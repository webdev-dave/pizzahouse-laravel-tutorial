@extends('layouts.layout');

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">type - {{$pizza->type}}</p>
    <p class="base">base - {{$pizza->base}}</p>
</div>
<a href="/pizzas" class="back"><- back to all pizzas</a>
@endsection