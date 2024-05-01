@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose pizza type:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose pizza type:</label>
            <select name="base" id="type">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label for="toppings">Extra Toppings</label>
                <input type="checkbox" name='toppings[]' value="mushrooms">Mushrooms<br/>
                <input type="checkbox" name='toppings[]' value="peppers">Peppers<br/>
                <input type="checkbox" name='toppings[]' value="garlic">Garlic<br/>
                <input type="checkbox" name='toppings[]' value="olives">Olives<br/>
                <input type="checkbox" name='toppings[]' value="pepperoni">Pepperoni<br/>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection
