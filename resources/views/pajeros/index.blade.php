@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pajeros for booking</h1>
    @foreach($pajeros as $pajero)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="Pizza icon">
            <h4><a href="/pajeros/{{ $pajero->id }}">{{ $pajero->name }}</a></h4>
        </div>
    @endforeach
</div>
       

@endsection