<?php


namespace App\Http\Controllers;


use App\Models\Restaurant;

class RestaurantsController extends Controller
{

    public function index()
    {
        $restaurants = Restaurant::all();
        return view('list', ['restaurants' => $restaurants]);

    }
}
