<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::name("login.form")->get("/login", "App\\Http\\Controllers\\LoginController@form");
Route::name("login")->post("/login", "App\\Http\\Controllers\\LoginController@login");

Route::name("register.form")->get("/register", "App\\Http\\Controllers\\RegisterController@form");
Route::name("register")->post("/register", "App\\Http\\Controllers\\RegisterController@register");

Route::middleware("auth")->name("user")->get("/user", "App\\Http\\Controllers\\UserController@show");

Route::get("/logout", function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
});
