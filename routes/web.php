<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::post('adduser', [Usercontroller::class, 'adduser']);

Route::view('home/profiles/user', 'home')->name('hm');

Route::view('home/profiles/{name}', 'home')->name('user');

Route::get('show', [Usercontroller::class, 'show']);
Route::get('user', [Usercontroller::class, 'user']);




?>
