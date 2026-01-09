<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::prefix('student')->group(function() {
    Route::view('/home', 'home');
    Route::get('/show', [Usercontroller::class, 'show']);
    Route::get('/add', [Usercontroller::class, 'add']);

});

Route::prefix('student/india')->group(function() {
    Route::view('/home', 'home');
    Route::get('/show', [Usercontroller::class, 'show']);
    Route::get('/add', [Usercontroller::class, 'add']);

});


?>
