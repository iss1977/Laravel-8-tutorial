<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function loadView()
    {
        $userName = "Jane";
        return view('users')->with('name', 'Victoria') -> with('articlePublished', 'On GeeksforGeeks');
    }
}
