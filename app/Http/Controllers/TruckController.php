<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;

class TruckController extends Controller
{
    public function index() {
        $trucks = Truck::all();
    
        return view('trucks.index', [
          'trucks' => $trucks,
        ]);
    }

    public function create() {
        return view('trucks.create');
    }

    public function store() {
    
        $truck = new Truck();
    
        $truck->name = request('name');
        $truck->company = request('company');
        $truck->fuel = request('fuel');
        $truck->address = request('address');
        $truck->phone = request('phone');
    
        $truck->save();
        return redirect('/confirm')->with('mssg', 'Thanks for your order');
    }

    public function show($id) {
    
        $truck = Truck::findorfail($id);
        return view('trucks.show', ['truck' => $truck]);
    }

    public function destroy($id) {
        $truck = Truck::findorfail($id);
    
        $truck->delete();
        return redirect('/trucks');
    }
}
