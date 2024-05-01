<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index'])->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class,'create']);
Route::post('/pizzas', [PizzaController::class,'store']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->middleware('auth');



Auth::routes([
    //use this code if you want to prevent/disable registration
    // 'register' => false,
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
