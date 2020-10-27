<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Call controller "Users" and the contained function index() */
//Route::get('users',[Users::class,'index']);


Route::get('/welcome/{name}', function($tempname){
    echo ($tempname);
    return view ('welcome',['name'=>$tempname]);
});


Route::get('/', function () {
    return view('hello',['mainroute'=>"This text was send from routes to the view."]);
});

// old type definition :
//Route::get('/users',[UsersController::class,'viewLoad']);


Route::post('users',[UsersController::class, 'getData']);
Route::view("login",'users');

// Route::get('/users','UsersController@loadView');

Route::view("welcome",'welcome');
Route::view("about",'about');



