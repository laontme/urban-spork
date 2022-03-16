<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function form()
    {
        return response()->view("register");
    }

    public function register(RegisterRequest $request)
    {
        $user = new User($request->safe()->all());
        $user->save();

        Auth::login($user);

        $request->session()->regenerate();
        return redirect()->intended("user");
    }
}
