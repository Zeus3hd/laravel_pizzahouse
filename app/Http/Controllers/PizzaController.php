<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
    //get data from database
    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name','desc')->get();
    // $pizzas = Pizza::where('type','hawaiian')->get();
    $pizzas = Pizza::latest()->get();
    return view('pizzas.index', [
        'pizzas'=>$pizzas,
        'name'=> request('name'),
        'age'=>request('age')
        ]);
    }

    public function show($id){
    // use the id variable to query the db for record
        return view('pizzas.show', ['id'=>$id]);
    }

    public function create(){
        return view('pizzas.create');
    }
}
