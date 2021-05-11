<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();
    
        return view('cars.index', [
          'cars' => $cars,
        ]);
    }

    public function create() {
        return view('cars.create');
    }

    public function store() {
    
        $car = new Car();
    
        $car->name = request('name');
        $car->company = request('company');
        $car->fuel = request('fuel');
        $car->address = request('address');
        $car->phone = request('phone');
    
        $car->save();
        return redirect('/confirm')->with('mssg', 'Thanks for your order');
    }

    public function show($id) {
    
        $car = Car::findorfail($id);
        return view('cars.show', ['car' => $car]);
    }

    public function destroy($id) {
        $car = Car::findorfail($id);
    
        $car->delete();
        return redirect('/cars');
    }
}
