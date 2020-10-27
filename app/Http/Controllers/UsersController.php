<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar;

class UsersController extends Controller
{
    //
    public function loadView()
    {   // that's old
        $userName = "Jane";
        return view('users')->with('name', 'Victoria') -> with('articlePublished', 'On GeeksforGeeks');
    }

    public function viewLoad()
    {
        $userName = "Jane";
        $myArray = ['array element 01','array element 02','array element 03'];
        return view('users',['users'=>['pokemon','Luzifer','Ribbentropp'],'myArray'=>$myArray]);
    }

    function getData(Request $req){
        //besser du verwendest:
      // dd($req);
        //dd($req->input());
        // und nicht:
        //Debugbar::info($req);

        $req->validate([
            'username'=> 'required',
            'userpassword'=> 'required|min:5',
            
        ]);
        return $req->input();
    }
}
