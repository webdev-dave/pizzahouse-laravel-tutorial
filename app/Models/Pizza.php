<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //by default, model automatically connects to a table with the pluralized model name
    //protected $table = "pizzas";

    use HasFactory;
}
