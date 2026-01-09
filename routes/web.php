<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

Route::view('user-form', 'user-form');
Route::post('adduser', [Usercontroller::class, 'adduser']);

?>
