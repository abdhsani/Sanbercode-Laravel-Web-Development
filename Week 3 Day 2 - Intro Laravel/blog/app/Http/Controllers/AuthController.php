<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;

        return view('welcome')->with(['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
