@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
   <h1>{{ $truck->name }}</h1>
    
    

    <form action="/trucks/{{ $truck->id }}" method="POST">
    @csrf
    @method('DELETE') 
    <button>Complete Booking</button>
    </form>
</div>
<a href="/trucks"><-- Back to all Truck booking</a>
@endsection