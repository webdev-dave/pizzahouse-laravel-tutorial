<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//import the Pizza Model
use App\Models\Pizza;


class PizzaController extends Controller
{
    public function index()
    {
        //1. get data from database
        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        //$pizzas = Pizza::latest()->get();
        //2. then pass the data into the view (page) via an array of key-value pairs


        //you can access query parameters using request()

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {
        //use the $id variable to query the db for a record
        $pizza = Pizza::findOrFail($id);
        //Then...
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create (){
       return view('pizzas.create'); 
    }

    public function store() {
        
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));
        return redirect('/');
    }
}
