<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //by default, model automatically connects to a table with the pluralized model name
    //protected $table = "pizzas";

    //make sure our model is aware that the 'toppings' column is an array and should therefore automatically be converted to a str before submitting to db and reverted to a json array whenever getting data from db
    protected $casts = [
        'toppings' => 'array'
    ];
    use HasFactory;
}
