<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('welcome'); });

// pajero routes
Route::get('/pajeros', 'App\Http\Controllers\PajeroController@index')->middleware('auth');
Route::get('/pajero/create', 'App\Http\Controllers\PajeroController@create');
Route::post('/pajero', 'App\Http\Controllers\PajeroController@store');
Route::get('/pajeros/{id}', 'App\Http\Controllers\PajeroController@show')->middleware('auth');
Route::delete('pajeros/{id}', 'App\Http\Controllers\PajeroController@destroy')->middleware('auth');

//coach routes
Route::get('/coachs', 'App\Http\Controllers\CoachController@index')->middleware('auth');
Route::get('/coach/create', 'App\Http\Controllers\CoachController@create');
Route::post('/coach', 'App\Http\Controllers\CoachController@store');
Route::get('/coachs/{id}', 'App\Http\Controllers\CoachController@show')->middleware('auth');
Route::delete('coachs/{id}', 'App\Http\Controllers\CoachController@destroy')->middleware('auth');

//car routes
Route::get('/cars', 'App\Http\Controllers\CarController@index')->middleware('auth');
Route::get('/car/create', 'App\Http\Controllers\CarController@create');
Route::post('/car', 'App\Http\Controllers\CarController@store');
Route::get('/cars/{id}', 'App\Http\Controllers\CarController@show')->middleware('auth');
Route::delete('cars/{id}', 'App\Http\Controllers\CarController@destroy')->middleware('auth');

//truck routes
Route::get('/trucks', 'App\Http\Controllers\TruckController@index')->middleware('auth');
Route::get('/truck/create', 'App\Http\Controllers\TruckController@create');
Route::post('/truck', 'App\Http\Controllers\TruckController@store');
Route::get('/trucks/{id}', 'App\Http\Controllers\TruckController@show')->middleware('auth');
Route::delete('trucks/{id}', 'App\Http\Controllers\TruckController@destroy')->middleware('auth');

Route::get('/confirm', function () { return view('confirm'); });



Auth::routes();//registration is true

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
