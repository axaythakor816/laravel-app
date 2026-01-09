<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('show', [Studentcontroller::class, 'show']);
Route::get('add', [Studentcontroller::class, 'add']);
Route::get('delete', [Studentcontroller::class, 'delete']);

Route::controller(Studentcontroller::class)->group(function() {
    Route::get('show', 'show');
    Route::get('add',  'add');
    Route::get('delete', 'delete');

    Route::get('about/{name}', 'about');

});




?>
