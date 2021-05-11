@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p><a href="/pajeros">View all pajero orders</a></p>
                    <p><a href="/coachs">View all coach orders</a></p>
                    <p><a href="/cars">View all car orders</a></p>
                    <p><a href="/trucks">View all truck orders</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
