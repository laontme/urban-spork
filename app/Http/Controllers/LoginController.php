<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function form()
    {
        return response()->view("login");
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->safe()->all())) {
            $request->session()->regenerate();

            return redirect()->intended("user");
        }

        return response("CHE-TO NE TO");
    }
}
