<?php


namespace App\Http\Controllers;


use App\Models\Restaurant;

class RestaurantsController extends Controller
{
    public function index()
    {
        return view('restaurants.list-restaurant', ['restaurants' => Restaurant::all()]);
    }
}
