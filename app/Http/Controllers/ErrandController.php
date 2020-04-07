<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Errand;

class ErrandController extends Controller
{
    public function create(){
        return view ('errands.create');
    }

    public function index() {
        $errands = Errand::all();

        return view('errands.index',
        [
            'errands' => $errands
        ]);
    }

    public function store(){

        $errand = new Errand();

        $errand->name = request('name');
        $errand->contact = request('contact');
        $errand->address = request('address');
        $errand->type = request('type');
        $errand->extra = request('extra');

        $errand->save();

        return redirect('/')->with('mssg', 'Thank you! Your order has been sent.');
    }

    public function show($id){

        $errand = Errand::findOrFail($id);
        return view('errands.show', ['errand' => $errand]);
    }

    public function destroy($id){
        $errand = Errand::findOrFail($id);
        $errand->delete();
        return redirect('/errands');
    }
}
