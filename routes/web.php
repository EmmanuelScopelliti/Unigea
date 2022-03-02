<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/login', function () {
    if(Session::has('name')){
        return view('profile');
    } else {
        return view('auth.login');
    }
});


Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');