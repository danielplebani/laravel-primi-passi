<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $spesa = [
        'prodotto1' => 'pasta',
        'prodotto2' => 'pesce',
        'prodotto3' => 'carta igienica',
    ];

    $persone = [
        'persona1' => 'Luca',
        'persona2' => 'Marco',
        'persona3' => 'Maria',
        'persona4' => 'Mattia',
        'persona5' => 'Daniel',
    ];

    return view('home', ['spesa' => $spesa], ['persone' => $persone]);
})->name('home');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
