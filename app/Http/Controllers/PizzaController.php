<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Pazero;

class PizzaController extends Controller
{

  public function index() {
    
    $pizzas = Pazero::all();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  //URL id functionality
  public function show($id) {

    $pizza = Pizza::findorfail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create() {
    return view('pizzas.create');
  }

  public function store() {

    $pazero = new Pazero();

    $pazero->name = request('name');
    $pazero->company = request('company');
    $pazero->fuel = request('fuel');
    $pazero->address = request('address');
    $pazero->phone = request('phone');

    $pazero->save();
    return redirect('/')->with('mssg', 'Thanks for your order');
  }

  public function destroy($id) {
    $pizza = Pizza::findorfail($id);

    $pizza->delete();
    return redirect('/pizzas');
  }

}
