<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|String|email',
            'password' => 'required|String',
        ]);

    /*    if($auth = auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('home')->with('success', 'Login successful');
    } */

        return redirect()->back();
}
}
