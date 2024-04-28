<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        //1. get data from database
        //2. then pass the data into the view (page) via an array of key-value pairs
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10],
            ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 10],
            ['type' => 'veg supreme', 'base' => 'thin and crispy', 'price' => 10]
        ];

        //access query parameters using request()

        return view('pizzas', ['pizzas' => $pizzas, 'name' => request('name'), 'age' => request('age')]);
    }

    public function show($id)
    {
        //use the $id variable to query the db for a record...
        return view('details', ['id' => $id]);
    }
}
