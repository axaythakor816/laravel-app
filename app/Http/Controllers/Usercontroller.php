<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function adduser(Request $req) {
        $req->validate([
            'email' => 'required | email',
            'username' => 'required | min:3 | max:10',
            // 'skill' => 'required',
            'city' => 'required | min:3 | max:20 '

        ], [
            'username.required' => 'user Field can note be empty',
            'username.min' => 'username has to be atlest 3 char',
            'username.max' => 'username has to be max 10 char',
            'email.email' => 'not a valid email',

        ]);
    }

}
