<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::get('/test', function () {
    // return view('welcome');
    return view('test');
});

Route::get('/users', function () {
    $users = User::all();

   
    dd($users);

    return $users->toArray();
    // return view('welcome');
    // return view('test');
});

Route::get('/user', function () {
    $user = new User();

    dd($user);

    // return $users->toArray();

});



Route::get('/product', function () {
    return view('product');
});

Route::get('/welcome', function () {
    return view('welcome');
});

