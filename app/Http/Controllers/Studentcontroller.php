<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    //
    function show()
    {
        return "this is show";
    }

    function add() {
        return "student add";
    }

    function delete() {
        return "student delete";
    }

    function about($name) {
        return $name;
    }
}
