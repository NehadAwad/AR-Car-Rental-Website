@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
<h1>Trucks for booking</h1>
    @foreach($trucks as $truck)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="Pizza icon">
            <h4><a href="/trucks/{{ $truck->id }}">{{ $truck->name }}</a></h4>
        </div>
    @endforeach
    
</div>
       

@endsection