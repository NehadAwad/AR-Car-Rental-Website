@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Order a Truck</h1>
    <form action="/truck" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="company">Company Name:</label>
        <select name="company" id="company">
            <option value="volvo">Volvo</option>
            <option value="volkswagen">Volkswagen</option>
            <option value="tata">Tata</option>
            <option value="paccar">Paccar</option>
        </select>
        <label for="fuel">Fuel type:</label>
        <select name="fuel" id="fuel">
            <option value="gas">Gas</option>
            <option value="petrol">Petrol</option>
            <option value="diesel">Diesel</option>
          
        </select>
        <label for="address">Address:</label>
        <textarea rows="4" cols="50" name="address" >
        </textarea>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">
        <br>
        <input type="submit" value="Book now">
    </form>
</div>
@endsection