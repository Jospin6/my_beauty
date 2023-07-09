<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    public function login(Request $request){
        $login = User::where("name",$request->name, 'and', 'password', $request->mdp);
        if ($login) {
            return Redirect::route('home');
        }
        return Redirect::route('Login');
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->mail,
            'password' => $request->mdp,
        ]);
        return Redirect::route('home');
    }
}
