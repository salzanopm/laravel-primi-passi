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

    $data = [
        'direction' => 'Aldo, Giovanni, Giacomo e Massimo Venier',
        'year' => '1997'        
    ];

    return view('home', $data);

})->name('homepage');

Route::get('/i-tre-uomini', function() {

    $data = [
        'cast' => [
            'Aldo Baglio',
            'Giacomo Poretti',
            'Giovanni Storti',
            'la gamba'
        ]
    ];

    return view('actors', $data);

})->name('actors');

Route::get('/la-gamba', function() {

    $data = [
        'cast' => [
            'Aldo Baglio',
            'Giacomo Poretti',
            'Giovanni Storti',
            'la gamba'
        ]
    ];

    return view('leg', $data);

})->name('leg');
