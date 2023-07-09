<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    public function login(Request $request){
        $login = User::where("name", "=", $request->name)
        ->where("password","=", $request->mdp)
        ->first();
        if ($login) {
            if ($login->status === 1) {
                return Redirect::route('admin');
            }
            return Redirect::route('home');
        }
        return Redirect::route('Login');
    }

    public function store(Request $request){
        $status = 0;
        User::create([
            'name' => $request->name,
            'email' => $request->mail,
            'password' => $request->mdp,
            'status' => $status
        ]);
        return Redirect::route('home');
    }
}
