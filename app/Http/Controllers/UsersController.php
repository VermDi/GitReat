<?php


namespace App\Http\Controllers;


use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.list-user', ['users' => User::with('restaurants')->get()]);
    }
}

