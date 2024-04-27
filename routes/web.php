<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    //1. get data from database
    //2. then pass the data into the view (page) via an array of key-value pairs
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 10],
        ['type' => 'veg supreme', 'base' => 'thin and crispy', 'price' => 10]
    ];
    return view('pizzas', ['pizzas'=> $pizzas]);
});
