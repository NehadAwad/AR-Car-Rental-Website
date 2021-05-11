@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
   <h1>{{ $coach->name }}</h1>
    
    

    <form action="/coachs/{{ $coach->id }}" method="POST">
    @csrf
    @method('DELETE') 
    <button>Complete Booking</button>
    </form>
</div>
<a href="/coachs"><-- Back to all Coach booking</a>
@endsection