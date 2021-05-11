@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
<h1>Coachs for booking</h1>
    @foreach($coachs as $coach)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="Pizza icon">
            <h4><a href="/coachs/{{ $coach->id }}">{{ $coach->name }}</a></h4>
        </div>
    @endforeach
    
</div>
       

@endsection