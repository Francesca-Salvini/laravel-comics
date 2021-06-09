<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics_array = config('comics');

    $data = [
        "comics_array" => $comics_array
    ];

    return view('home', $data);
})->name('home');


Route::get('/fumetto/{id}', function ($id) {
    
    $comics_array = config('comics');

    $fumetto = []; 

    foreach($comics_array as $item) {
        if($item['id'] === $id) {
            $fumetto = $item;
        }
    }

    // if(empty($fumetto)){
    //     abort('404');
    // }

    $data = [ 
        'fumetto' => $fumetto
    ];

    return view('fumetto', $data);
})->name('fumetto');