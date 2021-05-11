@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
<h1>Cars for booking</h1>
    @foreach($cars as $car)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="Pizza icon">
            <h4><a href="/cars/{{ $car->id }}">{{ $car->name }}</a></h4>
        </div>
    @endforeach
    
</div>
       

@endsection