<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{
    public function index() {
        $coachs = Coach::all();
    
        return view('coachs.index', [
          'coachs' => $coachs,
        ]);
    }

    public function create() {
        return view('coachs.create');
    }

    public function show($id) {
    
        $coach = Coach::findorfail($id);
        return view('coachs.show', ['coach' => $coach]);
    }

    public function store() {
    
        $coach = new Coach();
    
        $coach->name = request('name');
        $coach->company = request('company');
        $coach->fuel = request('fuel');
        $coach->address = request('address');
        $coach->phone = request('phone');
    
        $coach->save();
        return redirect('/confirm')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id) {
        $coach = Coach::findorfail($id);
    
        $coach->delete();
        return redirect('/coachs');
    }
}
