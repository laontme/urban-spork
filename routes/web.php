<?php

use App\Http\Controllers\UserController;
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

Route::view("/", "home")->name("home");

Route::view("/login", "login")->name("login.form");
Route::view("/register", "register")->name("register.form");

Route::post("/login", [UserController::class, "login"])->name("login");
Route::post("/register", [UserController::class, "register"])->name("register");

Route::middleware("auth")->group(function () {
    Route::get("/user", [UserController::class, "show"])->name("user-show");
    Route::get("/logout", [UserController::class, "logout"])->name("user-logout");

});
