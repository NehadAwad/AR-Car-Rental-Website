@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
   <h1>{{ $pajero->name }}</h1>
    
    

    <form action="/pajeros/{{ $pajero->id }}" method="POST">
    @csrf
    @method('DELETE') 
    <button>Complete Booking</button>
    </form>
</div>
<a href="/pajeros"><-- Back to all Pajero booking</a>
@endsection