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
        'name' => 'Paolo',
        'lastname' => 'Salzano',
        'students' => [
            'Maria Rossi',
            'Filippo Verdi',
            'Ernesto BIanchi'
        ],

    ];
    return view('home', $data);
})->name('homepage');

Route::get('/chi-siamo', function() {
    return view('about');
})->name('about');
