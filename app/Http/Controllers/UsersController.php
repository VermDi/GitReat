<?php


namespace App\Http\Controllers;


use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
       return view('users.list-user', ['users' => Users::all()]);
    }
}
