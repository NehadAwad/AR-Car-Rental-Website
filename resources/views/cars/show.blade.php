@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
   <h1>{{ $car->name }}</h1>
    
    

    <form action="/cars/{{ $car->id }}" method="POST">
    @csrf
    @method('DELETE') 
    <button>Complete Booking</button>
    </form>
</div>
<a href="/cars"><-- Back to all Car booking</a>
@endsection