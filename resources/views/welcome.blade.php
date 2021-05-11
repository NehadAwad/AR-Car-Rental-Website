@extends('layouts.layout')

@section('content')
<div>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <header>      
      <img height="110" width="150" src="/img/logo05.png" alt="">
      <div class="hero-text-box">
        <h1>Our Flexible Pricing Plan that <br> covers you well</h1>
       
        <a class="btn btn-ghost" href="#section-cities">Rent a Car</a>
      </div>
    </header>
    


    <section class="section-cities">
      <div class="row">
        <h2>AVAILABLE VEHICLE</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-4 box">
          <img src="resources/img/pajero.jpg" alt="lisbon" />
          <h3>Pajero</h3>
          <div class="city-feature">
            <i class="ion-ios-person small-icon"></i>
            1600+ happy customers
          </div>
          <div class="city-feature">
            <i class="ion-ios-star small-icon"></i>
            60+ top drivers
          </div>
          <div class="city-feature">
            <i class="ionicons ion-android-car small-icon"></i>
            <a href="/pajero/create">Order Now</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/coach.jpg" alt="lisbon" />
          <h3>Coach</h3>
          <div class="city-feature">
            <i class="ion-ios-person small-icon"></i>
            3700+ happy customers
          </div>
          <div class="city-feature">
            <i class="ion-ios-star small-icon"></i>
            160+ top drivers
          </div>
          <div class="city-feature">
            <i class="ionicons ion-android-car small-icon"></i>
            <a href="/coach/create">Order Now</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/car.jpg" alt="lisbon" />
          <h3>Car</h3>
          <div class="city-feature">
            <i class="ion-ios-person small-icon"></i>
            2300+ happy customers
          </div>
          <div class="city-feature">
            <i class="ion-ios-star small-icon"></i>
            110+ top drivers
          </div>
          <div class="city-feature">
            <i class="ionicons ion-android-car small-icon"></i>
            <a href="/car/create">Order Now</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/truck.jpg" alt="lisbon" />
          <h3>Truck</h3>
          <div class="city-feature">
            <i class="ion-ios-person small-icon"></i>
            1200+ happy customers
          </div>
          <div class="city-feature">
            <i class="ion-ios-star small-icon"></i>
            50+ top drivers
          </div>
          <div class="city-feature">
            <i class="ionicons ion-android-car small-icon"></i>
            <a href="truck/create">Order Now</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonials">
      <div class="row">
        <h2>Our customers can't live without us</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
          I will most definitely contact you again to use your services! Thank you for such amazing customer service and look forward to purchasing from you in the future!
            <cite
              ><img
                src="resources/img/customer-01.jpg"
                alt="customar-1"
              />Ahsan Mahmud</cite
            >
          </blockquote>
        </div>

        <div class="col span-1-of-3">
          <blockquote>
          I am always spreading the good word about the fabulous service and simple price structure with no hidden costs that you offer and will continue to do so. Can’t wait to see you all again real soon and as soon as I can fly I will be booking cars for the group travelling. 
            <cite
              ><img src="resources/img/customer-02.jpg" alt="customar-2" />Suman Sarkar</cite
            >
          </blockquote>
        </div>

        <div class="col span-1-of-3">
          <blockquote>
          It is always a pleasure with you, perfect service and perfect cars. Next time we are coming to meet you in duquesa, its been a while since we’ve met. Thank you again for the great service and we will keep informing new customers to go with you!
            <cite
              ><img src="resources/img/customer-03.jpg" alt="customar-03" />Mohammad Mithun</cite
            >
          </blockquote>
        </div>
      </div>
    </section>

    

       
  <!--  <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pajero/create">Book a Pajero</a>
        <a href="/coach/create">Book a Coach</a>
        <a href="/car/create">Book a Car</a>
        <a href="/truck/create">Book a Truck</a>
    </div>-->
</div>

@endsection