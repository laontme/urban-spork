<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show ()
    {
        $user = Auth::user();
        return response()->json([
            "name" => $user->name,
            "email" => $user->email,
        ]);
    }

    public function register (RegisterRequest $request)
    {
        $user = new User($request->validated());
        $user->save();

        Auth::login($user);

        $request->session()->regenerate();
        return redirect()->intended("user");
    }

    public function login (LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended("user");
        }

        return response("CHE-TO NE TO");
    }

    public function logout (Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->redirectTo("/");
    }
}
