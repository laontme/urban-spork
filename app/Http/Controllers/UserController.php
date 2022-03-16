<?php

namespace App\Http\Controllers;

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
}
