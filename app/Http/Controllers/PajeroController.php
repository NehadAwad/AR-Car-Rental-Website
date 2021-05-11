<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pazero;

class PajeroController extends Controller
{
    public function index() {
    
        $pajeros = Pazero::all();
    
        return view('pajeros.index', [
          'pajeros' => $pajeros,
        ]);
      }
    
      //URL id functionality
      public function show($id) {
    
        $pajero = Pazero::findorfail($id);
        return view('pajeros.show', ['pajero' => $pajero]);
      }
    
      public function create() {
        return view('pajeros.create');
      }
    
      public function store() {
    
        $pazero = new Pazero();
    
        $pazero->name = request('name');
        $pazero->company = request('company');
        $pazero->fuel = request('fuel');
        $pazero->address = request('address');
        $pazero->phone = request('phone');
    
        $pazero->save();
        return redirect('/confirm')->with('mssg', 'Thanks for your order');
      }
    
      public function destroy($id) {
        $pajero = Pazero::findorfail($id);
    
        $pajero->delete();
        return redirect('/pajeros');
      }
}
